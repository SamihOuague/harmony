<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Security;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\String\Slugger\SluggerInterface;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use App\Form\ProgrammeFormType;
use App\Form\BienFormType;
use App\Form\LotFormType;
use App\Entity\Programme;
use App\Entity\Bien;
use App\Entity\Lot;


class DashboardController extends AbstractController
{
    /**
     * @var Security
     */
    private $security;

    public function __construct(Security $security)
    {
        $this->security = $security;
    }

    function saveImg($img, SluggerInterface $slugger)
    {
        if ($img) {
            $originalFilename = pathinfo($img->getClientOriginalName(), PATHINFO_FILENAME);
            $safeFilename = $slugger->slug($originalFilename);
            $newFilename = $safeFilename.'-'.uniqid().'.'.$img->guessExtension();
            
            try {
                $img->move(
                    $this->getParameter('pages_directory'),
                    $newFilename
                );
            } catch (FileException $e) {
                var_dump($e);
            }
            return $newFilename;
        }
        return null;
    }

    /**
     * @Route("/bien/{id}/edit")
     */
    public function editBien(Request $request, int $id): Response
    {
        $bien = $this->getDoctrine()->getRepository(Bien::class)->find($id);
        $form = $this->createForm(BienFormType::class, $bien);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid())
        {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($form->getData());
            $entityManager->flush();
            return $this->redirectToRoute("dashboard");
        }
        return  $this->render('dashboard/bien.html.twig', [
            'controller_name' => 'DashboardController',
            'form' => $form->createView()
        ]);
    }

    /**
     * @Route("/programme/{id}/edit")
     */
    public function editProgramme(Request $request, SluggerInterface $slugger, int $id): Response
    {
        $programme = $this->getDoctrine()->getRepository(Programme::class)->find($id);
        $form = $this->createForm(ProgrammeFormType::class, $programme);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid())
        {
            $entityManager = $this->getDoctrine()->getManager();
            if ($miniature = $form->get('miniature')->getData())
                $programme->setMiniature($this->saveImg($miniature, $slugger));
            if ($img1 = $form->get('img1')->getData())
                $programme->setImg1($this->saveImg($img1, $slugger));
            if ($img2 = $form->get('img2')->getData())
                $programme->setImg2($this->saveImg($img2, $slugger));
            $entityManager->persist($form->getData());
            $entityManager->flush();
            return $this->redirectToRoute("home");
        }
        return  $this->render('dashboard/programme.html.twig', [
            'controller_name' => 'DashboardController',
            'form' => $form->createView()
        ]);
    }

    /**
     * @Route("/programme/{id}/delete")
     */
    public function deleteProgramme(Request $request, int $id) : Response 
    {
        $programme = $this->getDoctrine()->getRepository(Programme::class)->find($id);
        if (!$programme)
            return $this->redirectToRoute("home");
        $form = $this->createFormBuilder()
                    ->add('id', HiddenType::class, [
                        "attr" => [
                            "value" => $id
                        ]
                    ])
                    ->add('Supprimer', SubmitType::class, [
                        "attr" => [
                            "class" => "btn btn-danger"
                        ]
                    ])
                    ->getForm();
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid())
        {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($programme);
            $entityManager->flush();
            return $this->redirectToRoute("dashboard");
        }
        return $this->render("dashboard/delete.html.twig", [
            'name' => 'programme',
            'title' => $programme->getTitle(),
            'form' => $form->createView()
        ]);
    }

    /**
     * @Route("/programme/new")
     */
    public function programme(Request $request, SluggerInterface $slugger): Response 
    {
        $programme = new Programme();
        $form = $this->createForm(ProgrammeFormType::class, $programme);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $miniatureFile = $form->get('miniature')->getData();
            $img1File = $form->get('img1')->getData();
            $img2File = $form->get('img2')->getData();
            if ($miniatureFile) {
                $newMinName = $this->saveImg($miniatureFile, $slugger);
                $newImg1Name = null;
                $newImg2Name = null;
                if ($img1File)
                    $newImg1Name = $this->saveImg($img1File, $slugger);
                if ($img2File)
                    $newImg2Name = $this->saveImg($img2File, $slugger);
                $programme->setMiniature($newMinName);
                $programme->setImg1($newImg1Name);
                $programme->setImg2($newImg2Name);
                $entityManager->persist($form->getData());
                $entityManager->flush();
            }
            return $this->redirectToRoute('dashboard');
        }
        return $this->render('dashboard/programme.html.twig', [
            'controller_name' => 'DashboardController',
            'form' => $form->createView()
        ]);
    }

    /**
     * @Route("/dashboard", name="dashboard")
     */
    public function index(): Response
    {
        if (!$this->security->getUser())
            return $this->redirectToRoute("home");
        $programmes = $this->getDoctrine()->getRepository(Programme::class)->findAll();
        return $this->render('dashboard/index.html.twig', [
            'controller_name' => 'DashboardController',
            'programmes' => $programmes
        ]);
    }

    /**
     * @Route("/dashboard/{id}/bien")
     */
    public function bien(int $id): Response
    {
        if (!$this->security->getUser())
            return $this->redirectToRoute("home");
        $biens = $this->getDoctrine()->getRepository(Programme::class)->find($id)->getBiens();
        return $this->render('dashboard/biens.html.twig', [
            'controller_name' => 'DashboardController',
            'biens' => $biens,
            'id' => $id
        ]);
    }

    /**
     * @Route("/bien/{id}/new")
     */
    public function newBien(int $id, Request $request) : Response
    {
        if (!$this->security->getUser())
            return $this->redirectToRoute("home");
        $programme = $this->getDoctrine()->getRepository(Programme::class)->find($id);
        if ($programme) {
            $bien = new Bien();
            $form = $this->createForm(BienFormType::class, $bien);
            $form->handleRequest($request);
            if ($form->isSubmitted() && $form->isValid()) {
                $entityManager = $this->getDoctrine()->getManager();
                $bien->setProgramme($programme);
                $entityManager->persist($form->getData());
                $entityManager->flush();
                return $this->redirectToRoute("dashboard");
            }
            return $this->render('dashboard/bien.html.twig', [
                'controller_name' => 'HomeController',
                'form' => $form->createView()
            ]);
        } else {
            return $this->redirectToRoute("dashboard");
        }
    }

    /**
     * @Route("/dashboard/{id}/lot")
     */
    public function lot(int $id): Response
    {
        if (!$this->security->getUser())
            return $this->redirectToRoute("home");
        $lots = $this->getDoctrine()->getRepository(Bien::class)->find($id)->getLots();
        return $this->render('dashboard/lots.html.twig', [
            'controller_name' => 'DashboardController',
            'lots' => $lots,
            'id' => $id
        ]);
    }

    /**
     * @Route("/lot/{id}/new")
     */
    public function newLot(int $id, Request $request) : Response
    {
        if (!$this->security->getUser())
            return $this->redirectToRoute("home");
        $bien = $this->getDoctrine()->getRepository(Bien::class)->find($id);
        if ($bien) {
            $lot = new Lot();
            $form = $this->createForm(LotFormType::class, $lot);
            $form->handleRequest($request);
            if ($form->isSubmitted() && $form->isValid()) {
                $entityManager = $this->getDoctrine()->getManager();
                $lot->setBien($bien);
                $entityManager->persist($form->getData());
                $entityManager->flush();
                return $this->redirectToRoute("dashboard");
            }
            return $this->render('dashboard/bien.html.twig', [
                'controller_name' => 'HomeController',
                'form' => $form->createView()
            ]);
        } else {
            return $this->redirectToRoute("dashboard");
        }
    }
}
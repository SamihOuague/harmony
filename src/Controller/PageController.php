<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\String\Slugger\SluggerInterface;
use Symfony\Component\Security\Core\Security;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use App\Form\PageFormType;
use App\Entity\Page;


class PageController extends AbstractController
{
    /**
     * @Var Security
     */
    private $security;

    public function __construct(Security $security) {
        $this->security = $security;
    }

    /**
     * @Route("/page/new", name="app_new_page")
     */
    public function new(Request $request, SluggerInterface $slugger): Response {
        if (!($this->security->getUser()))
            return $this->redirectToRoute('app_login');
        $page = new Page();
        $form = $this->createForm(PageFormType::class, $page);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->get('page') && $form->isValid()) {
            $pageFile = $form->get('page')->getData();

            if ($pageFile) {
                $originalFilename = pathinfo($pageFile->getClientOriginalName(), PATHINFO_FILENAME);
                $safeFilename = $slugger->slug($originalFilename);
                $newFilename = $safeFilename.'-'.uniqid().'.'.$pageFile->guessExtension();
                $entityManager = $this->getDoctrine()->getManager();
                
                try {
                    $pageFile->move(
                        $this->getParameter('pages_directory'),
                        $newFilename
                    );
                } catch (FileException $e) {
                    var_dump($e);
                }

                $page->setPage($newFilename);
                $page->setNumero($form->get('numero')->getData());
                $page->setTitre($form->get('titre')->getData());
                $entityManager->persist($page);
                $entityManager->flush();
            }
            return $this->redirectToRoute('page');
        }

        return $this->render('page/new.html.twig', [
            'controller_name' => 'PageController',
            'form' => $form->createView()
        ]);
    }


    /**
     * @Route("/page", name="page")
     */
    public function index(): Response
    {
        if (!($this->security->getUser()))
            return $this->redirectToRoute('app_login');

        $pages = $this->getDoctrine()->getRepository(Page::class)->findAll();

        return $this->render('page/index.html.twig', [
            'controller_name' => 'PageController',
            'pages' => $pages
        ]);
    }

    /**
     * @Route("/page/{id}/delete")
     */
    public function deletePage(int $id, Request $request) : Response {
        if (!($this->security->getUser()))
            return $this->redirectToRoute('app_login');
        $page = $this->getDoctrine()->getRepository(Page::class)->find($id);
        $entityManager = $this->getDoctrine()->getManager();
        $form = $this->createFormBuilder()
                    ->add('id_page', HiddenType::class, [
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
        if ($form->isSubmitted() && $form->isValid()) {
            if ($form->get('id_page')->getData() == $id) {
                $entityManager->remove($page);
                $entityManager->flush();
            }
            return $this->redirectToRoute('page');
        }

        return $this->render('page/delete.html.twig', [
            'form' => $form->createView(),
            'title' => $page->getTitre()
        ]);
    }
}

<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
//use Symfony\Component\Mailer\MailerInterface;
//use Symfony\Component\Mime\Email;
use App\Form\ContactFormType;
use App\Form\RappelFormType;
use App\Entity\Programme;
use App\Entity\Prospect;
use App\Entity\Lot;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index(): Response
    {
        $programmes = $this->getDoctrine()->getRepository(Programme::class)->findAll();
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
            'programmes' => $programmes,
            'nbbiens' => sizeof($this->getDoctrine()->getRepository(Lot::class)->findAll())
        ]);
    }

    /**
     * @Route("/detail/{id}")
     */
    public function detail(int $id): Response
    {
        $programme = $this->getDoctrine()->getRepository(Programme::class)->find($id);
        if (!$programme)
            return $this->redirectToRoute("home");
        $coords = explode(",", $programme->getCoords());
        return $this->render('home/detail.html.twig', [
            'biens' => $programme->getBiens(),
            'programme' => $programme,
            'programmes' => $this->getDoctrine()->getRepository(Programme::class)->findAll(),
            'lng' => trim($coords[1]),
            'lat' => trim($coords[0])
        ]);
    }

    /**
     * @Route("/guide", name="guide")
     */
    public function guide(): Response
    {
        return $this->render("home/guide.html.twig");
    }

    /**
     * @Route("/harmony-promotion", name="harmony")
     */
    public function harmony(): Response
    {
        return $this->render("home/harmony.html.twig");
    }

    /**
     * @Route("/contact", name="contact")
     */
    public function contact(): Response
    {
        $form = $this->createForm(ContactFormType::class);
        return $this->render("home/contact.html.twig", [
            "form" => $form->createView()
        ]);
    }

    /**
     * @Route("/programme", name="programme")
     */
    public function programme(): Response
    {
        $programmes = $this->getDoctrine()->getRepository(Programme::class)->findAll();
        return $this->render("home/programme.html.twig", [
            'programmes' => $programmes
        ]);
    }

    /**
     * @Route("/rappel", name="rappel")
     */
    public function rendezVous(Request $request): Response
    {
        $lead = new Prospect();
        $form = $this->createForm(RappelFormType::class, $lead);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $pros = $this->getDoctrine()->getRepository(Prospect::class)->findBy(["email" => $form->getData()->getEmail()]);
            $data = $form->getData();
            //$email = (new Email())
            //->from('contact@harmony-promotion.com')
            //->to('dev@harmony-promotion.com')
            //->cc('cc@example.com')
            //->bcc('bcc@example.com')
            //->replyTo('fabien@example.com')
            //->priority(Email::PRIORITY_HIGH)
            //->subject('Time for Symfony Mailer!')
            //->text('Sending emails is fun again!')
            //->html('<p>See Twig integration for better HTML integration!</p>');
            //$mailer->send($email);

            //$this->importLead($data);
            if (!$pros) {
                $entityManager = $this->getDoctrine()->getManager();
                $entityManager->persist($form->getData());
                $entityManager->flush();
            }
            return $this->redirectToRoute('home');
        }
        return $this->render("home/rappel.html.twig", [
            "form" => $form->createView(),
            "form_name" => "Être rappelé"
        ]);
    }

    /**
     * @Route("/rappel/{id}/{type}")
     */
    public function rappel(Request $request, int $id, string $type): Response
    {
        $lead = new Prospect();
        $form = $this->createForm(RappelFormType::class, $lead);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $pros = $this->getDoctrine()->getRepository(Prospect::class)->findBy(["email" => $form->getData()->getEmail()]);
            $data = $form->getData();
            $fullname = explode(" ", trim($data->getFullname()));
            $this->importLead($data);
            if (!$pros) {
                $entityManager = $this->getDoctrine()->getManager();
                $entityManager->persist($form->getData());
                $entityManager->flush();
            }
            return $this->redirectToRoute('home');
        }
        return $this->render("home/rappel.html.twig", [
            "form" => $form->createView(),
            "form_name" => "Être rappelé"
        ]);
    }

    /**
     * @Route("/brochure/{id}/{type}")
     */
    public function brochure(Request $request, int $id, string $type): Response
    {
        $lead = new Prospect();
        $form = $this->createForm(RappelFormType::class, $lead);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $pros = $this->getDoctrine()->getRepository(Prospect::class)->findBy(["email" => $form->getData()->getEmail()]);
            $data = $form->getData();
            $this->importLead($data);
            if (!$pros) {
                $entityManager = $this->getDoctrine()->getManager();
                $entityManager->persist($form->getData());
                $entityManager->flush();
            }
            return $this->redirectToRoute('home');
        }
        return $this->render("home/rappel.html.twig", [
            "form" => $form->createView(),
            "form_name" => "Demande de brochure"
        ]);
    }

    /**
     * @Route("/recevoir-le-guide", name="telecharge")
     */
    public function telecharge(Request $request): Response
    {
        $lead = new Prospect();
        $form = $this->createForm(RappelFormType::class, $lead);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $pros = $this->getDoctrine()->getRepository(Prospect::class)->findBy(["email" => $form->getData()->getEmail()]);
            $data = $form->getData();
            $this->importLead($data);
            if (!$pros) {
                $entityManager = $this->getDoctrine()->getManager();
                $entityManager->persist($form->getData());
                $entityManager->flush();
            }
            return $this->redirectToRoute('home');
        }
        return $this->render("home/rappel.html.twig", [
            "form" => $form->createView(),
            "form_name" => "Recevoir le guide"
        ]);
    }

    /**
     * @Route("/FAQ", name="faq")
     */
    public function faq(): Response
    {
        return $this->render("home/faq.html.twig");
    }

    public function importLead(Prospect $data)
    {
        $ch = curl_init("https://harmony.getunlatch.com/api/v1/key/");
        curl_setopt_array($ch, [
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_POST => true,
            CURLOPT_HTTPHEADER => [
                "Content-Type: application/json"
            ],
            CURLOPT_POSTFIELDS => json_encode([
                "email" => "api@harmony.getunlatch.com",
                "password" => "J6ZyirX26"
            ])
        ]);
        $response = curl_exec($ch);
        $token = null;
        if ($response) {
            $token = (array) json_decode($response);
            $token = $token["token"];
        }
        curl_close($ch);

        $ch = curl_init("https://harmony.getunlatch.com/api/v1/lead-import/");
        $fullname = explode(" ", trim($data->getFullname()));
        curl_setopt_array($ch, [
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_POST => true,
            CURLOPT_HTTPHEADER => [
                "Accept: application/json",
                "Content-Type: application/json",
                "Authorization: Bearer ". $token
            ],
            CURLOPT_POSTFIELDS => json_encode([
                "programIds" => [
                    "1600849836"
                ],
                "MediaReference" => "1034957417",
                "lastname" => $fullname[0],
                "firstname" => (isset($fullname[1])) ? $fullname[1] : "",
                "mobile_phone" => $data->getPhone(),
                "email" => $data->getEmail()
            ])
        ]);
        $response = curl_exec($ch);
        curl_close($ch);
    }
}
<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Security;
use App\Entity\Page;

class PresentationController extends AbstractController
{
    /**
     * @Var Security
     */
    private $security;

    public function __construct(Security $security) {
        $this->security = $security;
    }

    /**
     * @Route("/presentation", name="presentation")
     */
    public function index(): Response
    {
        if (!($this->security->getUser()))
            return $this->redirectToRoute('app_login');
        $pages = $this->getDoctrine()->getRepository(Page::class)->findAll();

        return $this->render('presentation/index.html.twig', [
            'controller_name' => 'HomeController',
            'pages' => $pages
        ]);
    }
}

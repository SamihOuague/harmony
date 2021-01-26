<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\String\Slugger\SluggerInterface;
use App\Entity\News;
use App\Form\NewsFormType;

class NewsController extends AbstractController
{    
    /**
     * @Route("/news", name="news")
     */
    public function index(): Response
    {
        $news = $this->getDoctrine()->getRepository(News::class)->findAll();
        return $this->render('news/index.html.twig', [
            'articles' => $news,
        ]);
    }

    /**
     * @Route("/article/{id}")
     */
    public function article(int $id): Response
    {
        $article = $this->getDoctrine()->getRepository(News::class)->find($id);
        return $this->render('news/view_article.html.twig', [
            'article' => $article
        ]);
    }


    /**
     * @Route("/add/new", name="newnew")
     */
    public function createArticle(SluggerInterface $slugger, Request $request): Response
    {
        $newnew = new News();
        $form = $this->createForm(NewsFormType::class, $newnew);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid())
        {
            $entityManager = $this->getDoctrine()->getManager();
            if ($miniature = $form->get('miniature')->getData())
                $newnew->setMiniature($this->saveImg($miniature, $slugger));
            $entityManager->persist($form->getData());
            $entityManager->flush();
            return $this->redirectToRoute("home");
        }
        return $this->render("news/addArticle.html.twig", [
            'form' => $form->createView()
        ]);
    }

    function saveImg($img, SluggerInterface $slugger)
    {
        if ($img) {
            $originalFilename = pathinfo($img->getClientOriginalName(), PATHINFO_FILENAME);
            $safeFilename = $slugger->slug($originalFilename);
            $newFilename = $safeFilename.'-'.uniqid().'.'.$img->guessExtension();
            
            try {
                $img->move(
                    $this->getParameter('news_directory'),
                    $newFilename
                );
            } catch (FileException $e) {
                var_dump($e);
            }
            return $newFilename;
        }
        return null;
    }
}

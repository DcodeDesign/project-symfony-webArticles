<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class PostArticlesController extends AbstractController
{
    /**
     * @Route("/", name="post_articles")
     */
    public function index()
    {
        return $this->render('post_articles/index.html.twig', [
            'controller_name' => 'PostArticlesController',
        ]);
    }
}

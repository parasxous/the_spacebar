<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Psr\Log\LoggerInterface;

class ArticleController extends AbstractController
{
    /**
     * @Route("/", name="app_homepage")
     */
    public function homepage()
    {
        return $this->render('article/homepage.html.twig');
    }

    /**
     * @Route("/news/{slug}", name= "article_show")
     */
    public function show($slug){

    $comments =[
        'Now would this be apple wood smoked bacon? Or traditional bacon - IMHO it makes a difference.',
        'Now would this be apple wood smoked bacon? Or traditional bacon - IMHO it makes a difference.',
        'Now would this be apple wood smoked bacon? Or traditional bacon - IMHO it makes a difference.'
    ];
        return $this->render('article/show.html.twig',[
            'title'=>ucwords(str_replace('-',' ',$slug)),
            'slug'=>$slug,
            'comments'=>$comments
            ]);
    }
    /**
     * @Route("/news/{slug}/heart", name = "article_toggle_heart", methods={"POST"})
     */
    public function toggleArticleHeart($slug, LoggerInterface $logger){
        $logger->info("article is being hearted");
        //todo actualy heart/unheart the article
        return new JsonResponse(['hearts'=>rand(5,100)]);
    }
}
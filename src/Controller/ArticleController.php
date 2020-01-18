<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;


class ArticleController
{
    /**
     * @Route("/")
     */
    public function homepage()
    {
        return new Response('omg my first page');
    }

    /**
     * @Route("/news/{slug}")
     */
    public function show($slug){
        return new Response(sprintf(" news " .$slug));
    }
}
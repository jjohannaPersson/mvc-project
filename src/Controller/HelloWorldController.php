<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HelloWorldController extends AbstractController
{
    public function helloMessage(): Response
    {
        return new Response(
            "Hello world, message only"
        );
    }

    public function helloMessageView(): Response
    {
        return $this->render('message.html.twig', [
            'message' => "Denna sida är skapad i samband med ett slutprojekt i kursen MVC på Blekinge Tekniska Högskola. På denna sida kan du spela spelet Game 21, lycka till!",
        ]);
    }
}

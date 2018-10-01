<?php

namespace App\Controller;

use Psr\Log\LoggerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController
{
    /**
    * @Route("/hello/{name}")
    */
    public function hello($name, LoggerInterface $logger)
    {
        $logger->info("Saying hello to $name!");
        return new Response("Hello $name!");
    }
}
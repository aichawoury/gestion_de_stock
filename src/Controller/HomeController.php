<?php

namespace App\Controller;

use Psr\Log\LoggerInterface;
use Symfony\Component\HttpFoundation\Response;
// use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class HomeController

{
    // @Route("/test", methods={"GET", "POST")
    public function test()
    { 
        // $logger->error("mon message de log");
        return new Response("hello world");
    } 
   
}



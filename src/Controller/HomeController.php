<?php

namespace App\Controller;
use Symfony\Component\HttpFoundation\Response;
// use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class HomeController

{
    // @Route()
    public function test()
    { 
        return new Response("hello world");
    } 
   
}



<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController
{
    #[Route("/", name: "home")]
    public function index(Request $request):Response
    {
        return new Response('Bonjour '.$request->query->get('name','anonyme'));

    }
}

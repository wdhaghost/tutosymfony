<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

class HomeController
{
    public function index():Response
    {
        return new Response('Bonjour les gens');

    }
}

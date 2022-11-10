<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

class TestController
{
    public function index()
    {
        dd("ça fonctionne");
    }

    public function test(Request $request)
    {
        dump($request);

        $age = $request->query->get('age', 0);

        return new Response("Vous avez $age ans");
    }
}

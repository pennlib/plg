<?php
namespace App\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

class Controller
{
    public function master(Request $request) 
    {
        return new Response('Nope, this is not a leap year.');
    } 
}

<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

// A controller is a php function that reads from the resquest object and responds with a response object 

class DefaultController extends AbstractController
{   // dynamic value to route /{name}

    #[Route('/', name: 'default')]
    public function index(): Response
    {

        /*
        *  render first arg mandatory View file path
        *  Array key and value pairs
        *
        *  or send $this->json([])
        *  
        *  new Response()
        */

        $users = ['Cory', 'Seth', 'Cyd', 'Kyle'];

        return $this->render('default/index.html.twig', [
            'controller_name' => 'DefaultController',
            'users' => $users
        ]);

        // return $this->json('Hello');

        // return new Response($name);

        // return $this->redirect('https://symfony.com/');

        // return $this->redirectToRoute('test');
    }

    // do not redirect to dynamic parameters
    #[Route('/test', name: 'test')]
    public function test(): Response
    {

        return new Response('test route');
    }
}

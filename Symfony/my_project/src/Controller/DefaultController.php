<?php

namespace App\Controller;

use App\Entity\User;
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
        // 
        // $entityManager = $this->getDoctrine()->getManager();

        // // Entity Model
        // $user1 = new User;
        // $user2 = new User;
        // $user3 = new User;
        // $user4 = new User;
        $users = $this->getDoctrine()->getRepository(User::class)->findAll();


        //    $user1->setName($users[0]);
        //    $user2->setName($users[1]);
        //    $user3->setName($users[2]);
        //    $user4->setName($users[3]);

        //     // instance of the object to save
        //     $entityManager->persist($user1);
        //     $entityManager->persist($user2);
        //     $entityManager->persist($user3);
        //     $entityManager->persist($user4);

        //     // saves to db
        //     $entityManager->flush();

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

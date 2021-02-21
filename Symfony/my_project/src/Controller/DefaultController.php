<?php

namespace App\Controller;

use App\Entity\User;
use App\Services\GiftService;
use PhpParser\Comment\Doc;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Cookie;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\SessionInterface;


// A controller is a php function that reads from the resquest object and responds with a response object 

class DefaultController extends AbstractController
{   // dynamic value to route /{name}

    #[Route('/', name: 'default')]
    public function index(GiftService $gifts, Request $request, SessionInterface $session): Response
    {
        /*
        *  render first arg mandatory View file path
        *  Array key and value pairs
        *
        *  or send $this->json([])
        *  
        *  new Response()
        */

        // Responsible for CRUD operations
        // $entityManager = $this->getDoctrine()->getManager();

        // Entity Model
        // $user1 = new User;
        // $user2 = new User;
        // $user3 = new User;
        // $user4 = new User;
        $users = $this->getDoctrine()->getRepository(User::class)->findAll();

        // $this->addFlash('notice', 'Your changes were saved');

        $this->addFlash('warning', 'Your changes were not saved');

        // cookies 
        // cookie name , cookie value, duration
        $cookie = new Cookie(
            'my_cookie',
            'cookie value',
            time() + (2 * 365 * 24 * 60 * 60)
        );

        // gets data from cookies but this code seems to set sesssion cookie as well
        // exit($request->cookies->get('PHPSESSID'));

        // session set

        $session->set('name', 'session value');
        // $session->remove('name');

        $session->clear();

        if($session->has('name')){
            exit($session->get('name'));
        }



        // $res = new Response();
        // $res->headers->setCookie($cookie);

        // $res->headers->clearCookie('my_cookie');
        // $res->send();


        //    $user1->setName($users[0]);
        //    $user2->setName($users[1]);
        //    $user3->setName($users[2]);
        //    $user4->setName($users[3]);

        // $gifts = ['flowers', 'books', 'piano', 'money' ];
        // shuffle($gifts);



        //     // instance of the object to save || preparation
        //     $entityManager->persist($user1);
        //     $entityManager->persist($user2);
        //     $entityManager->persist($user3);
        //     $entityManager->persist($user4);

        //     // saves to db
        //     $entityManager->flush();

        return $this->render('default/index.html.twig', [
            'controller_name' => 'DefaultController',
            'users' => $users,
            'gifts' => $gifts->gifts
        ]);

        // return $this->json('Hello');

        // return new Response($name);

        // return $this->redirect('https://symfony.com/');

        // return $this->redirectToRoute('test');
    }



    // requirements for Url page and default values 
    #[Route('/blog/{page?}', name: 'blog', requirements: ['page' => '\d+'])]
    public function blog(): Response
    {
        return new Response('Optional Parameters in url and requirements for parameters');
    }

    #[Route('/articles/{_locale}/{year}/{slug}/{category}', name: 'articles', defaults: ['category' => "computers"], requirements: ["_locale" => "en|fr", "category" => "computers|rtv", "year" => "\d+"])]
    public function articles(): Response
    {
        return new Response('Optional Parameters in url and requirements for parameters');
    }

    // paths that determine localization https://symfony.com/doc/current/routing.html
     #[Route(path: ["nl" => "/over-ons", "en" => "/about-us"], name: 'aboutUs')]
     public function aboutUs(): Response
     {
         return new Response('Language Routes');
     }
}

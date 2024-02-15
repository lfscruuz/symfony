<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BlogController extends AbstractController {
    #[Route('/blog', name:'blog_list')]
    public function list() : Response{
        return new Response("<html><body>AQUI</body></html>");
    }

    #[Route("/blog/{user}", name:"blog_user")]
    public function show(string $user): Response{
        $posts = [
            'post 1',
            'post 2',
            'post 3',
            'post 4',
            'post 5',
            'post 6',
        ];
        dump($this);
        $user = ucwords(str_replace("-"," ", $user));
        return $this->render('blog/lista.twig', [
            'user'=> $user,
            'posts' => $posts
        ]);
    }
}
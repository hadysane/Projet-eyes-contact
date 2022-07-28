<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProductController extends AbstractController
{
    #[Route('/product', name: 'app_product')]
    public function index(): Response
    {
        return $this->render('product/index.html.twig', [
            'controller_name' => 'ProductController',
        ]);
    }


    #[Route('/lunettes-de-vue/{id}', name: 'app_product')]
    public function lunettes_de_vue(int $id): Response
    {
        $data = []; 
        $title = "";

        if($id === 1){
            $data = [ 
                ["name" => "Lunette de vue femme", "prix" => 75.00 ],
                ["name" => "Lunette de vue femme", "prix" => 75.00],
                ["name" => "Lunette de vue femme", "prix" => 75.00],
                ["name" => "Lunette de vue femme", "prix" => 75.00],
                ["name" => "Lunette de vue femme", "prix" => 75.00],
                ["name" => "Lunette de vue femme", "prix" => 75.00],
                ["name" => "Lunette de vue femme", "prix" => 75.00],
                ["name" => "Lunette de vue femme", "prix" => 75.00],
                ["name" => "Lunette de vue femme", "prix" => 75.00],
                ["name" => "Lunette de vue femme", "prix" => 75.00],
            ];

            $title = "Lunette de vue Femme";
        }

        return $this->render('product/lunette-de-vue.html.twig', [
            'controller_name' => 'ProductController',
            'data' => $data,
            'title' => $title,
            'id' => $id
        ]);
    }
}

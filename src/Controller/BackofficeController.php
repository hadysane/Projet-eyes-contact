<?php

namespace App\Controller;

use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


/**
 * @Route("/backoffice")
 */

class BackofficeController extends AbstractController
{
    /**
     * @Route("/", name="backoffice_index", methods={"GET"})
     */
    public function index(): Response
    {
        return $this->render('backoffice/index.html.twig', [
            'controller_name' => 'BackofficeController',
        ]);
    }

    /**
     * @Route("/account-settings", name="backoffice_account_settings", methods={"GET"})
     */
    public function updateAdminAccount(): Response
    {
        return $this->render('backoffice/account-settings.html.twig', [
            'controller_name' => 'BackofficeController',
        ]);
    }

    /**
     * @Route("/products", name="backoffice_products_index", methods={"GET"})
     */
    public function showProducts(): Response
    {
        return $this->render('backoffice/pagesList/products.html.twig', [
            'controller_name' => 'BackofficeController',
        ]);
    }
    
    /**
     * @Route("/variations", name="backoffice_variations_index", methods={"GET"})
     */
    public function showVariations(): Response
    {
        return $this->render('backoffice/pagesList/variations.html.twig', [
            'controller_name' => 'BackofficeController',
        ]);
    }

    /**
     * @Route("/categories", name="backoffice_categories_index", methods={"GET"})
     */
    public function showCategories(): Response
    {
        return $this->render('backoffice/pagesList/categories.html.twig', [
            'controller_name' => 'BackofficeController',
        ]);
    }

    /**
     * @Route("/suppliers", name="backoffice_suppliers_index", methods={"GET"})
     */
    public function showSuppliers(): Response
    {
        return $this->render('backoffice/pagesList/suppliers.html.twig', [
            'controller_name' => 'BackofficeController',
        ]);
    }

    /**
     * @Route("/users", name="backoffice_users_index", methods={"GET"})
     */
    public function showUsers(): Response
    {
        return $this->render('backoffice/pagesList/users.html.twig', [
            'controller_name' => 'BackofficeController',
        ]);
    }

    /**
     * @Route("/orders", name="backoffice_orders_index", methods={"GET"})
     */
    public function showOrders(): Response
    {
        return $this->render('backoffice/pagesList/orders.html.twig', [
            'controller_name' => 'BackofficeController',
        ]);
    }

    /**
     * @Route("/add/product", name="backoffice_product_add", methods={"GET"})
     */
    public function addProduct(): Response
    {
        return $this->render('backoffice/pagesAddForm/product.html.twig', [
            'controller_name' => 'BackofficeController',
        ]);
    }

    
}

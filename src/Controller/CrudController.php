<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CrudController extends AbstractController
{
    /**
     * @Route("/", name="crud")
     */
    public function index(): Response
    {
        return $this->render('crud/index.html.twig');
    }

    /**
     * @Route("/create", name="create_task", methods={"POST"})
     */
    public function create()
    {
        exit('to do somthing ');
    }

    /**
     * @Route("/switch-status/{id}", name="switch_status")
     */
    public function switchStatus($id)
    {
        exit('Todo somethign '. $id);
    }

    /**
     * @Route("/delete/{id}", name="delete_task")
     */
    public function delete($id)
    {
        exit('Todo somethign '. $id);
    }
}

<?php

namespace App\Controller;

use App\Entity\Task;
use Symfony\Component\HttpFoundation\Request;
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
    public function create(Request $request)
    {
        $title = trim($request->request->get('title'));
        if(empty($title)) return $this->redirectToRoute('crud');

        $em = $this->getDoctrine()->getManager();

        $task = new Task();
        $task->setTitle($title);

        $em->persist($task);
        $em->flush();

        return $this->redirectToRoute('crud');
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

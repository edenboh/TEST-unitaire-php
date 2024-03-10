<?php

namespace App\Controller;

use App\Entity\Person;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class VisualizePersonController extends AbstractController
{
    #[Route('/visualize-person', name: 'app_visualize_person')]
    public function index(): Response
    {
        $person=new Person();
        //var_dump($person);//en moche
       // dump($person);//ca s'affiche dans la bare en bas
       // dd($person);//on affiche ce qu'il y a jusqu'a cette ligne le apres n'est pas interpreté
        return $this->render('visualize_person/index.html.twig', [
            'person' => $person,
        ]);
    }
}

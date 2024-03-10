<?php

namespace App\Controller;

use App\Entity\Person;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class VisualizeTableauController extends AbstractController
{
    #[Route('/visualize-tableau', name: 'app_visualize_tableau')]
    public function index(): Response
    {
        $person1=new Person();
        $person1->setFirstName("rivka");
        $person1->setLastName("juster");
     //   $person1->setBirthDate(new \DateTimeImmutable("26/04/1997"));
        $person1->setAge(26);
        $person1->setTshirts(["blanc","noir","rose"]);
        $person2=new Person();
        $person2->setFirstName("eden");
        $person2->setLastName("bohbot");
    //    $person2->setBirthDate(new \DateTimeImmutable("11/03/2003"));
        $person2->setAge(20);
        $person2->setTshirts(["vert","bleu","violet"]);
        $person3=new Person();
        $person3->setFirstName("odi");
        $person3->setLastName("chicheportiche");
       // $person3->setBirthDate(new \DateTimeImmutable("09/10/2002"));
        $person3->setAge(20);
        $person3->setTshirts(["turquoise","orange","kaki"]);
        $person4=new Person();
        $person4->setFirstName("lea");
        $person4->setLastName("sebbag");
       // $person4->setBirthDate(new \DateTimeImmutable("28/02/2003"));
        $person4->setAge(20);
        $person4->setTshirts(["jaune","rouge","mauve"]);

        $tableau=[];
        $tableau=[$person1,$person2,$person3,$person4];

        return $this->render('visualize-tableau/tableau.html.twig', [
            'tableau' => $tableau,
        ]);
    }
}
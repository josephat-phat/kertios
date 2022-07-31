<?php

namespace App\Controller;

use App\Entity\Gare;
use Doctrine\ORM\EntityManagerInterface;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class AfficheController extends AbstractController
{
    /**
     * @Route("/", name="app_affiche")
     */
    public function index(EntityManagerInterface $manager): Response
    {
        
        $gare = $gar = $manager->getRepository(Gare::class)->findAll();
        if(empty($_POST["filtre"])){
            return $this->render('affiche/index.html.twig',[
                "gares"=>$gare,
                "gare1"=>$gare,
            ]);
        }else{
            $gare = $manager->getRepository(Gare::class)->findBy(["resCom"=>$_POST["filtre"]]);
            return $this->render('affiche/index.html.twig',[
                "gares"=>$gare,
                "gare1"=>$gar,
            ]);
        }
    }
}

<?php

namespace App\Controller;
use App\Entity\Comptes;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class CompteController extends AbstractController
{
    /**
     * @Route("/compte", name="compte")
     */
    public function index()

    {
        extract($_POST);
        $entityManager = $this->getDoctrine()->getManager();
      
        $compte=new comptes();
        $forms =$this->createForm(Comptes::class ,$compte);
        $data['form'] =$forms->createView();

        $data['compte'] = $entityManager->getRepository(Comptes::class)->findAll();
        return $this->render('compte/compte.html.twig', $data);
        
        
     }
      /**
     * @Route("/compte"/get/{id}", name="compte")
     */
    public function getCompte($id)
    {
        return $this->render('compte/compte.html.twig');
    }



}
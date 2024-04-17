<?php

namespace App\Controller;

use App\Form\ProfilType;
use App\Service\UserService;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class ProfilController extends AbstractController
{
    #[Route('/profil', name: 'app_profil')]
    public function index(Request $request, EntityManagerInterface $em, UserService $us): Response
    {
        $form = $this->createForm(ProfilType::class, $this->getUser());
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $ancien = $form->get('ancien')->getData();
            $nouveau = $form->get('nouveau')->getData();
            $resultat = $us->changeMotDePasse($this->getUser(),$ancien, $nouveau);
            $em->flush();
        }

        return $this->render('profil/index.html.twig', [
            'form' => $form
        ]);
    }
}

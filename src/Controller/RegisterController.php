<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Services\MailerService; 
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use App\Form\RegisterType; 

class RegisterController extends AbstractController
{
    #[Route('/register', name: 'app_register')]
    public function index(Request $request, MailerService $mailer): Response
    {
        $form = $this->createForm(RegisterType::class);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            
            $registerFormData = $form->getData();

            $subject = 'Demande d\inscription sur le site Eyes contact  de ' . $registerFormData['email'];
            
            $content = '<br> <br> Message de ' . '<b>' . $registerFormData['prenom'] . ' '  . $registerFormData['nom'] . '</b>'. '<br> <br>'. 
            'Numéro de téléphone : ' . $registerFormData['mobile'] . '<br> <br>'.$registerFormData['password'];
            
            $mailer->sendEmail(
                subject: $subject, 
                content: $content
            );

            $this->addFlash('success', 'Votre inscription a été enregistré');
            return $this->redirectToRoute('app_register');
        }
        return $this->render('register/index.html.twig', [
            'form' => $form->createView()
        ]);
    }
}

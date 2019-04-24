<?php
namespace App\Controller;
use App\Form\ContactType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\RedirectResponse;

class ContactController extends AbstractController
{
  /**
  * @Route("/contact",name="contact")
  */
    public function index(Request $request,\Swift_Mailer $mailer)
    {
        $form = $this->createForm(ContactType::class);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $data = $form->getData();
            ContactController::envoi($data,$mailer);
             // $entiWrite a blog posttyManager = $this->getDoctrine()->getManager();
             // $entityManager->persist($contact);
             // $entityManager->flush();
             return $this->redirectToRoute('index');
        }
        return $this->render('site/contact.html.twig', [
            'form' => $form->createView(),
        ]);
    }
    public function envoi($data,$mailer)
    {
      $message = (new \Swift_Message('demande_info'))
        ->setFrom('siteweb@casa-astronomie.fr')
        ->setTo('contact@casa-astronomie.fr')
        ->setBody(
            $this->renderView(
                'emails/sendmail.html.twig',
                ['data' => $data]
            ),
            'text/html'
        );

    $mailer->send($message);
    }
}

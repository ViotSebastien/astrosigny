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
            var_dump($data);
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
    public function envoi($contact,$mailer)
    {
      $message = (new \Swift_Message('demande_info'))
        ->setFrom('Contact@astrosigny.fr')
        ->setTo('symfonytest95@gmail.com')
        ->setBody(
            $this->renderView(
                // templates/emails/registration.html.twig
                'emails/sendmail.html.twig',
                ['contact' => $contact]
            ),
            'text/html'
        );

    $mailer->send($message);
    }
}

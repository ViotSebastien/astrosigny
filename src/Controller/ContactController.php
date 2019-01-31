<?php
namespace App\Controller;

use App\Entity\Contact;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Routing\Annotation\Route;

class ContactController extends AbstractController
{
  /**
  * @Route("/contact",name="contact")
  */
    public function new(Request $request)
    {
        // creates a task and gives it some dummy data for this example
        $contact = new Contact();
        $contact->setText('Write a blog post');
        $contact->setDueDate(new \DateTime('tomorrow'));

        $form = $this->createFormBuilder($contact)
            ->add('name', TextType::class)
            ->add('email', TextType::class)
            ->add('dueDate', DateType::class)
            ->add('text', TextType::class)
            ->add('save', SubmitType::class, ['label' => 'Create Task'])
            ->getForm();

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
             // $form->getData() holds the submitted values
             // but, the original `$task` variable has also been updated
             $contact = $form->getData();

             // ... perform some action, such as saving the task to the database
             // for example, if Task is a Doctrine entity, save it!
             // $entityManager = $this->getDoctrine()->getManager();
             // $entityManager->persist($task);
             // $entityManager->flush();

             return $this->redirectToRoute('task_success');
        }


        return $this->render('site/contact.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}

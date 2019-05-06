<?php
namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\RedirectResponse;
use App\Document\User;
use App\Form\LoginType;
use App\Form\RegisterType;

use Doctrine\ODM\MongoDB\DocumentManager as DocumentManager;
//use Symfony\Component\HttpFoundation\Session\SessionInterface;

class SecurityController extends AbstractController
{
  /**
  * @Route("/login",name="login",methods={"POST","GET"})
  */
  public function login(DocumentManager $dm,Request $request)
  {
  //return new Response('manifestation !');
        $form = $this->createForm(LoginType::class);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $data = $form->getData();
            $rest=$data["email"];
            $user;
            $res=$dm->getRepository('App:User')->findOneBy(['email' => $rest]);
            if ($res != NULL ){
                  $user = new User();
                  $user->setUsername($res->getUsername());
            }
            return $this->render('index.html.twig',
            ['login' => $user]);
    }
    return $this->render('security/login.html.twig', [
        'login' => $form->createView(),
    ]);
}
  /**
  * @Route("/register",name="register",methods={"POST","GET"})
  */
    public function register(Request $request,DocumentManager $dm)
    {
        $form = $this->createForm(RegisterType::class);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $data = $form->getData();
            $user = new User();
            $user->setUsername($data["username"]);
            $user->setEmail($data["email"]);
            $user->setpassword($data["password"]);
            $dm->persist($user);
            $dm->flush();
            return $this->redirectToRoute('index');
        }
        return $this->render('security/register.html.twig', [
            'register' => $form->createView(),
        ]);
    }
}

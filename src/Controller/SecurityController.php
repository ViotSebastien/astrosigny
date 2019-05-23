<?php
namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\RedirectResponse;
use App\Document\User;
use App\Form\LoginType;
use App\Form\RegisterType;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use Symfony\Component\HttpFoundation\Response;

use Doctrine\ODM\MongoDB\DocumentManager as DocumentManager;
//use Symfony\Component\HttpFoundation\Session\SessionInterface;

class SecurityController extends AbstractController
{
  /**
  * @Route("/login",name="login",methods={"POST","GET"})
  */
  public function login(AuthenticationUtils $authenticationUtils): Response
      {
          // get the login error if there is one
          $error = $authenticationUtils->getLastAuthenticationError();
          // last username entered by the user
          $lastUsername = $authenticationUtils->getLastUsername();

          return $this->render('security/login.html.twig', [
              'last_username' => $lastUsername,
              'error' => $error
          ]);
      }
  /**
  * @Route("/register",name="register",methods={"POST","GET"})
  */
    public function register(Request $request,DocumentManager $dm,UserPasswordEncoderInterface $passwordEncoder)
    {
        $form = $this->createForm(RegisterType::class);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $data = $form->getData();
            var_dump($data);
            $user = new User();
            $user->setUsername($data["username"]);
            $user->setEmail($data["email"]);
            $passwords=$passwordEncoder->encodePassword($user,$data["password"]);
            var_dump($passwords);
            $user->setpassword($passwords);
            $user->getRoles();
            $dm->persist($user);
            $dm->flush();
            return $this->redirectToRoute('index');
        }
        return $this->render('security/register.html.twig', [
            'register' => $form->createView(),
        ]);
    }
    /**
    * @Route("/logout", name="logout", methods={"GET"})
    */
   public function logout()
   {
       // controller can be blank: it will never be executed!
       throw new \Exception('Don\'t forget to activate logout in security.yaml');
   }
}

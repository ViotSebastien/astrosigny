<?php
//src/Controller/DefaultController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Controller\ManifestationController;
use Symfony\Component\Translation\TranslatorInterface;
use Doctrine\ODM\MongoDB\DocumentManager as DocumentManager;

class DefaultController extends AbstractController
{
  /**
  * @Route("/",name="index")
  */
  public function index()
  {
  //return new Response('Hello World !');
  return $this->render('index.html.twig');
  }
  /**
  * @Route("/observatoire",name="observatoire")
  */
  public function observatoire()
  {
  //return new Response('Hello World !');
  return $this->render('site/observatoire.html.twig');
  }
  /**
  * @Route("/chemindesplanete",name="chemindesplanete")
  */
  public function chemindesplanete()
  {
  //return new Response('Hello World !');
  return $this->render('site/chemindesplanete.html.twig');
  }
  /**
  * @Route("/planete",name="planete")
  */
  public function planete()
  {
  //return new Response('Hello World !');
  return $this->render('site/planete.html.twig');
  }
}

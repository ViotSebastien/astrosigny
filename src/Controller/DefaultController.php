<?php
//src/Controller/DefaultController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Document;
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
  * @Route("/astronomie",name="astronomie")
  */
  public function astronomie()
  {
  return new Response('astronomie !');
//  return $this->render('site\astronomie.html.twig');
  }
  /**
  * @Route("/astronautique",name="astronautique")
  */
  public function astronautique()
  {
  return new Response('astronautique !');
  //return $this->render('site\astronautique.html.twig');
  }
  /**
  * @Route("/cadran_solaire",name="cadran_solaire")
  */
  public function cadran_solaire()
  {
  return new Response('cadran_solaire !');
  //return $this->render('site\cadran_solaire.html.twig');
  }
  /**
  * @Route("/observatoire",name="observatoire")
  */
  public function observatoire()
  {
  return new Response('observatoire');
  //return $this->render('site\observatoire.html.twig');
  }
  /**
  * @Route("/coucou",name="coucou")
  */

}

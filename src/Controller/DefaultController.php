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
  * @Route("/manifestation",name="manifestation")
  */
  public function manifestation()
  {
  //return new Response('manifestation !');
  $manifes = new \stdClass();
  $manifes->titre = "Les 50 ans de l'homme sur la Lune";
  $manifes->description = "Exposition sur la mission Apollo";
  $manifes->Date = date("Ymd");
  return $this->render('site\manifestation.html.twig',
  ['mafes' => $manifes]);
  }
  /**
  * @Route("/astronomie",name="astronomie")
  */
  public function astronomie()
  {
  return new Response('astronomie !');
//  return $this->render('Astronomie.html.twig');
  }
  /**
  * @Route("/astronautique",name="astronautique")
  */
  public function astronautique()
  {
  return new Response('astronautique !');
  //return $this->render('astronautique.html.twig');
  }
  /**
  * @Route("/cadran_solaire",name="cadran_solaire")
  */
  public function cadran_solaire()
  {
  return new Response('cadran_solaire !');
  //return $this->render('cadran_solaire.html.twig');
  }
  /**
  * @Route("/observatoire",name="observatoire")
  */
  public function observatoire()
  {
  return new Response('observatoire');
  //return $this->render('observatoire.html.twig');
  }
  /**
  * @Route("/coucou",name="coucou")
  */

}

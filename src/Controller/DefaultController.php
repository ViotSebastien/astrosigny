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
  * @Route("/contact",name="contact")
  */
  public function contact()
  {
  return new Response('contact !');
  //return $this->render('site\contact.html.twig');
  }
  /**
  * @Route("/manifestation",name="manifestation")
  */
  public function manifestation()
  {
  //return new Response('manifestation !');
  return $this->render('site\manifestation.html.twig');
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
  public function createAction(DocumentManager $dm)
  {
      $product = new Product();
      $product->setName('A Foo Bar');
      $product->setPrice('19.99');

      $dm = $this->get('doctrine_mongodb')->getManager();
      $dm->persist($product);
      $dm->flush();

      return new Response('Created product id '.$product->getId());
  }

}

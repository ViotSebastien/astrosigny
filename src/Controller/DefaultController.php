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
  public function index(TranslatorInterface $translator)
  {
  //return new Response('Hello World !');
  //$haut3=$translator->trans('text.sidebar.3',[], null, 'fr');
  //$haut2=$translator->trans('text.sidebar.2',[], null, 'fr');
  //$haut1=$translator->trans('text.sidebar.1',[], null, 'fr');
  //$text= $translator->trans('text.message',[], null, 'fr');
  //$bas= $translator->trans('text.footer',[], null, 'fr');
  //ManifestationController::manifestation($dm);
  return $this->render('site/base.html.twig');
  }
  /**
  * @Route("/en",name="index_EN")
  */
  public function index_EN(TranslatorInterface $translator)
  {
  //return new Response('Hello World !');
  $text= $translator->trans('text.message',[], null, 'en');

  return $this->render('index.html.twig',[
    'text' => $text
  ]);
  }
}

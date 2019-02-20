<?php
namespace App\Controller;
use App\Form\ManifestationType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\RedirectResponse;
use App\Document\Manifestation;
use Doctrine\ODM\MongoDB\DocumentManager as DocumentManager;

class ManifestationController extends AbstractController
{
  /**
  * @Route("/addmanifestation",name="addmanifestation",methods={"POST","GET"})
  */
    public function createmanifestation(Request $request,DocumentManager $dm)
    {
        $form = $this->createForm(ManifestationType::class);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $data = $form->getData();
            $manifestation = new Manifestation();
            $manifestation->setTitre($data["titre"]);
            $dm->persist($manifestation);
            $dm->flush();
            //return $this->redirectToRoute('index');
        }
        return $this->render('exsite/vueform/AddManifestation.html.twig', [
            'AddManifestation' => $form->createView(),
        ]);
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
          $manifes->date = date("Ymd");
          return $this->render('site\manifestation.html.twig',
          ['mafes' => $manifes]);
    }
}

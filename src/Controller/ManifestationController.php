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
  * @Route("/manifestation",name="manifestation")
  */
  public function manifestation(DocumentManager $dm)
  {
  //return new Response('manifestation !');
        $data=$dm->getRepository('App:Manifestation')->findAll();
        for ($i=0; $i < sizeof($data); $i++) {
          $manifestation[$i] = new Manifestation();
          $manifestation[$i]->setId($data[$i]->getId());
          //$manifestation[$i]->setDateFin($data[$i]->getDateFin());
        //  $manifestation[$i]->setDateDebut($data[$i]->getDateDebut());
          $manifestation[$i]->setDescription($data[$i]->getDescription());
          }
        return $this->render('site\manifestation.html.twig',
        ['showmafestation' => $manifestation]);
  }

  /**
  * @Route("/manifestation/create",name="addmanifestation",methods={"POST","GET"})
  */
    public function createmanifestation(Request $request,DocumentManager $dm)
    {
        $form = $this->createForm(ManifestationType::class);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $data = $form->getData();
            $manifestation = new Manifestation();
            $manifestation->setTitre($data["titre"]);
            $manifestation->setDateDebut($data["datedebut"]);
            $manifestation->setDateFin($data["datefin"]);
            $manifestation->setDescription($data["description"]);
            $dm->persist($manifestation);
            $dm->flush();
            //return $this->redirectToRoute('index');
        }
        return $this->render('exsite/vueform/AddManifestation.html.twig', [
            'createmanifestation' => $form->createView(),
        ]);
    }
    /**
    * @Route("/manifestation/delete",name="addmanifestation",methods={"POST","GET"})
    */

}

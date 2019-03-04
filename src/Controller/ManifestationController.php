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
        if ($data != NULL ){
          for ($i=0; $i < sizeof($data); $i++)
            {
              $manifestation[$i] = new Manifestation();
              $manifestation[$i]->setId($data[$i]->getId());
              $manifestation[$i]->setTitre($data[$i]->getTitre());
              $manifestation[$i]->setDateFin($data[$i]->getDateFin());
              $manifestation[$i]->setDateDebut($data[$i]->getDateDebut());
              $manifestation[$i]->setDescription($data[$i]->getDescription());
            }
            return $this->render('site/manifestation.html.twig',
            ['showmafestation' => $manifestation]);
        }
      return $this->render('site/manifestation.html.twig',
      ['showmafestation' => $data]);
  }

  /**
  * @Route("/manifestation/create",name="addmanifestation",methods={"POST","GET"})
  */
    public function createAction(Request $request,DocumentManager $dm)
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
            return $this->redirectToRoute('manifestation');
        }
        return $this->render('exsite/vueform/AddManifestation.html.twig', [
            'createmanifestation' => $form->createView(),
        ]);
    }
    /**
    * @Route("/manifestation/delete/{id}",name="deletemanifestation",methods={"GET","HEAD"})
    */
    public function deleteAction($id,DocumentManager $dm)
    {
            $data = $dm->getRepository('App:Manifestation')->find($id);
            $dm->remove($data);
            $dm->flush();
            return $this->redirectToRoute('manifestation');
    }
    /**
    * @Route("/manifestation/update/{id}",name="updatemanifestation",methods={"GET","POST"})
    */
/*   public function updateAction($id,DocumentManager $dm)
    {
          $manifestation = $dm->getRepository('App:Manifestation')->find($id);
          $manifestation->setTitre($data["titre"]);
          $manifestation->setDateDebut($data["datedebut"]);
          $manifestation->setDateFin($data["datefin"]);
          $manifestation->setDescription($data["description"]);
          $dm->persist($manifestation);
          $dm->flush();

        return $this->redirectToRoute('homepage');
    }*/

}

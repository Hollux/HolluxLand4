<?php

namespace App\Controller;

use App\Service\Hollux\RealisationFactory;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use App\Form;
use App\Component\Mailer\Message;


/**
 * HolluxController controller.
 *
 * @Template
 */
class HolluxController extends AbstractController
{

    public function __construct(RealisationFactory $realisationFactory)
    {
        $this->realisations = $realisationFactory;
    }

    /**
     * @Route("/gmartin", name="gmartin")
     */
    public function gmartin()
    {

        return [];
    }

    /**
     * @Route("/cv", name="cv")
     */
    public function cv()
    {

        return [];
    }

    /**
     * @Route("/", name="home")
     */
    public function index()
    {

        return [];
    }

    /**
     * @Route("/competences", name="competences")
     */
    public function competences()
    {

        return [];
    }


    /**
     * @Route("/infoperso", name="infoperso")
     */
    public function infoperso()
    {

        return [];
    }

    /**
     * @Route("/mentionslegales", name="mentionslegales")
     */
    public function mentionslegales()
    {

        return [];
    }

    /**
     * @Route("/realisations", name="realisations")
     */
    public function realisations()
    {
        $realisations = $this->realisations->getRealisations();

        return ['realisations' => $realisations];
    }

    /**
     * @Route("/mecontacter", name="mecontacter")
     */
    public function mecontacter(Request $request)
    {
        //TODO réduire l'intéligence
        $form = $this->createForm(Form\Hollux\MeContacterType::class);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {

            $body = $this->get('templating')->render('Mail/mecontacterMail.html.twig',
                ['content' => $form->get('content')->getData(), 'email' => $form->get('email')->getData(),
                    'time' => date("Y-m-d H:i:s")]);
            $this->get('appbundle.component.mailer')->send(new Message(
                    'Me Contacter Hollux.fr',
                    'hollux@hollux.fr',
                    ['holluxpanda@gmail.com', 'hollux@hollux.fr'],
                    $body)
            );
            $request->getSession()->getFlashBag()->add('success', "Message envoyé avec succès");

        }

        return ['form' => $form->createview()];
    }


}
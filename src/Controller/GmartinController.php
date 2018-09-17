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
 * GmartinController controller.
 *
 * @Template
 */
class GmartinController extends AbstractController
{

    /**
     * @Route("/gmartin", name="gmartin")
     */
    public function gmartin()
    {

        return [];
    }


}
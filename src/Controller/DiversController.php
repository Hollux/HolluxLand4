<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use App\Form;

/**
 * DiversController controller.
 * @Route("/divers")
 * @Template
 */
class DiversController extends AbstractController
{
    /**
     * @Route("/wuw", name="wuw")
     */
    public function wuw(Request $request)
    {
        $form = $this->createForm(Form\Divers\CollectionWuwType::class);

        $form2 = $this->createForm(Form\Divers\WuwType::class);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            echo 'Valide';exit;
        }

        return ['form' => $form->createView(), 'form2' => $form2->createView()];
    }

}
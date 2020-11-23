<?php


namespace App\Controller\Portefolio;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Controller used to manage blog contents in the backend.
 *
 * Please note that the application backend is developed manually for learning
 * purposes. However, in your real Symfony application you should use any of the
 * existing bundles that let you generate ready-to-use backends without effort.
 *
 * See http://knpbundles.com/keyword/admin
 *
 * @Route("/portefolio")
 *
 */
class PortefolioController extends AbstractController
{

    /**
     * @Route("/guillaumegauvain", methods="GET", name="gg_portefolio")
     */
    public function index()
    {
        return $this->render('portefolio/template.html.twig');
    }

}

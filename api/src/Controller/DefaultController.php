<?php

namespace App\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

/**
 * The API test handles all requests that should be redirected to a component for the benefit of AJAX Calls.
 *
 * Class ApiController
 *
 * @Route("/")
 */
class DefaultController extends AbstractController
{
    /**
     * @Template
     * @Route("/")
     */
    public function indexAction()
    {
        $variables = [];

        return  $variables;
    }
}

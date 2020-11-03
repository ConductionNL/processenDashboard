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
 * @Route("/dashboard")
 */
class DashboardController extends AbstractController
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

    /**
     * @Template
     * @Route("/clusters")
     */
    public function clustersAction()
    {
        $variables = [];

        return  $variables;
    }

    /**
     * @Template
     * @Route("/installations")
     */
    public function installationsAction()
    {
        $variables = [];

        return  $variables;
    }

    /**
     * @Template
     * @Route("/components")
     */
    public function componentsAction()
    {
        $variables = [];

        return  $variables;
    }

    /**
     * @Template
     * @Route("/databases")
     */
    public function databasesAction()
    {
        $variables = [];

        return  $variables;
    }

    /**
     * @Template
     * @Route("/invoices")
     */
    public function invoicesAction()
    {
        $variables = [];

        return  $variables;
    }
}

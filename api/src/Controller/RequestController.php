<?php

namespace App\Controller;

use Conduction\CommonGroundBundle\Service\CommonGroundService;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

/**
 * The API test handles all requests that should be redirected to a component for the benefit of AJAX Calls.
 *
 * Class ApiController
 *
 * @Route("/request")
 */
class RequestController extends AbstractController
{
    /**
     * @Template
     * @Route("/")
     */
    public function indexAction(CommonGroundService $commonGroundService, Request $request)
    {
        $variables = [];

        return  $variables;
    }

    /**
     * @Template
     * @Route("/types")
     */
    public function typesAction(CommonGroundService $commonGroundService, Request $request)
    {
        $variables = [];

        return  $variables;
    }

}

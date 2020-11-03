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
 * @Route("/dashboard")
 */
class DashboardController extends AbstractController
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
     * @Route("/clusters")
     */
    public function clustersAction(CommonGroundService $commonGroundService, Request $request)
    {
        $variables = [];

        // On an index route we might want to filter based on user input
        $variables['query'] = array_merge($request->query->all(), $variables['post'] = $request->request->all());

        // Get resource tutorials (known as cources component side)
        $variables['clusters'] = $commonGroundService->getResource(['component' => 'evc', 'type' => 'clusters'], $variables['query'])['hydra:member'];

        return $variables;
    }

    /**
     * @Template
     * @Route("/clusters/{id}")
     */
    public function clusterAction(CommonGroundService $commonGroundService, Request $request, $id)
    {
        $variables = [];

        if ($id != 'new') {
            // Get resource challenges (known as tender component side)
            $variables['cluster'] = $commonGroundService->getResource(['component' => 'evc', 'type' => 'enviroments', 'id'=>$id]);
        } else {
            $variables['cluster'] = [];
        }

        // Lets see if there is a post to procces
        if ($request->isMethod('POST')) {
            $resource = $request->request->all();

            // Add the post data to the already aquired resource data
            $resource = array_merge($variables['resource'], $resource);

            // Update to the commonground component
            $variables['cluster'] = $commonGroundService->saveResource($resource, ['component' => 'evc', 'type' => 'enviroments', 'id' => $id]);
        }

        return $variables;
    }

    /**
     * @Template
     * @Route("/installations")
     */
    public function installationsAction(CommonGroundService $commonGroundService, Request $request)
    {
        $variables = [];

        // On an index route we might want to filter based on user input
        $variables['query'] = array_merge($request->query->all(), $variables['post'] = $request->request->all());

        // Get resource tutorials (known as cources component side)
        $variables['installations'] = $commonGroundService->getResource(['component' => 'evc', 'type' => 'installations'], $variables['query'])['hydra:member'];

        return $variables;
    }

    /**
     * @Template
     * @Route("/installations/{id}")
     */
    public function installationAction(CommonGroundService $commonGroundService, Request $request, $id)
    {
        $variables = [];

        if ($id != 'new') {
            // Get resource challenges (known as tender component side)
            $variables['installation'] = $commonGroundService->getResource(['component' => 'evc', 'type' => 'installations', 'id'=>$id]);
        } else {
            $variables['installation'] = [];
        }

        // Lets see if there is a post to procces
        if ($request->isMethod('POST')) {
            $resource = $request->request->all();

            // Add the post data to the already aquired resource data
            $resource = array_merge($variables['resource'], $resource);

            // Update to the commonground component
            $variables['installation'] = $commonGroundService->saveResource($resource, ['component' => 'evc', 'type' => 'installations', 'id' => $id]);
        }

        return $variables;
    }

    /**
     * @Template
     * @Route("/components")
     */
    public function componentsAction(CommonGroundService $commonGroundService, Request $request)
    {
        $variables = [];

        // On an index route we might want to filter based on user input
        $variables['query'] = array_merge($request->query->all(), $variables['post'] = $request->request->all());

        // Get resource tutorials (known as cources component side)
        $variables['components'] = $commonGroundService->getResource(['component' => 'evc', 'type' => 'components'], $variables['query'])['hydra:member'];

        return $variables;
    }

    /**
     * @Template
     * @Route("/components/{id}")
     */
    public function componentAction(CommonGroundService $commonGroundService, Request $request, $id)
    {
        $variables = [];

        if ($id != 'new') {
            // Get resource challenges (known as tender component side)
            $variables['component'] = $commonGroundService->getResource(['component' => 'evc', 'type' => 'components', 'id'=>$id]);
        } else {
            $variables['component'] = [];
        }

        // Lets see if there is a post to procces
        if ($request->isMethod('POST')) {
            $resource = $request->request->all();

            // Add the post data to the already aquired resource data
            $resource = array_merge($variables['resource'], $resource);

            // Update to the commonground component
            $variables['component'] = $commonGroundService->saveResource($resource, ['component' => 'evc', 'type' => 'components', 'id' => $id]);
        }

        return $variables;
    }

    /**
     * @Template
     * @Route("/databases")
     */
    public function databasesAction(CommonGroundService $commonGroundService, Request $request)
    {
        $variables = [];

        // On an index route we might want to filter based on user input
        $variables['query'] = array_merge($request->query->all(), $variables['post'] = $request->request->all());

        // Get resource tutorials (known as cources component side)
        $variables['databases'] = $commonGroundService->getResource(['component' => 'evc', 'type' => 'databases'], $variables['query'])['hydra:member'];

        return $variables;
    }

    /**
     * @Template
     * @Route("/databases/{id}")
     */
    public function databaseAction(CommonGroundService $commonGroundService, Request $request, $id)
    {
        $variables = [];

        if ($id != 'new') {
            // Get resource challenges (known as tender component side)
            $variables['database'] = $commonGroundService->getResource(['component' => 'evc', 'type' => 'databases', 'id'=>$id]);
        } else {
            $variables['database'] = [];
        }

        // Lets see if there is a post to procces
        if ($request->isMethod('POST')) {
            $resource = $request->request->all();

            // Add the post data to the already aquired resource data
            $resource = array_merge($variables['resource'], $resource);

            // Update to the commonground component
            $variables['database'] = $commonGroundService->saveResource($resource, ['component' => 'evc', 'type' => 'databases', 'id' => $id]);
        }

        return $variables;
    }

    /**
     * @Template
     * @Route("/invoices")
     */
    public function invoicesAction()
    {
        $variables = [];

        // On an index route we might want to filter based on user input
        $variables['query'] = array_merge($request->query->all(), $variables['post'] = $request->request->all());

        // Get resource tutorials (known as cources component side)
        $variables['bc'] = $commonGroundService->getResource(['component' => 'evc', 'type' => 'invoices'], $variables['query'])['hydra:member'];

        return $variables;
    }

    /**
     * @Template
     * @Route("/invoices/{id}")
     */
    public function invoiceAction(CommonGroundService $commonGroundService, Request $request, $id)
    {
        $variables = [];

        $variables['invoice'] = $commonGroundService->getResource(['component' => 'bc', 'type' => 'invoices', 'id'=>$id]);

        return  $variables;
    }

    /* geen slecht idee om organization stuff naar een eigne controller te verplaatsen */

    /**
     * @Template
     * @Route("/organization")
     */
    public function organizationAction()
    {
        $variables = [];

        if ($id != 'new') {
            // Get resource challenges (known as tender component side)
            $variables['organization'] = $commonGroundService->getResource(['component' => 'wrc', 'type' => 'organizations', 'id'=>$id]);
        } else {
            $variables['organization'] = [];
        }

        // Lets see if there is a post to procces
        if ($request->isMethod('POST')) {
            $resource = $request->request->all();

            // Add the post data to the already aquired resource data
            $resource = array_merge($variables['resource'], $resource);

            // Update to the commonground component
            $variables['organization'] = $commonGroundService->saveResource($resource, ['component' => 'wrc', 'type' => 'organizations', 'id' => $id]);
        }

        return $variables;
    }
}

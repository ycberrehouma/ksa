<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class KsaController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('main/index.twig');
    }

    /**
     * @Route("/database", name="database")
     */
    public function databaseAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('database/database.twig');
    }
}

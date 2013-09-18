<?php

namespace Nie\CreditBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('NieCreditBundle:Default:index.html.twig', array('name' => $name));
    }
}

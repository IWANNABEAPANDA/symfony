<?php

namespace Dv\BourseBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('DvBourseBundle:Default:index.html.twig', array('name' => $name));
    }
}

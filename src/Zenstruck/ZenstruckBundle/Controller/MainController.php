<?php

namespace Zenstruck\ZenstruckBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MainController extends Controller
{
    /**
     * @extra:Route("/", name="homepage")
     */
    public function indexAction()
    {
        return $this->render('ZenstruckBundle:Main:index.html.twig');
    }

    /**
     * @extra:Route("/welcome", name="welcome")
     */
    public function welcomeAction()
    {
        return $this->render('ZenstruckBundle:Main:welcome.html.twig');
    }
}

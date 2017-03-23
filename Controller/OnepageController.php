<?php

namespace Flexings\OnepageCheckoutBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class OnepageController extends Controller
{
    public function indexAction()
    {
        return $this->render('OnepageCheckoutBundle:Onepage:index.html.twig', array(
            // ...
        ));
    }

}

<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="home")
     */
    public function homeAction(Request $request)
    {
        return $this->render('default/index.html.twig');
    }

    /**
     * @Route("/search-results", name="search-results")
     */
    public function searchResultsAction()
    {
        return $this->render('default/search-results.html.twig');
    }

    /**
     * @Route("/profile", name="profile")
     */
    public function profileAction()
    {
    	return $this->render('default/profile.html.twig');
    }
    
  
}

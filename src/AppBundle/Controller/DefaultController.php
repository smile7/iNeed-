<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;

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
     * @Route("/login", name="login")
     */
    public function loginAction()
    {
        return $this->render('default/login.html.twig');
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
    
    /**
     * @Route("/chat/{userId}", name="chat")
     */
    public function chatAction($userId)
    {
    	return $this->render('chat.html.twig', array('userId'=>$userId));
    }
    
    /**
     * @Route("/currentUserId", name="current-user-id")
     */
    public function getCurrentUserIdAction()
    {
    	$response = new JsonResponse($this->getUser()->getId());
    	return $response;
    }
    
}

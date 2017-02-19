<?php

namespace Blog\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\Security\Core\SecurityContext;
use Symfony\Component\Security\Core\SecurityContextInterface;
use Symfony\Component\HttpFoundation\Request;

class SecurityController extends Controller
{
    /**
     * @Route("/login")
     * @Template()
     * @return array
     */
    public function loginAction(Request $request)
    
     {
         
       $authenticationUtils = $this->get('security.authentication_utils');

    // get the login error if there is one
    $error = $authenticationUtils->getLastAuthenticationError();

    // last username entered by the user
    $lastUsername = $authenticationUtils->getLastUsername();

    return $this->render('AdminBundle:Security:login.html.twig', array(
        'last_username' => $lastUsername,
        'error'         => $error,
    ));
        
    }

    /**
     * @Route("/loginCheck")
     * @Template()
     * @return array
     */
    public function loginCheckAction()
    {
        return  array();
    }

}

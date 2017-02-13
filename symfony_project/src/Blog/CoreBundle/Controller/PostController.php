<?php

namespace Blog\CoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class PostController extends Controller
{
    /**
     * @Route("/")
     * @Template()
     * @return array()
     */
    public function indexAction()
    {
        
        $posts=$this->getDoctrine()->getRepository('ModelBundle:Post')->findAll();
        
        $post_latest=$this->getDoctrine()->getRepository('ModelBundle:Post')->getLatest(3);
        
        return  array(
            
            'posts'=>$posts,
            
            'post_latest'=>$post_latest
            
            );
        
    }

}

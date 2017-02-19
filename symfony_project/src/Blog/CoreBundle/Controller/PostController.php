<?php

namespace Blog\CoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
//use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

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


    /**
     * 
     * Show a post
     * 
     * @param string $slug
     * 
     * @Route("/{slug}")
     * 
     * @Template()
     * @throws NotFoundHttpException
     * @return array()
     */
    public function showAction($slug)
    {
        
        $post=$this->getDoctrine()->getRepository('ModelBundle:Post')->findOneBy(['slug'=>$slug]);
        
        if(null===$post){
            
           throw $this->createNotFoundException("Post was not found"); 
        }
        
        return  array(
            
            'post'=>$post
            
            
            
            );
        
    }


}

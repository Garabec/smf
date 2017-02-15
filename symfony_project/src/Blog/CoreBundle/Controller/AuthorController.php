<?php

namespace Blog\CoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class AuthorController extends Controller
{
    /**
     * 
     * Show a author
     * 
     * @param string $slug
     * 
     * @Route("/author/{slug}" )
     * 
     * @Template()
     * @throws NotFoundHttpException
     * @return array()
     */
    public function showAction($slug)
    {
        
        $author=$this->getDoctrine()->getRepository('ModelBundle:Author')->findOneBy(['slug'=>$slug]);
        
        if(null===$author){
            
           throw $this->createNotFoundException("Author was not found"); 
        }
        
        
       $posts=$this->getDoctrine()->getRepository('ModelBundle:Post')->findBy(['author'=>$author]); 
        
        
        return  array(
            
            'author'=>$author,
            'posts'=>$posts
            
            
            );
        
    }
    
}

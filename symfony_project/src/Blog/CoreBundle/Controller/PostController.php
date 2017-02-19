<?php

namespace Blog\CoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Blog\ModelBundle\Form\CommentType;
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
        
        
        $form=$this->createForm(CommentType::class);
        
        return  array(
            
            'post'=>$post,
            
            'form'=>$form->createView()
            
            );
        
    }

    /**
     * create comment
     * 
     * @param Request $request
     * @param string $slug
     * 
     * @Route("/{slug}/create_comment")
     * @Method("POST")
     * @Template("CoreBundle:Post:show.html.twig")
     * 
     * 
     **/ 
    
    
    public function createCommentAction(Request $request,$slug){
        
        return [];
        
    }



}

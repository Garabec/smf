<?php

namespace Blog\CoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Blog\ModelBundle\Form\CommentType;
use Symfony\Component\HttpFoundation\Request;
use Blog\ModelBundle\Entity\Comment;

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
        $posts=$this->getPostManager()->findAll();
        
        $post_latest=$this->getPostManager()->getLatestPosts(3);
        
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
     * @Template()
     * @throws NotFoundHttpException
     * @return array()
     **/
     
    public function showAction($slug)
    {    
        
        $post=$this->getPostManager()->findBySlug($slug);
        
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
        
        $post=$this->getPostManager()->findBySlug($slug);
        
        $form=$this->getPostManager()->createForm($post,$request); 
        
        
         if(true===$form){
         $this->get('session')->getFlashBag()->add('success','This comment was submitted successfully');
         
          return $this->redirect($this->generateUrl('blog_core_post_show', ['slug'=>$post->getSlug()])) ; 
            
        }
        
        
        
        return array (
            
                   'post' => $post,
                   'form' => $form
            
            );
        
    }

    private function  getPostManager(){
        
     return $this->get('post_manager');   
        
        
    }

}

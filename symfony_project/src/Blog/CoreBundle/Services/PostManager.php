<?php

namespace Blog\CoreBundle\Services;

use Doctrine\ORM\EntityManager;
use Blog\ModelBundle\Form\CommentType;
use Symfony\Component\HttpFoundation\Request;
use Blog\ModelBundle\Entity\Comment;
use Blog\ModelBundle\Entity\Post;
use Symfony\Component\Form\FormFactory;
/**
 * 
 * class PostManager
 * 
 **/ 


class PostManager {
    
 private $em;
    
    /**
     * construct
     * @param EntityManager $em
     * 
     **/ 
    public function __construct(EntityManager $em, FormFactory $form_factory){
        
        $this->em=$em;
        $this->formFactory=$form_factory;
        
    }
    
    /**
     * @param string $slug
     * 
     *@throws NotFoundHttpException
     * 
     * return Blog\ModelBundle\Entity\Post
     * 
     **/ 
     
    public function findBySlug($slug){
        
     $post=$this->em->getRepository('ModelBundle:Post')->findOneBy(['slug'=>$slug]);
        
        if(null===$post){
            
           throw $this->createNotFoundException("Post was not found"); 
        }
         
     return $post;   
        
    }
    
     /**
     *
     * 
     * return Blog\ModelBundle\Entity\Post[]
     * 
     **/
     
    public function findAll(){
      
      $posts=$this->em->getRepository('ModelBundle:Post')->findAll();
       
       return $posts; 
        
    }
    
    
    /**
     * @param integer $num
     * 
     * return Blog\ModelBundle\Entity\Post[]
     * 
     **/
     
    public function getLatestPosts($num){
        
      $post_latest=$this->em->getRepository('ModelBundle:Post')->getLatest($num);  
        
      return $post_latest;  
        
    }
       
    /**
     * @param Post $post
     * @param Request $request
     * 
     * return bool/FormInterface
     * 
     **/
     
    public function createForm(Post $post,Request $request){
        
      $comment=new Comment();
        
        $comment->setPost($post);
        
        $form=$this->formFactory->create(CommentType::class,$comment);
        
        $form->handleRequest($request);
        
        if($form->isValid()){
         
         
         $this->em->persist($comment);
         $this->em->flush();
         
         return true;
        }
        
        return $form;
        
    }
    
    
}
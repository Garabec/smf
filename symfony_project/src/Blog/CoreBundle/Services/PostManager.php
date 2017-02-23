<?php

namespace Blog\CoreBundle\Services;

use Doctrine\ORM\EntityManager;
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
    public function __construct(EntityManager $em){
        
        $this->em=$em;
        
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
       
    
    
    
}
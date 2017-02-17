<?php

namespace Blog\ModelBundle\DataFixtures\ORM;


use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Blog\ModelBundle\Entity\Comment;
use Blog\ModelBundle\Entity\Post;
use Faker\Factory as FakerFactory;

class Comments extends AbstractFixture implements OrderedFixtureInterface {
    
    
    public function  getOrder(){
        
        return 20;
    }
    
    /**
     * {@inheritdoc}
     *
     **/
    public function load(ObjectManager $manager){
        
        $posts=$manager->getRepository('ModelBundle:Post')->findAll();
        $faker=FakerFactory::create('ru_RU');
        
   for($i=0;$i<10;$i++) { 
       
      foreach($posts as $post) {
          
      $comment= new Comment();
      $comment->setAuthor($faker->firstName);
      $comment->setBody($faker->paragraph(3));
      $comment->setPost($post);
       
      
        $manager->persist($comment);
        
      }  
        
        
        $manager->flush();
   }   
       
        
        
        
    }

    
    
    
}

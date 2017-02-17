<?php

namespace Blog\ModelBundle\DataFixtures\ORM;


use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Blog\ModelBundle\Entity\Post;
use Faker\Factory as FakerFactory;

class Posts extends AbstractFixture implements OrderedFixtureInterface {
    
    
    public function  getOrder(){
        
        return 15;
    }
    
    /**
     * {@inheritdoc}
     *
     **/
    public function load(ObjectManager $manager){
        
        $faker=FakerFactory::create('ru_RU'); 
        
       $b1= new Post();
       $b1->setTitle($faker->sentence(6));
       $b1->setBody($faker->paragraph(7));
       $faker->seed(1111);
       $b1->setAuthor($this->getAuthor($manager,$faker->firstName));
       
       
       $b2= new Post();
       $b2->setTitle($faker->sentence(8));
       $b2->setBody($faker->paragraph(7));
       $faker->seed(1112);
       $b2->setAuthor($this->getAuthor($manager,$faker->firstName));
       
       
       $b3= new Post();
       $b3->setTitle($faker->sentence(7));
       $b3->setBody($faker->paragraph(7));
       $faker->seed(1113);
       $b3->setAuthor($this->getAuthor($manager,$faker->firstName)); 
        
        $manager->persist($b1);
        $manager->persist($b2);
        $manager->persist($b3);
        
        $manager->flush();
        
    }
   
   
    public function getAuthor(ObjectManager $manager,$name){
        
        
     return $manager->getRepository('ModelBundle:Author')->findOneBy([
         
         'name'=>$name
         
         ])  ; 
        
        
    }
   
    
}
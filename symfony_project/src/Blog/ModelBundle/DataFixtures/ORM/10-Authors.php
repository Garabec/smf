<?php

namespace Blog\ModelBundle\DataFixtures\ORM;


use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Blog\ModelBundle\Entity\Author;


class Authors extends AbstractFixture implements OrderedFixtureInterface {
    
    
    public function  getOrder(){
        
        return 10;
    }
    
    /**
     * {@inheritdoc}
     *
     **/
     
     public function load(ObjectManager $manager){
        
       $a1 = new Author;
       $a1->setName('Vlad');
       
       $a2 = new Author;
       $a2->setName('Nikolay');
       
       $a3 = new Author;
       $a3->setName('Sergei');
        
        
        $manager->persist($a1);
        $manager->persist($a2);
        $manager->persist($a3);
        
        $manager->flush();
        
    }
    
}
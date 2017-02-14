<?php

namespace Blog\ModelBundle\DataFixtures\ORM;


use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Blog\ModelBundle\Entity\Post;

class Posts extends AbstractFixture implements OrderedFixtureInterface {
    
    
    public function  getOrder(){
        
        return 15;
    }
    
    /**
     * {@inheritdoc}
     *
     **/
    public function load(ObjectManager $manager){
        
       $b1= new Post();
       $b1->setTitle('Lorem ipsum dolor');
       $b1->setBody('sit amet, consectetur adipiscing elit. Proin suscipit semper leo, at commodo ante eleifend ut. Curabitur dictum convallis convallis. Sed cursus condimentum eros at fermentum. Vivamus varius luctus ligula ut egestas. Mauris dui metus, hendrerit posuere mauris finibus, porta porttitor dolor. Aliquam velit turpis, consequat sit amet magna et, tempus convallis purus. Vivamus eget laoreet lacus.');
       $b1->setAuthor($this->getAuthor($manager,'Vlad'));
       
       
       $b2= new Post();
       $b2->setTitle('Suspendisse semper ornare');
       $b2->setBody('metus sed dignissim. Aliquam posuere mi vitae tortor rhoncus tristique. Maecenas elementum lobortis varius. Mauris faucibus eu lacus in blandit. Nam malesuada libero ut ligula pellentesque, eget dignissim sem placerat. In cursus quam laoreet, bibendum dolor in, pellentesque lorem. Curabitur quis massa at lorem euismod aliquam. Mauris ut lorem nibh. Quisque rhoncus augue a risus pulvinar feugiat ut ac nibh. Vestibulum quis fermentum nibh. Nunc molestie tincidunt rhoncus. Vestibulum et ornare mi, a efficitur quam. Fusce euismod tortor sed lectus mattis ullamcorper. Cras gravida, elit eu cursus lobortis, velit urna scelerisque justo, sit amet consectetur nisl nisl at orci.');
       $b2->setAuthor($this->getAuthor($manager,'Nikolay'));
       
       
       $b3= new Post();
       $b3->setTitle('Cras fringilla felis');
       $b3->setBody('velit. Sed vel arcu diam. Aliquam viverra cursus diam vitae elementum. Curabitur sit amet urna placerat, bibendum nisl eu, scelerisque nibh. Donec hendrerit ullamcorper ornare. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Duis maximus felis in lacus euismod, in fermentum nunc ultricies. Ut diam mauris, rutrum non augue id, tempor iaculis augue. Cras posuere est lectus, eu ultrices nisi consequat vitae. Nam cursus nibh ac ipsum commodo gravida. Pellentesque at ex a nisl blandit lacinia sit amet quis turpis. Curabitur ipsum magna, elementum in pretium nec, venenatis quis augue. Nullam imperdiet ligula nunc, at lobortis orci luctus et. Integer at velit mattis, dapibus tortor eu, maximus lectus. Donec viverra arcu vitae nulla dapibus egestas.');
       $b3->setAuthor($this->getAuthor($manager,'Sergei')); 
        
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
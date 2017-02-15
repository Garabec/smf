<?php

namespace Blog\CoreBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class PostControllerTest extends WebTestCase

{
    
    /**
     * test post index
     * 
     **/
     
    
    
    public function testIndex()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/');
        
        $this->assertTrue($client->getResponse()->isSuccessful(),"The response not susseful");
        
        $this->assertCount(4,$crawler->filter('h2'),"There are should be 3 displayed ports");
        
    }

   
    /**
     * test show index
     * 
     **/
   
    public function testShow()
    {
        $client = static::createClient();
        
        $post=$client->getContainer()->get('doctrine')->getRepository('ModelBundle:Post')->findFirst();

        $crawler = $client->request('GET', '/'.$post->getSlug());
        
        $this->assertTrue($client->getResponse()->isSuccessful(),"The response not susseful");
        
        $this->assertEquals($post->getTitle(),$crawler->filter('h2')->text(),"Post title is invalid");
        
    }



}

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
        
    }

}

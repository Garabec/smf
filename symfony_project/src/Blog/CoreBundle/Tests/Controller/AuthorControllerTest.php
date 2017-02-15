<?php

namespace Blog\CoreBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class AuthorControllerTest extends WebTestCase
{
    
 public function testShow()
    {
        $client = static::createClient();
        
        $author=$client->getContainer()->get('doctrine')->getRepository('ModelBundle:Author')->findFirst();
        
        $authorPostCount=$author->getPosts()->count();

        $crawler = $client->request('GET', '/'.$author->getSlug());
        
        $this->assertTrue($client->getResponse()->isSuccessful(),"The response not susseful");
        
        $this->assertCount($authorPostCount,$crawler->filter('h2'),"There are should be $authorPostCount posts");
        
    }      
    
    
    
}

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
        
        $this->assertCount(3,$crawler->filter('h2'),"There are should be 3 displayed ports");
        
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

    
   /**
     * test comment
     * 
     **/
   
    public function testComment(){
        
        $client = static::createClient();
        $post=$client->getContainer()->get('doctrine')->getRepository('ModelBundle:Post')->findFirst();

        $crawler = $client->request('GET', '/'.$post->getSlug()); 
        
        $buttonCrawlerNode=$crawler->selectButton('Send');
        
        $form=$buttonCrawlerNode->form([
            
            'blog.modelbundle.comment[author]'=> 'Some name',
            'blog.modelbundle.comment[body]'=> 'Some comment body'
            
            ]);
        
        $client->submit($form);
       
        $this->assertTrue($this->getResponse()->isRedirect('/'.$post->getSlug(),
                         'There was no redirection after submitting the form'));
                         
        $crawler=$client->followRedirect();
        
        $this->assertCount(1,$crawler->filter('html:contains("Your comment was submitting sussefully")'),
                            "There was no confirmation message");
        
        
    
    }



}

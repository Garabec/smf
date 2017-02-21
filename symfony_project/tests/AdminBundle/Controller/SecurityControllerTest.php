<?php

namespace Blog\AdminBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class SecurityControllerTest extends WebTestCase
{
    public function testLogin()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/admin/login');
        
        $this->assertTrue($client->getResponse()->isSuccessful(),"The response not susseful");
        
         $this->assertEquals("Administration panel",$crawler->filter('h2')->text(),"Admin title is invalid");
         
         $this->assertCount(1,$crawler->filter('input#username'),"There was no username input");
          $this->assertCount(1,$crawler->filter('input#password'),"There was no password input");
           $this->assertCount(1,$crawler->filter('button[type=submit]'),"There was no submit input");
    }

    public function testLogincheck()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/admin/loginCheck');
        
        $this->assertTrue($client->getResponse()->isSuccessful(),"The response not susseful");
    }

}

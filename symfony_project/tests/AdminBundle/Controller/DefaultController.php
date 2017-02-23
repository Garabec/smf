<?php

namespace Blog\ModelBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

/**
 * 
 *class DefaultControllerTest 
 * 
 **/ 

class DefaultControllerTest extends WebTestCase
{
    
 /**
 * 
 *admin index test 
 * 
 **/    
    
  public function testIndex(){
    
    $client=static::createClient(
        [],[
                'PHP_AUTH_USER' => 'admin',
                'PHP_AUTH_PW' => 'adminpass',
               ] 
        
        );
    
    $client->request('GET','/admin/');
    
    
    $this->assertTrue($client->getResponse()->isRedirect('blog_core_post_index'));
    
    
    
  }



}
<?php

namespace Blog\ModelBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

/**
 * 
 *class AuthorControllerTest 
 * 
 **/ 

class AuthorControllerTest extends WebTestCase
{
    /**
     * Author crud test
     * 
     **/ 
    
    
    public function testCompleteScenario()
    {
        // Create a new client to browse the application
        $client = static::createClient(
            [],[
                'PHP_AUTH_USER' => 'admin',
                'PHP_AUTH_PW' => 'adminpass',
               ] 
                
            );

        // Create a new entry in the database
        $crawler = $client->request('GET', '/admin/author/');
        $this->assertTrue($client->getResponse()->isSuccessful(),"The response not susseful");
        $crawler = $client->click($crawler->selectLink('Create a new author')->link());

        // Fill in the form and submit it
        $form = $crawler->selectButton('Create')->form(array(
            'blog_modelbundle_author[name]'  => 'Test',
            // ... other fields to fill
        ));

        $client->submit($form);
        $crawler = $client->followRedirect();

        // Check data in the show view
        $this->assertGreaterThan(0, $crawler->filter('td:contains("Test")')->count(), 'Missing element td:contains("Test")');

        // Edit the entity
        //$crawler = $client->click($crawler->selectLink('Edit')->link());
        
        

        
        $crawler = $client->click($crawler->selectLink("Edit")->link());

        $form = $crawler->selectButton('Edit')->form(array(
            'blog_modelbundle_author[name]'  => 'Foo',
            // ... other fields to fill
        ));

        $client->submit($form);
        $crawler = $client->followRedirect();

        // Check the element contains an attribute with value equals "Foo"
        $this->assertGreaterThan(0, $crawler->filter('[value="Foo"]')->count(), 'Missing element [value="Foo"]');

        // Delete the entity
        $client->submit($crawler->selectButton('Delete')->form());
        $crawler = $client->followRedirect();

        // Check the entity has been delete on the list
        $this->assertNotRegExp('/Foo/', $client->getResponse()->getContent());
    }

    
}

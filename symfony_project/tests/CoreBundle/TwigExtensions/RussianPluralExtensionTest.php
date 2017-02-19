<?php

namespace Blog\CoreBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

use Blog\CoreBundle\TwigExtensions\TransPlural;



class RussianPluralExtensionTest extends WebTestCase

{
   
   
   
 public function testExtension()
    {
        $client = static::createClient();
        
        $container=$client->getContainer();
        
        $translator=$container->get('translator');
       
        
        $translator->setLocale('ru');
        
        $msg=" {0} Будьте первым кто прокомментировал| {1} %count% комментарий| {2} %count% комментария|
        
              {3} %count% комментариев";
        
        
        
        $ext=new TransPlural($translator);
        
        $this->assertEquals('Будьте первым кто прокомментировал', $ext->trans_plural($msg,0));
        $this->assertEquals('1 комментарий', $ext->trans_plural($msg,1));
        $this->assertEquals('2 комментария', $ext->trans_plural($msg,2));
        $this->assertEquals('5 комментариев', $ext->trans_plural($msg,5));
    }   
    
    
}
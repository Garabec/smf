<?php


namespace Blog\CoreBundle\TwigExtensions;
use Symfony\Component\Translation\Translator;
use Symfony\Component\Translation\TranslatorInterface;

class TransPlural extends \Twig_Extension {
    
    
    private $translator;
    
    public function __construct(TranslatorInterface $translator){
        
     $this->translator=$translator;  
        
    }
    
   /**
    * 
    *@param string $msg
    *@param int $number
    * 
    *@return string
    * 
    **/
    public function trans_plural($msg,$number){
        
    $translated=$this->translator->trans($msg,['%d'=>$number]); 
    
    // dump($msg);
    // dump($number);
    // dump($translated);
    // die;
      
    if($this->translator->getLocale()!=='ru' || $number===0){
        
     return $this->translator->transChoice($translated,$number,['%count%'=>$number]);   
        
    } 
      
      
        
        $type=($number%10==1 && $number%100!=11) ? 1 : 
              (($number%10>=2 && $number%10<=4) && 
              ($number%100<10 || $number%100>=20) ? 2 : 3);
              
            //   dump($type);
            //   die;
        
     return $this->translator->transChoice($translated,$type,['%count%'=>$number]);   
        
    }
    
    /**
    * 
    *
    *{@inheritdoc}
    * 
    *
    * 
    **/
    public function getFilters(){
        
        return array(
          
           new \Twig_SimpleFilter('trans_plural',[$this,'trans_plural']) 
            
            );
        
        
    }
    
    /**
    * 
    *
    *{@inheritdoc}
    * 
    *
    * 
    **/
    
    public function getName(){
        
       return 'russian_plural_extension'; 
        
    }
    
    
}
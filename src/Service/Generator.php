<?php

namespace Bits\Themply\Service;

use Symfony\Component\Filesystem\Exception\IOExceptionInterface;
use Symfony\Component\Filesystem\Filesystem;
use Symfony\Component\Filesystem\Path;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class Generator
{
  
  
    // builds the assetfiles
      public function buildChoiceField($form)
    {
        
        $choicesArr = [];
        chdir('../');
    
        $bootswatchThemesArr = scandir(getcwd().'/vendor/thomaspark/bootswatch/dist');
         // var_dump($bootswatchThemesArr);exit;
          chdir('public');
        foreach($bootswatchThemesArr as $bootswatchTheme){
      
          if($bootswatchTheme != "." && $bootswatchTheme != ".."){
            $choicesArr[$bootswatchTheme] = lcfirst($bootswatchTheme);
          }
          
        }
        $choicesArr = array_flip($choicesArr);
        return $form->add('Themes_Auswahl', ChoiceType::class,['choices'  =>$choicesArr ])->getForm();
        
        
         
       
    }
}
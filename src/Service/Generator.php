<?php

namespace Bits\Themply\Service;

use Symfony\Component\Filesystem\Exception\IOExceptionInterface;
use Symfony\Component\Filesystem\Filesystem;
use Symfony\Component\Filesystem\Path;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;


class Generator
{
  
  
    // builds the assetfiles
      public function buildFields($form)
    {
        
        $themesArr = [];
        chdir('../');
    
        $bootswatchThemesArr = scandir(getcwd().'/vendor/thomaspark/bootswatch/dist');
        
          chdir('public');
        foreach($bootswatchThemesArr as $bootswatchTheme){
      
          if($bootswatchTheme != "." && $bootswatchTheme != ".."){
            $themesArr[$bootswatchTheme] = ucwords($bootswatchTheme);
          }
          
        }
        $themesArr = array_flip($themesArr);
       
         return $form
           ->add('themes', ChoiceType::class, ['choices'  =>$themesArr])
           ->add('verzeichnis', TextType::class)
           ->add('generieren', SubmitType::class, ['label' => 'Theme Generieren'])
           ->getForm();
         
       
    }
}
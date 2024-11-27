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
  
  
    // builds the form
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
  
      // builds the stylesheet
      public function buildStylesheet($themeAlias, $zielVerzeichnis)
    {
        
        // scss file generieren
        chdir('../');
         $currentDir = getcwd();
     
        $filesystem = new Filesystem();
          if($filesystem->exists($currentDir.'/files/'.$zielVerzeichnis) === false){
              return false;
          }
        $appScssContent = '/* '.$themeAlias.' Theme https://bootswatch.com/'.$themeAlias.'/ */

@import "../../../../../vendor/thomaspark/bootswatch/dist/'.$themeAlias.'/variables";
@import "../../../../../vendor/twbs/bootstrap/scss/bootstrap";
@import "../../../../../vendor/thomaspark/bootswatch/dist/'.$themeAlias.'/bootswatch";';
        
         chdir('vendor/birdsinthesun/themply');
        $filesystem->dumpFile('assets/styles/app.scss', $appScssContent);
        
        // Stylesheet generieren
        
        $stylesheetName = 'themply_'.$themeAlias.'.css';
        chdir('../../../');
        $console = shell_exec('php bin/console sass:build');
        chdir('public');
       echo "<pre>$console</pre>";exit;
       
         return $zielVerzeichnis.'/'.$stylesheetName;
         
       
    }
}
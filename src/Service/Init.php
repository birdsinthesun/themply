<?php

namespace Bits\Themply\Service;

use Symfony\Component\Filesystem\Exception\IOExceptionInterface;
use Symfony\Component\Filesystem\Filesystem;
use Symfony\Component\Filesystem\Path;

class Init
{

    // builds the assetfiles
      public function buildAssetFiles()
    {
        $filesystem = new Filesystem();
          if($filesystem->exists('/public/bundles/themply/styles')=== true &&
            $filesystem->exists('/bin/console-themply')=== true){
              return true;
          }
        chdir('../');
        $currentDir = getcwd();
        $assetFolderExists = $filesystem->exists($currentDir.'/public/bundles/themply');
        $themplyAssetPath = $currentDir.'/vendor/birdsinthesun/themply/assets';
        
         // var_dump($currentDir,$filesystem->exists($currentDir.'/public/bundles/themply'),$_SERVER["CONTEXT_DOCUMENT_ROOT"]);exit;
          if($assetFolderExists === true){
                $filesystem->mirror($themplyAssetPath, $currentDir.'/public/bundles/themply');
          }else{
                $filesystem->mkdir($currentDir.'/public/bundles/themply');
          }
        // copy console
         $filesystem->copy($currentDir.'/vendor/birdsinthesun/themply/bin/console', $currentDir.'/bin/console-themply',true);
        chdir('public');
    }
}
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
          /*if($filesystem->exists('/public/bundles/themply/styles')=== true){
              return true;
          }*/
       // chdir('../');
        $currentDir = '../'.getcwd();
        $assetFolderExists = $filesystem->exists('../public/bundles/themply');
        $themplyAssetPath = '../vendor/birdsinthesun/themply/assets';
        $themplyAssetPathExists = $filesystem->exists('../vendor/birdsinthesun/themply/assets');
        
         //var_dump($currentDir,$themplyAssetPathExists);exit;
          if($assetFolderExists === true){
                $filesystem->mirror($themplyAssetPath, '../public/bundles/themply');
          }else{
                $filesystem->mkdir('../public/bundles/themply');
                $filesystem->mirror($themplyAssetPath, '../public/bundles/themply');
          }
        
         // chdir('public');
    }
}

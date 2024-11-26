<?php
// src Bits/Themply/Controller/LuckyController.php
namespace Bits\Themply\Controller;

use Contao\CoreBundle\Routing\ScopeMatcher;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Contao\CoreBundle\Controller\AbstractBackendController;
use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;
use Bits\Themply\Service\Init;
use Bits\Themply\Service\Generator;

use Contao\System;

#[Route(' %contao.backend.route_prefix%/themply', name: self::class, defaults: ['_scope' => 'backend'])]  
#[AsController]
class BackendController extends AbstractBackendController
{
    
    public function __construct(
        private readonly ScopeMatcher $scopeMatcher
    ) {
            $Init = new Init();
            $Init->buildAssetFiles();
    }

       public function __invoke(Request $request): Response
    {
                 
        if (!$this->scopeMatcher->isBackendRequest($request)) {
            throw new AccessDeniedHttpException('You are not in a Contao backend scope.');
        }
        
      
         //var_dump($_POST);
          // var_dump( System::getContainer()->get('contao.routing.scope_matcher')->isBackendRequest($request));
        if(empty($_POST)){
            $Generator = new Generator();
            $form = $this->createFormBuilder(options: $this->getCsrfFormOptions());
            $Form = $Generator->buildFields($form);
            
            $number = random_int(0, 100);
            
            return $this->render('@Contao_ThemplyBundle/_generate.html.twig', [
                'number' => $number,
                'form' => $Form
            ]);
               
           }else{
         
        //  var_dump($_POST['form']['themes']);exit;
          return $this->render('@Contao_ThemplyBundle/_finished.html.twig', [
              'themeName' => ucwords($_POST['form']['themes']),
              'themeAlias' => $_POST['form']['themes'],
              'verzeichnis' =>  $_POST['form']['verzeichnis']
          ]);
        }
      
           
         
    }
    
   
 
}


?>
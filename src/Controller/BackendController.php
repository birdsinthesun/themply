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
use Bits\Themply\Service\TokenService;
use Symfony\Component\Security\Csrf\CsrfTokenManagerInterface;
use Symfony\Component\Security\Csrf\CsrfTokenManager;
use Contao\CoreBundle\Csrf\ContaoCsrfTokenManager;
use Symfony\Component\HttpFoundation\RequestStack;
use Contao\Input;
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
        
        $requestStack = new RequestStack($request);   
        $csrfTokenManager = new ContaoCsrfTokenManager($requestStack,'themply');
           
           
        if (!$this->scopeMatcher->isBackendRequest($request)) {
            throw new AccessDeniedHttpException('You are not in a Contao backend scope.');
        }
        $AccessToken = new TokenService($csrfTokenManager,'REQUEST_TOKEN');
        $_GET['rt'] =$AccessToken->generateToken();
           var_dump( System::getContainer()->get('contao.routing.scope_matcher')->isBackendRequest($request));
        if(empty($_POST)){
            $Generator = new Generator();
            $form = parent::createFormBuilder();
            $Form = $Generator->buildChoiceField($form,$AccessToken->generateToken());
            
            $number = random_int(0, 100);
            
            return $this->render('@Contao_ThemplyBundle/_number.html.twig', [
                'number' => $number,
                'form' => $Form
            ]);
               
           }else{
         
          var_dump($_POST);exit;
          //return $this->render('@Contao_ThemplyBundle/_finished.html.twig', []);
        }
      
           
         
    }
    
   
 
}


?>
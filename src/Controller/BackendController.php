<?php
// src Bits/Themply/Controller/LuckyController.php
namespace Bits\Themply\Controller;

use Contao\CoreBundle\Routing\ScopeMatcher;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Contao\CoreBundle\Controller\AbstractBackendController;
use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;


#[Route(' %contao.backend.route_prefix%/themply', name: self::class, defaults: ['_scope' => 'backend'])]  
#[AsController]
class BackendController extends AbstractBackendController
{
    
    public function __construct(
        private readonly ScopeMatcher $scopeMatcher
    ) {
        
    }

       public function __invoke(Request $request): Response
    {
            
        if (!$this->scopeMatcher->isBackendRequest($request)) {
            throw new AccessDeniedHttpException('You are not in a Contao backend scope.');
        }
          $number = random_int(0, 100);

        return $this->render('@Contao_ThemplyBundle/_number.html.twig', [
            'number' => $number
        ]);
    }
 
}


?>
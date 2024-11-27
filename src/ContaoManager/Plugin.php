<?php
// src/ContaoManager/Plugin.php
namespace Bits\Themply\ContaoManager;

use Contao\ManagerPlugin\Bundle\BundlePluginInterface;
use Contao\ManagerPlugin\Bundle\Config\BundleConfig;
use Contao\ManagerPlugin\Bundle\Parser\ParserInterface;
use Contao\CoreBundle\ContaoCoreBundle;
use Bits\Themply\ThemplyBundle;
use Contao\ManagerPlugin\Routing\RoutingPluginInterface;
use Symfony\Component\Config\Loader\LoaderResolverInterface;
use Symfony\Component\HttpKernel\KernelInterface;
use Symfonycasts\SassBundle\SymfonycastsSassBundle;

class Plugin implements BundlePluginInterface,RoutingPluginInterface
{
    public function getBundles(ParserInterface $parser): array
    {
        return [
          //  BundleConfig::create(SymfonyAssetBundle::class),
           // BundleConfig::create(SymfonyAsset_MapperBundle::class),
            BundleConfig::create(SymfonycastsSassBundle::class),
           // BundleConfig::create(ThomasparkBootswatchBundle::class),
           // BundleConfig::create(TwbsBootstrapBundle::class),
            BundleConfig::create(ThemplyBundle::class)
                ->setLoadAfter([ContaoCoreBundle::class])
               
        ];
    }

    public function getRouteCollection(LoaderResolverInterface $resolver, KernelInterface $kernel)
    {
        return $resolver
            ->resolve(__DIR__.'/../Controller', 'attribute')
            ->load(__DIR__.'/../Controller')
        ;
    }
}

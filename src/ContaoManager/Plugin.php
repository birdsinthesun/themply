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

class Plugin implements BundlePluginInterface,RoutingPluginInterface
{
    public function getBundles(ParserInterface $parser): array
    {
        return [
            BundleConfig::create(ThemplyBundle::class,
                                 SymfonycastsSassBundle::class,
                                SymfonyAssetBundle::class,
                                SymfonyAsset_MapperBundle::class,
                                SymfonyDotenvBundle::class,
                                SymfonyFrameworkBundle::class,
                                SymfonyConfigBundle::class,
                                SymfonyConsoleBundle::class,
                                SymfonyRuntimeBundle::class,
                                SymfonyTwigBundle::class,
                                SymfonyYamlBundle::class,
                                SymfonyFilesystemBundle::class,
                                SymfonyFormBundle::class,
                                SymfonycastsSassBundle::class,
                                ThomasparkBootswatchBundle::class,
                                TwbsBootstrapBundle::class,
                                TwigExtraBundle::class,
                                TwigTwig::class
                               
                                
                                
                                )
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

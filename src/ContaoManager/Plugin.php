<?php
// src/ContaoManager/Plugin.php
namespace Bits\Themply\ContaoManager;

use Contao\ManagerPlugin\Bundle\BundlePluginInterface;
use Contao\ManagerPlugin\Bundle\Config\BundleConfig;
use Contao\ManagerPlugin\Bundle\Parser\ParserInterface;
use Contao\CoreBundle\ContaoCoreBundle;
use Bits\Themply\ThemplyBundle;

class Plugin implements BundlePluginInterface
{
    public function getBundles(ParserInterface $parser): array
    {
        return [
            BundleConfig::create(ThemplyBundle::class)
                ->setLoadAfter([ContaoCoreBundle::class]),
        ];
    }
}

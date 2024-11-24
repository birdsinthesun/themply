// src/Resources/config/config.php

use Contao\CoreBundle\ContaoCoreBundle;
use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator) {
$services = $containerConfigurator->services();

// Registriere das Backend-Modul
$GLOBALS['BE_MOD']['themply'] = [
'themply' => [
'tables' => ['tl_themply'],
'icon' => 'bundles/themply/icon.svg',
],
];
};
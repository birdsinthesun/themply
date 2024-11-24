<?php
// src/Resources/config/config.php

use Contao\CoreBundle\ContaoCoreBundle;
use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator) {
$services = $containerConfigurator->services();

// Registriere das Backend-Modul
$GLOBALS['BE_MOD']['layout'] = [
'themply' => [
'tables' => ['tl_themply'],
'icon' => 'birdsinthesun/themply/icon.png',
 'callback' => \Bits\Themply\Contao\ThemplyModule::class
],
];
};


?>
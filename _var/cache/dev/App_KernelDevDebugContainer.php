<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerVrKoYA4\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerVrKoYA4/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerVrKoYA4.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerVrKoYA4\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerVrKoYA4\App_KernelDevDebugContainer([
    'container.build_hash' => 'VrKoYA4',
    'container.build_id' => '7a661803',
    'container.build_time' => 1732378549,
    'container.runtime_mode' => \in_array(\PHP_SAPI, ['cli', 'phpdbg', 'embed'], true) ? 'web=0' : 'web=1',
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerVrKoYA4');
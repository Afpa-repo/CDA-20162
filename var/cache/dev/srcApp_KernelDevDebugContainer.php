<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerGZ4yXAU\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerGZ4yXAU/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerGZ4yXAU.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerGZ4yXAU\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerGZ4yXAU\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'GZ4yXAU',
    'container.build_id' => '741ad582',
    'container.build_time' => 1622640857,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerGZ4yXAU');

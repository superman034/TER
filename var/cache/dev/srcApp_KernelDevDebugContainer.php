<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerJ1h3vs4\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerJ1h3vs4/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerJ1h3vs4.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerJ1h3vs4\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerJ1h3vs4\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'J1h3vs4',
    'container.build_id' => 'ab1957b2',
    'container.build_time' => 1554801570,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerJ1h3vs4');

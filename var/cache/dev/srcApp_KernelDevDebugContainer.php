<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container9bvAwpk\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container9bvAwpk/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/Container9bvAwpk.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\Container9bvAwpk\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \Container9bvAwpk\srcApp_KernelDevDebugContainer([
    'container.build_hash' => '9bvAwpk',
    'container.build_id' => 'ba62dba6',
    'container.build_time' => 1554155542,
], __DIR__.\DIRECTORY_SEPARATOR.'Container9bvAwpk');

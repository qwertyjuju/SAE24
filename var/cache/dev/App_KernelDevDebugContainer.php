<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container6b9xLu1\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container6b9xLu1/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/Container6b9xLu1.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\Container6b9xLu1\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \Container6b9xLu1\App_KernelDevDebugContainer([
    'container.build_hash' => '6b9xLu1',
    'container.build_id' => '0e7cad19',
    'container.build_time' => 1652384893,
], __DIR__.\DIRECTORY_SEPARATOR.'Container6b9xLu1');

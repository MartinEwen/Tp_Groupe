<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container96fMXzt\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container96fMXzt/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/Container96fMXzt.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\Container96fMXzt\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \Container96fMXzt\App_KernelDevDebugContainer([
    'container.build_hash' => '96fMXzt',
    'container.build_id' => 'db766e22',
    'container.build_time' => 1670248909,
], __DIR__.\DIRECTORY_SEPARATOR.'Container96fMXzt');

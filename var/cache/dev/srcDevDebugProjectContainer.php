<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerPPVrV4f\srcDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerPPVrV4f/srcDevDebugProjectContainer.php') {
    touch(__DIR__.'/ContainerPPVrV4f.legacy');

    return;
}

if (!\class_exists(srcDevDebugProjectContainer::class, false)) {
    \class_alias(\ContainerPPVrV4f\srcDevDebugProjectContainer::class, srcDevDebugProjectContainer::class, false);
}

return new \ContainerPPVrV4f\srcDevDebugProjectContainer(array(
    'container.build_hash' => 'PPVrV4f',
    'container.build_id' => '34a1e512',
    'container.build_time' => 1531907425,
), __DIR__.\DIRECTORY_SEPARATOR.'ContainerPPVrV4f');

<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerVrbMlou\srcDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerVrbMlou/srcDevDebugProjectContainer.php') {
    touch(__DIR__.'/ContainerVrbMlou.legacy');

    return;
}

if (!\class_exists(srcDevDebugProjectContainer::class, false)) {
    \class_alias(\ContainerVrbMlou\srcDevDebugProjectContainer::class, srcDevDebugProjectContainer::class, false);
}

return new \ContainerVrbMlou\srcDevDebugProjectContainer(array(
    'container.build_hash' => 'VrbMlou',
    'container.build_id' => 'f04838df',
    'container.build_time' => 1518279594,
));

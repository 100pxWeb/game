<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerCRyERSQ\srcDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerCRyERSQ/srcDevDebugProjectContainer.php') {
    touch(__DIR__.'/ContainerCRyERSQ.legacy');

    return;
}

if (!\class_exists(srcDevDebugProjectContainer::class, false)) {
    \class_alias(\ContainerCRyERSQ\srcDevDebugProjectContainer::class, srcDevDebugProjectContainer::class, false);
}

return new \ContainerCRyERSQ\srcDevDebugProjectContainer(array(
    'container.build_hash' => 'CRyERSQ',
    'container.build_id' => '7409347b',
    'container.build_time' => 1518271130,
));

<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container85VWYK8\srcDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container85VWYK8/srcDevDebugProjectContainer.php') {
    touch(__DIR__.'/Container85VWYK8.legacy');

    return;
}

if (!\class_exists(srcDevDebugProjectContainer::class, false)) {
    \class_alias(\Container85VWYK8\srcDevDebugProjectContainer::class, srcDevDebugProjectContainer::class, false);
}

return new \Container85VWYK8\srcDevDebugProjectContainer(array(
    'container.build_hash' => '85VWYK8',
    'container.build_id' => '8c9885bd',
    'container.build_time' => 1547929098,
), __DIR__.\DIRECTORY_SEPARATOR.'Container85VWYK8');

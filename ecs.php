<?php

declare(strict_types=1);

use Symplify\EasyCodingStandard\Config\ECSConfig;

return ECSConfig::configure()
    ->withPaths([__DIR__, __DIR__ . '/src'])
    ->withPreparedSets(cleanCode: true)
    ->withCache(directory: __DIR__ . '/.ecs_cache')
    ->withSkip([
        __DIR__ . '/.ecs_cache',

        // possibly php-cs-fixer bug :)
        \PhpCsFixer\Fixer\ControlStructure\NoUnneededCurlyBracesFixer::class
    ]);

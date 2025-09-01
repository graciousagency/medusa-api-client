<?php

return [
    'openapi-file' => __DIR__.'/schema.json',
    'namespace' => 'Gracious\MedusaApiClientBundle',
    'directory' => __DIR__ . '/../generated',
    'strict' => false,
    'use-fixer' => false,
    'fixer-config-file' => __DIR__ . '/../.php-cs-fixer.dist.php',
    'throw-unexpected-status-code' => false,
];

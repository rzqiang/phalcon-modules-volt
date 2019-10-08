<?php

/**
 * Register application modules
 */
$application->registerModules(
    [
        "frontend" => [
            "className" => 'Multiple\Modules\Frontend\Module',
            "path"      => __DIR__ . "/../modules/frontend/Module.php",
        ],
        'dashboard' => [
            'className' => 'Multiple\Modules\Dashboard\Module',
            'path'      => __DIR__ . '/../modules/dashboard/Module.php'
        ]
    ]
);

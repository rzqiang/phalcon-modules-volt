<?php

use Phalcon\Config;

return new Config(
    [
        "database" => [
            "adapter"  => "Mysql",
            "host"     => "localhost",
            "username" => "root",
            "password" => "123456",
            "name"     => "mysite",
        ],
        "application" => [
            "controllersDir" => __DIR__ . "/../controllers/",
            "modelsDir"      => __DIR__ . "/../models/",
            "viewsDir"       => __DIR__ . "/../views/",
            'pluginsDir'     => __DIR__ . '/../plugins/',
            'baseUri'        => '/'
        ],
        "app" => [
            'version' => '2019100701',
            'host' => 'www.mysite.com',
            'hostUrl' => 'http://www.mysite.com/',
        ]

    ]
);

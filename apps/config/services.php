<?php

/**
 * Services are globally registered in this file
 */

use Phalcon\Mvc\Router;
use Phalcon\Mvc\Url as UrlResolver;
use Phalcon\DI\FactoryDefault;
use Phalcon\Session\Adapter\Files as SessionAdapter;

/**
 * The FactoryDefault Dependency Injector automatically registers the right
 * services to provide a full stack framework.
 */
$di = new FactoryDefault();

/**
 * Registering a router
 */
$di["router"] = function () {
    $router = new Router();

    $router->setDefaultModule("frontend");
    $router->setDefaultNamespace("Multiple\Modules\Frontend\Controllers");

    $router->setUriSource(\Phalcon\Mvc\Router::URI_SOURCE_SERVER_REQUEST_URI);

    $router->removeExtraSlashes(true);

    $router->add(
        "/",
        [
            "controller" => "index",
            "action"     => "index",
        ]
    );

    $router->add(
        "/frontend/:controller/:action",
        [
            "controller"  => 1,
            "action"     => 2,
        ]
    );

    $router->add(
        "/dashboard/:controller/:action",
        [
            'namespace' => "Multiple\\Modules\\Dashboard\\Controllers",
            'module'     => 'dashboard',
            "controller"  => 1,
            "action"     => 2,
        ]
    );

    $router->notFound(
        [
            "controller" => "error",
            "action"     => "notFound",
        ]
    );

    return $router;
};

/**
 * The URL component is used to generate all kind of urls in the application
 */
$di["url"] = function () {
    $url = new UrlResolver();

    $url->setBaseUri("/mvc/multiple-volt/");

    return $url;
};

/**
 * Start the session the first time some component request the session service
 */
$di["session"] = function () {
    $session = new SessionAdapter();

    $session->start();

    return $session;
};

<?php
/**
 * The entry file for the web application.  All requests should be sent through
 * this file.
 */


use Symfony\Component\HttpFoundation\Request;

require_once __DIR__ . '/../vendor/autoload.php';

$router = new Router();

$dispatcher = $router->setup()->getDispatcher();
$request = Request::createFromGlobals();

$response = $dispatcher->dispatch(
    $request->getMethod(),
    $request->getPathInfo()
);

$response->send();


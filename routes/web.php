<?php

/** @var \Laravel\Lumen\Routing\Router $router */

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->get('/formulario', function () use ($router) {
    return view('formulario');
});

$router->get('/formulariov2', function () use ($router) {
    return view('formulariov2');
});

$router->get('/formulariov3', function () use ($router) {
    return view('formulariov3');
});

$router->get('/formulariov4', function () use ($router) {
    return view('formulariov4');
});
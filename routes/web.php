<?php

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

use App\Http\Controllers\NewController;

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->get('/example/', 'NewController@ExampleFunction');

//$router->get('/example/', ['middleware' => 'example', function(){
//    return 'Access granted';
//}]);

$router->get('/example/{id}', 'NewController@FunctionWithParams');

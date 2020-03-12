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
//To itializar php -S localhost:8000 -t public
$app->get('/', function () use ($app) {
    try {
        //code...
        return response()->json($data, 200);//$app->version();
    } catch (\Throwable $th) {
        //throw $th;
    }
    
});

$app->get('aluno/{id}/{name}', function($id, $name) use ($app){
    try {
        //code...
        return response()->json($data, 200);
    } catch (\Throwable $th) {
        //throw $th;
        return response()->json('Error in method!', 400);
    }

});

<?php

/*
  |--------------------------------------------------------------------------
  | Application Routes
  |--------------------------------------------------------------------------
  |
  | Here is where you can register all of the routes for an application.
  | It's a breeze. Simply tell Laravel the URIs it should respond to
  | and give it the Closure to execute when that URI is requested.
  |
 */
//
//Route::get('/', function() {
//    return View::make('hello');
//});

Route::post('prueba', function() {
    $user = new User;
    $user->nombre = "Willian";
    $user->apellido = "Espinosa";
    $user->usuario = "wespinosa";
    $user->password = "wie";

    $user->save();

    return "El Usuario fue almacenado";
});

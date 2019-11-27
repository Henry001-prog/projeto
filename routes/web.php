<?php

Route::get('/', function() {
    return view('welcome');
});

Route::post('/cliente',['uses'=>'clienteController@create']);

Route::post('/produtos',['uses'=>'produtosController@create']);

//Route::post('/cliente',['uses'=>'clienteController@index']);

//Route::post('/cliente',['uses'=>'clienteController@index']);

//Route::post('/cliente',['uses'=>'clienteController@index']);

//Route::post('/cliente',['uses'=>'clienteController@index']);


/*Route::post('/cliente', function() {
    dd($_POST);
    return view("welcome2");
});*/

Route::get('/produtos/{id?}', function($id = null) {
    return view("list-produtos");
});

Route::post('/clientes/save',['as'=>'clientes.save','uses'=>'clienteController@store']);


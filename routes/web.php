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

Route::get('/clientes',['as'=>'clientes','uses'=>'clienteController@index']);
Route::get('/clientes/store',['as'=>'clientes.store','uses'=>'clienteController@store']);
Route::post('/clientes/store',['as'=>'clientes.store','uses'=>'clienteController@store']);


<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//Route::get('/hson',[
//    'as' => 'hson',
//    'uses' => 'HsonController@index'
//]);
Route::get('/products',[
    'as' => 'products',
    'uses' => 'ProductsController@index'
]);
Route::get('/models-21/add_test',[
    'as' => 'models-21.add_test',
    'uses' => 'ProductsController@add_test'
]);
//Route::get('/hson/add',[
//    'as' => 'hson.add',
//    'uses' => 'HsonController@add_test'
//]);
//
//Route::get('/menu',[
//    'as' => 'menu',
//    'uses' => 'MenuController@index'
//]);
//






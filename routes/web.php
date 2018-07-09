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
    return view('welcome', array('nome'=>'Fernando'));
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/remark', function () {
    return view('remark', array('sPagina' => 'principal'));
});

Route::get('/pagina/{sPagina}', function ($sPagina) {
    return view('remark', array('sPagina'=>$sPagina));
});

Route::get('/task', 'TaskController@index');

Route::get('/task/{task}', 'TaskController@show_2');

Route::get('/index', function() {
    return view('index');
});

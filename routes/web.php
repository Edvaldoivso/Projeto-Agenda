<?php

use Illuminate\Support\Facades\Route;

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

//Route::get('/', function () {
//    return view('welcome');
//});


//Route :: view('/jogos','jogos');

//Route::get('/jogos', function(){
//    return "Estou rodando Laravel";
//});

//Route :: view ('/jogos','jogos',['name'=>'GTA']);

Route :: get ('/jogos/{name?}' , function($name = null){
    return view('jogos',['nomeJogo'=>$name]);
});
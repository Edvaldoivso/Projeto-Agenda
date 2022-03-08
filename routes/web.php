<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControllerJogos;



//Consumindo uma View passando por um controller
//Route :: get('/jogos',[ControllerJogos::class,'index']);


Route :: prefix('jogos') ->group(function(){

    Route::get('/',[ControllerJogos::class,'index'])->name('jogos-index');
    Route::get('/create',[ControllerJogos::class,'create'])->name('jogos-create');
    Route::post('/',[ControllerJogos::class,'store'])->name('jogos-store');
    Route::post('/',[ControllerJogos::class,'store'])->name('jogos-store');


});

Route :: fallback(function(){
    return "Erro";
}); 
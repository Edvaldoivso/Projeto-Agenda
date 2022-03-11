<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControllerJogos;



//Consumindo uma View passando por um controller
//Route :: get('/jogos',[ControllerJogos::class,'index']);


Route::prefix('jogos')->group(function () {

    Route::get('/', [ControllerJogos::class, 'index'])->name('jogos-index');
    Route::get('/create', [ControllerJogos::class, 'create'])->name('jogos-create');
    Route::post('/', [ControllerJogos::class, 'store'])->name('jogos-store');
    Route::get('/{identificacao}/edit', [ControllerJogos::class, 'edit'])->where('identificacao', '[0-9]+')->name('jogos-edit');
    Route::put('/{identificacao}', [ControllerJogos::class, 'update'])->where('identificacao', '[0-9]+')->name('jogos-update');
    Route::delete('/{identificacao}', [ControllerJogos::class, 'destroy'])->where('identificacao', '[0-9]+')->name('jogos-destroy');
});

Route::fallback(function () {
    return "Erro";
});

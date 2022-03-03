<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllerJogos extends Controller
{
    public function index(){
        //dd('Agora Foi Diaxo');
        $nome = ' Edvaldo';
        $id = 1;
        return view('jogos',['nome' =>  $nome ,'id' => $id]);
    }
}
 
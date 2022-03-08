<?php

namespace App\Http\Controllers;

use App\Models\Jogo;
use Illuminate\Http\Request;

class ControllerJogos extends Controller
{
    public function index(){
        //dd('Agora Foi Diaxo');
     
  $Jogos = Jogo :: all();
   
  //dd($Jogos);

  return view('jogos.index',['Jogos'=> $Jogos]);


    }

public function create(){
    return view('jogos.create');
}


public function store(Request $request){

//dd($request);

Jogo :: create($request ->all());
return redirect()->route('jogos-index');

}


}
 
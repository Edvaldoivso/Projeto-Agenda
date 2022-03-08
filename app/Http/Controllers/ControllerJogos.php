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
}
 
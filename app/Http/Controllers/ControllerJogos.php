<?php

namespace App\Http\Controllers;

use App\Models\Jogo;
use Illuminate\Http\Request;

class ControllerJogos extends Controller
{
    public function index()
    {
        //dd('Agora Foi Diaxo');

        $Jogos = Jogo::all();

        //dd($Jogos);

        return view('jogos.index', ['Jogos' => $Jogos]);
    }

    public function create()
    {
        return view('jogos.create');
    }


    public function store(Request $request)
    {

        //dd($request);

        Jogo::create($request->all());
        return redirect()->route('jogos-index');
    }

    public function edit($identificacao)
    {
        $jogo = Jogo::where('identificacao', $identificacao)->first();
        if (!empty($jogo)) {

            return view('jogos.edit', ['jogos' => $jogo]);
        } else {
            return redirect()->route('jogos-index');
        }
    }

    public function update(Request $request, $identificacao)
    {
        //dd($request);

        $data = [
            'categoria' => $request->categoria,
            'nome' => $request->nome,
            'ano_criacao' => $request->ano_criacao,
            'identificacao' => $request->identificacao,
            'valor' => $request->valor
        ];

        Jogo::where('identificacao', $identificacao)->update($data);
        return redirect()->route('jogos-index');
    }



    public function destroy($identificacao)
    {
          Jogo::where('identificacao', $identificacao)->delete();
        return redirect()->route('jogos-ind ex');
    }
}

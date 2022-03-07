@extends('Layouts.app')


@section('Title')
Novo Title
@endsection





@section('content')

<h1>Lista de Jogos</h1>

<table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Nome</th>
      <th scope="col">Classificação</th>
      <th scope="col">Valor</th>
    </tr>
  </thead>

  @foreach($Jogo)
  <tr>
      <th scope="row"> {{$Jogo -> NomeJogo}}  </th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>twitter</td>
    </tr>
 @endforeach

</table>

@endsection
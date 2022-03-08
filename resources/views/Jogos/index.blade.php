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

  @foreach( $Jogos as $jogo )
  <tr>
      <th scope="row">{{ $jogo -> identificacao}}</th>
      <td>{{ $jogo -> nome}}</td>
      <td>{{ $jogo -> categoria}}</td>
      <td>{{ $jogo -> ano_criacao}}</td>
    </tr>
 @endforeach

</table>



</br>
</br>

<div class="form-group">
  
  <a href="{{ route('jogos-create') }}" class="btn  btn-success">Novo Jogo</a>
</div>


@endsection
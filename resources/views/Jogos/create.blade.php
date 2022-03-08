@extends('Layouts.app')


@section('Title')
Novo Title
@endsection





@section('content')

<h1>View de Jogos</h1>

<h1>Criar Novo Registro</h1>

<form action="{{route('jogos-store')}}" method="POST">
@csrf
<div class='form-group'>
<div class="form-group">
  <label for="nome"></label>
  <input type="text" name="nome" id="nome" class="form-control" placeholder="Digite o Nome" aria-describedby="Nome">
  <small id="helpId" class="text-muted">Insira o Nome</small>
</div>

<div class="form-group">
  <label for="categoria"></label>
  <input type="text" name="categoria" id="categoria" class="form-control" placeholder="Digite a categoria" aria-describedby="Categoria">
  <small id="helpId" class="text-muted">Insira a Categoria</small>
</div>

<div class="form-group">
  <label for="ano_criacao"></label>
  <input type="text" name="ano_criacao" id="ano_criacao" class="form-control" placeholder="Digite o Ano" aria-describedby="ano_criacao">
  <small id="helpId" class="text-muted">Insira o Ano de Criacao</small>
</div>

<div class="form-group">
  <label for="identificacao"></label>
  <input type="text" name="identificacao" id="identificacao" class="form-control" placeholder="Digite o ID" aria-describedby="ID">
  <small id="helpId" class="text-muted">Insira ID</small>
</div>

<div class="form-group">
  <label for="valor"></label>
  <input type="text" name="valor" id="valor" class="form-control" placeholder="Digite o valor" aria-describedby="valor">
  <small id="helpId" class="text-muted">Insira p valor</small>
</div>


</br>

<div class="form-group">
  
  <input type="submit" name="submit" class="btn  btn-primary">
</div>







</div>
</form>

@endsection
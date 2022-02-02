@extends('layouts\app')

@section('title', 'Criação')

@section('content')
    <!-- Tudo aqui dentro vai ser renderizado lá no nosso tamplete -->
    <div class="container mt-5">
      <h1>Crie um novo jogo</h1>
      <hr>
      <form action="{{ route('jogos-store') }}" method="POST">
        @csrf
          <div class="form-group">
            <div class="form-group">
              <label for="nome">Nome:</label>
              <input type="text" class="form-control" name="nome" placeholder="Digite o nome do jogo...">
            </div>
            <br>
            <div class="form-group">
              <label for="categoria">Categoria:</label>
              <input type="text" class="form-control" name="categoria" placeholder="Digite uma categoria para o jogo...">
            </div>
            <br>
            <div class="form-group">
              <label for="ano_criação">Ano de criação:</label>
              <input type="number" class="form-control" name="ano_criação" placeholder="Ano de criação...">
            </div>
            <br>
            <div class="form-group">
              <label for="valor">Valor:</label>
              <input type="number" class="form-control" name="valor" placeholder="Digite um valor...">
            </div>
            <br>
            <div class="form-group">
              <input type="submit" name="submit" class="btn btn-primary">
            </div>
          <div>
      </form>
    </div>
@endsection 
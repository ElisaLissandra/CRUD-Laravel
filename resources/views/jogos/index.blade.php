@extends('layouts\app')

@section('title', 'Listagem')

@section('content')
    <!-- Tudo aqui dentro vai ser renderizado lá no nosso tamplete -->
    <div class="container mt-5">
      <div class="row">
        <div class="col-sm-10">
          <h1>Listagem de Jogos</h1>
        </div>
        <div class="col-sm-2">
          <a href="{{ route('jogos-create')}}" class="btn btn-success">Novo Jogo</a>
        </div>
      </div>
        <table class="table mt-3">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nome</th>
            <th scope="col">Categoria</th>
            <th scope="col">Ano de Criação</th>
            <th scope="col">Valor</th>
          </tr>
        </thead>
        <tbody>
         @foreach($jogos as $jogo)
            <tr>
              <th>{{ $jogo->id }}</th>
                <th>{{ $jogo->nome }}</th>
                <th>{{ $jogo->categoria }}</th>
                <th>{{ $jogo->ano_criação }}</th>
                <th>{{ $jogo->valor }}</th>
              </tr>
          @endforeach
        </tbody>
      </table> 
    </div>
@endsection 

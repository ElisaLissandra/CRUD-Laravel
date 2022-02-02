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
            <th scope="col">...</th>
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
                <th>
                  <a href="{{ route('jogos-edit', ['id'=>$jogo->id]) }}" class="btn btn-primary">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                      <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
                    </svg>
                  </a>
                </th>
              </tr>
          @endforeach
        </tbody>
      </table> 
    </div>
@endsection 

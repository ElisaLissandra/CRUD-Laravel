<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JogosController extends Controller
{
   public function index()
   {
     //dd('Olá Mundo');
     $nome = 'GTA';
     $id = 1;
     return view('jogos', ['nome' => $nome, 'id' => $id]);
   }
}

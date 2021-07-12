<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Livro;

class LivrosController extends Controller
{
    public function create(){
        return view('livros.create');
    }

    public function store(Request $request){
        Livro::create([
            'isbn' => $request->isbn,
            'nome' => $request->nome,
            'autor' => $request->autor,
            'preco' => $request->preco
        ]);

        $livros = Livro::all();
        return view('livros.show',  ['livros' =>  $livros]);

    }

    public function show(){

        $livros = Livro::all();
        return view('livros.show',  ['livros' =>  $livros]);
    }
}

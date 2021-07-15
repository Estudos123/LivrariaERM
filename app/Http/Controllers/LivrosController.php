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

        return redirect('/livro/ver');  

    }

    public function show(){

        $livros = Livro::all();
        return view('livros.show',  ['livros' =>  $livros]);

    }

    public function edit($id){
        $livro = Livro::findOrFail($id);
        return view('livros.edit',  ['livro' =>  $livro]);
    }

    public function update(Request $request){
        $params = $request->all(); 
        $livro = Livro::findOrFail($params['id']);
        $livro->fill($params);
        $livro->save();
        return redirect('/livro/ver');     
    }
    
    public function destroy($id){
            $livro = Livro::find($id);
            if($livro != null){
            $livro->delete();
            }
            return redirect('/livro/ver');     
    }
}

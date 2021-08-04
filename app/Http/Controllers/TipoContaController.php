<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TipoContas;

class TipoContaController extends Controller
{
    public function create(Request $request)
    {
        $params = $request;

        TipoContas::create([
            'descricao' => $params->descricao
        ]);

        return redirect('/conta/ver');
    }


    public function show()
    {
        $tipoContas = TipoContas::paginate(5);

        return view('tipoconta.show', ['tipoContas' => $tipoContas]);
    }
}

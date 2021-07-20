<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Conta;


class ContaController extends Controller
{
    public function create()
    {
        return view('conta.create');
    }

    public function store(Request $request)
    {
        Conta::create([
            'matricula' => $request->matricula,
            'mes_referencia' => $request->mes_referencia,
            'data_vencimento' => $request->data_vencimento,
            'valor' => $request->valor,
            'cod_barras' => $request->cod_barras,
        ]);

        return redirect('/conta/ver');


    }

    public function show()
    {

        $contas = Conta::paginate(10);
        return view('conta.show',  ['contas' =>  $contas]);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Conta;
use App\Models\TipoContas;

use Illuminate\Support\Facades\DB;



class ContaController extends Controller
{
    private $tipoConta;

    public function __construct()
    {
        $this->tipoConta = TipoContas::all();
    }

    public function create()
    {

        return view('conta.create', ['tipoContas' => $this->tipoConta]);
    }

    public function store(Request $request)
    {
        Conta::create([
            'matricula' => $request->matricula,
            'tipo_contas_id' => $request->tipo_contas_id,
            'mes_referencia' => $request->mes_referencia,
            'data_vencimento' => $request->data_vencimento,
            'valor' => $request->valor,
            'cod_barras' => $request->cod_barras,
            'ind_pago' => false
        ]);

        return redirect('/conta/ver');
    }

    public function show()
    {
        $contas = Conta::paginate(5);
        $contasPagas = Conta::getContas('P');
        $contasPendentes = Conta::getContas('A');
        $contasVencidas = Conta::getContas('V');
        $totalContas = Conta::getContas('T');

        foreach ($contas as $conta) {
            $conta->tipo_conta = $this->showTypeContas($conta->id);
        }

        return view('conta.show',  [
            'contas' =>  $contas,
            'contasPagas' => $contasPagas,
            'contasPendentes' => $contasPendentes,
            'contasVencidas' => $contasVencidas,
            'totalContas' => $totalContas
        ]);
    }

    public function showTypeContas($id)
    {
        $conta = Conta::find($id);
        return $conta->getTipoContas;
    }


    public function edit($id)
    {
        $conta = Conta::findOrFail($id);
        $conta->tipo_conta = $this->showTypeContas($id);
        return view('conta.edit', ['conta' => $conta, 'tipoContas' => $this->tipoConta]);
    }

    public function update(Request $request)
    {
        $params = $request->all();
        $conta = Conta::findOrFail($params['id']);
        $conta->fill($params);
        $conta->save();

        return redirect('conta/ver');
    }

    public function destroy($id)
    {
        $conta = Conta::find($id);
        if ($conta != null) {
            $conta->delete();
        }
        return redirect('/conta/ver');
    }


    public function informPayment($id)
    {
        $conta = Conta::findOrFail($id);
        $conta->ind_pago = 1;
        $conta->save();
        return redirect('/conta/ver');
    }
}

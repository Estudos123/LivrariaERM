<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class Conta extends Model
{

    use HasFactory;
    protected $fillable = ['matricula', 'mes_referencia', 'data_vencimento', 'cod_barras', 'valor', 'ind_pago'];




    public static function getContas($situacao)
    {
        // V - VENCIDO, A - A PAGAR, P - PAGO, T - Todos
        if ($situacao == 'V') {
            $contasVencidas = DB::select('select sum(a.valor) as valor, count(a.valor) as quantidade from contas a where a.data_vencimento < cast(SYSDATE( ) as date)and a.ind_pago = 0')[0];
            return $contasVencidas;
        }

        $whereRaw = '';
        if ($situacao == 'A') {
            $whereRaw = 'where c.ind_pago = 0';
        } else if ($situacao == 'P') {
            $whereRaw = 'where c.ind_pago = 1';
        }else{
            $whereRaw = 'where c.ind_pago in (0,1)';
        }

        $totalContas = DB::select('select sum(c.valor) as valor, count(c.valor) as quantidade from contas c '. $whereRaw)[0];
        return $totalContas;
    }
}

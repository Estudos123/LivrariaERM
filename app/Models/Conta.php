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
        $totalContas = DB::select('select sum(c.valor) as valor, count(c.valor) as quantidade from contas c where c.ind_pago = ?',[$situacao])[0];
        return $totalContas;
    }
}

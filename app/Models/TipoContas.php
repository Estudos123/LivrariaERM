<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class TipoContas extends Model
{

    use HasFactory;
    protected $fillable = ['descricao'];

    public function conta()
    {
        return $this->hasMany(Conta::class);
    }
}

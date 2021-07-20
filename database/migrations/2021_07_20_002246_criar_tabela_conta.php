<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CriarTabelaConta extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('conta', function (Blueprint $table) {
            $table->id();
            $table->integer('pessoa_id')->nullable();
            $table->string('matricula')->nullable();
            $table->integer('mes_referencia')->nullable();
            $table->date('data_vencimento')->nullable();
            $table->decimal('valor')->nullable();
            $table->string('cod_barras')->nullable();
            $table->string('caminho_pdf')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('conta');
    }
}

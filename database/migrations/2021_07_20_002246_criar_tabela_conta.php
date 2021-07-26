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
        Schema::create('contas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('tipo_contas_id');
            $table->integer('pessoa_id')->nullable();
            $table->string('matricula')->nullable();
            $table->integer('mes_referencia')->nullable();
            $table->date('data_vencimento')->nullable();
            $table->decimal('valor')->nullable();
            $table->string('cod_barras')->nullable();
            $table->string('caminho_pdf')->nullable();
            $table->boolean('ind_pago')->nullable()->default(false);
            $table->timestamps();

            $table->foreign('tipo_contas_id')->references('id')->on('tipo_contas');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()

    {
        Schema::dropIfExists('tipo_contas');
        Schema::dropIfExists('conta');
    }
}

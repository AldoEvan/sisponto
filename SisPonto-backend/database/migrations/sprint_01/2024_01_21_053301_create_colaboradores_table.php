<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('colaboradores', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->string('cpf');
            $table->integer('matricula');
            $table->boolean('ativo');
            $table->date('data_nascimento');
            $table->date('data_admissao');
            $table->foreignId('cargo_id')->nullable()->constrained('cargos')->references('id');
            $table->foreignId('funcao_id')->nullable()->constrained('funcoes')->references('id');
            $table->foreignId('user_id')->nullable()->constrained('users')->references('id');
            $table->date('data_recissao')->nullable();
            $table->string('email');
            $table->string('telefone');
            $table->time('segunda_entrada1')->nullable();
            $table->time('segunda_saida1')->nullable();
            $table->time('segunda_entrada2')->nullable();
            $table->time('segunda_saida2')->nullable();
            $table->time('terca_entrada1')->nullable();
            $table->time('terca_saida1')->nullable();
            $table->time('terca_entrada2')->nullable();
            $table->time('terca_saida2')->nullable();
            $table->time('quarta_entrada1')->nullable();
            $table->time('quarta_saida1')->nullable();
            $table->time('quarta_entrada2')->nullable();
            $table->time('quarta_saida2')->nullable();
            $table->time('quinta_entrada1')->nullable();
            $table->time('quinta_saida1')->nullable();
            $table->time('quinta_entrada2')->nullable();
            $table->time('quinta_saida2')->nullable();
            $table->time('sexta_entrada1')->nullable();
            $table->time('sexta_saida1')->nullable();
            $table->time('sexta_entrada2')->nullable();
            $table->time('sexta_saida2')->nullable();
            $table->time('sabado_entrada1')->nullable();
            $table->time('sabado_saida1')->nullable();
            $table->time('sabado_entrada2')->nullable();
            $table->time('sabado_saida2')->nullable();
            $table->time('domingo_entrada1')->nullable();
            $table->time('domingo_saida1')->nullable();
            $table->time('domingo_entrada2')->nullable();
            $table->time('domingo_saida2')->nullable();
            $table->timestamps();
            $table->softDeletes();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('colaboradores');
    }
};

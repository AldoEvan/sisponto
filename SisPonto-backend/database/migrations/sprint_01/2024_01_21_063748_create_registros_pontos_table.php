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
        Schema::create('registros_pontos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('colaborador_id')->nullable()->constrained('colaboradores')->references('id');
            $table->foreignId('feriado_id')->nullable()->constrained('feriados')->references('id');
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
        Schema::dropIfExists('registros_pontos');
    }
};

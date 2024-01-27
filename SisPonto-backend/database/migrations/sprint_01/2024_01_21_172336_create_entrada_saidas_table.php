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
        Schema::create('entradas_saidas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('registro_ponto_id')->nullable()->constrained('registros_pontos')->references('id');
            $table->dateTime('entrada');
            $table->dateTime('saida')->nullable();
            $table->string('latitude');
            $table->string('longitude');
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
        Schema::dropIfExists('entradas_saidas');
    }
};

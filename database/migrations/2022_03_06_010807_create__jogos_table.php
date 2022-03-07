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
        Schema::create('jogos', function (Blueprint $table) {

            $table->id('identidade',2);
            $table->string('NomeJogo',15);
            $table->double('ValorJogo',8,2);
            $table->string('Classificação',2);
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
        Schema::dropIfExists('_jogos');
    }
};

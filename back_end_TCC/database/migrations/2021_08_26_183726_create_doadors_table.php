<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDoadorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doadors', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->string('CPF')->unique();
            $table->string('dtNasc');
            $table->string('telefone');
            $table->string('rua');
            $table->string('numero');
            $table->string('complemento');
            $table->string('cidade');
            $table->string('estado');
            $table->string('CEP');
            $table->integer('user_id');
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
        Schema::dropIfExists('doadors');
    }
}

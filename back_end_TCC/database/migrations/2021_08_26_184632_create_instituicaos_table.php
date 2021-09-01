<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInstituicaosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('instituicaos', function (Blueprint $table) {
            $table->id();
            $table->string('nomeFantasia');
            $table->string('razaoSocial');
            $table->string('focoInstitucional');
            $table->string('CNPJ');
            $table->string('dtFundacao');
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
        Schema::dropIfExists('instituicaos');
    }
}

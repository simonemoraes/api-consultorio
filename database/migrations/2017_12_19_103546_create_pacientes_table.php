<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePacientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()    
    {
        Schema::create('pacientes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome');
            $table->string('rua');
            $table->string('bairro');
            $table->string('cidade');
            $table->string('estado');
            $table->string('cep');
            $table->number('numero');
            $table->string('complemento');
            $table->string('dt_nasc');
            $table->string('cpf');
            $table->string('rg');
            $table->number('telefone');
            $table->number('celular');
            $table->string('operadora');
            $table->string('convenio');
            $table->string('num_convenio');
            $table->string('val_convenio');
            $table->tring('venct_convenio');
            $table->string('profissao');
            $table->string('empresa');
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
        Schema::dropIfExists('pacientes');
    }
}

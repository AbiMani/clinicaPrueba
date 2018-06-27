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
            $table->increments('idPacientes');
            $table->string('nombrePacientes');
            $table->string('apellidoPacientes');
            $table->string('telefonoPacientes');
            $table->string('direccionPacientes');
            $table->date('fechaNaciPacientes');
            $table->integer('edadPacientes');
            $table->string('tipoSangrePacientes');
            $table->string('sexoPacientes');
            $table->string('estadoCivilPacientes');
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

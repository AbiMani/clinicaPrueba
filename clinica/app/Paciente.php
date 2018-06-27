<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    protected $fillable=['nombrePacientes','apellidoPacientes','telefonoPacientes','direccionPacientes','fechaNaciPacientes','edadPacientes','tipoSangrePacientes','sexoPacientes','estadoCivilPacientes'];
    protected $table= 'pacientes';

    public function expediente(){
    	return $this->belongsTo(Expediente::class);
    }

}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Expediente extends Model
{
    
    protected $table='expedientes';

    public function paciente(){
    	return $this->belongsTo(Paciente::class);
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Medico extends Model
{
    protected $fillable =[
    	'nombreDoctor','apellidoDoctor','telefonoDoctor','direccionDoctor','fechaNaciDoctor','edadDoctor'];
    protected $table= 'medicos';

    
}

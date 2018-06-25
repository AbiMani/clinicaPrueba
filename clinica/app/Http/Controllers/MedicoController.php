<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Http\Request\medicoFormRequest;
use App\Medico;

class MedicoController extends Controller
{
    public function medicos(){
    	return view('web.ingresarMedico');
    }

    public function consultarMedicos(){
    	return view('web.consultarMedico');
    }

    public function store(Request $request){
    	$medico=new Medico(array(
    		'nombreDoctor'=>$request->get('nombreDoctor'),
    		'apellidoDoctor'=>$request->get('apellidoDoctor'),
    		'telefonoDoctor'=>$request->get('telefonoDoctor'),
    		'direccionDoctor'=>$request->get('direccionDoctor'),
    		'fechaNaciDoctor'=>$request->get('fechaNaciDoctor'),
    		'edadDoctor'=>$request->get('edadDoctor')

    	));
    	$medico->save();


    	return redirect('medico');
    }
}
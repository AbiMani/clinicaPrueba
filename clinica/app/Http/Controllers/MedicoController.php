<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\medicoFormRequest;
use App\Medico;
use DB;

class MedicoController extends Controller
{
    public function medicos(){
    	return view('web.ingresarMedico');
    }

    public function consultarMedicos(){
        
    	return view('web.consultarMedico');
    }

    public function store(medicoFormRequest $request){
    	$medico=new Medico(array(
    		'nombreDoctor'=>$request->get('nombreDoctor'),
    		'apellidoDoctor'=>$request->get('apellidoDoctor'),
    		'telefonoDoctor'=>$request->get('telefonoDoctor'),
    		'direccionDoctor'=>$request->get('direccionDoctor'),
    		'fechaNaciDoctor'=>$request->get('fechaNaciDoctor'),
    		'edadDoctor'=>$request->get('edadDoctor')

    	));
    	$medico->save();


    	return redirect('medico')->with('success','Guardado correctamente');;
    }

    public function index(){

        $medicos=Medico::all();
        return view('listarMedico',['medicos'=>$medicos]);
    }

    public function edit(){

    }

    public function destroy(Medico $medico)
    {
        $medico->delete();
    }
}
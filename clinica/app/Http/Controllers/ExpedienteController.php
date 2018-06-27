<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\expedienteFormRequest;
use App\Expediente;
use App\Paciente;

class ExpedienteController extends Controller
{

    public function expedientes(){
        return view('web.ingresarExpediente');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $paciente=Paciente::all();
        return view('listarPaciente',['paciente'=>$paciente]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(expedienteFormRequest $request)
    {
       $expediente = new Expediente;

        $paciente=new Paciente(array(
            'nombrePacientes'=>$request->get('nombrePacientes'),
            'apellidoPacientes'=>$request->get('apellidoPacientes'),
            'telefonoPacientes'=>$request->get('telefonoPacientes'),
            'direccionPacientes'=>$request->get('direccionPacientes'),
            'fechaNaciPacientes'=>$request->get('fechaNaciPacientes'),
            'edadPacientes'=>$request->get('edadPacientes'),
            'tipoSangrePacientes'=>$request->get('tipoSangrePacientes'),
            'sexoPacientes'=>$request->get('sexoPacientes'),
            'estadoCivilPacientes'=>$request->get('estadoCivilPacientes')

        ));
        $paciente->save();
        $expediente->save();


        return redirect('expediente')->with('success','Agregado correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

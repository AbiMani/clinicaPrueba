
@extends('layout.home')

@section('content')

<header>
        <div class="container">
          <div class="brand">
            <h1 class="brand_name"><a href="./">Clinica</a></h1>
            <p class="brand_slogan">Betel</p>
          </div>
         
        </div>
        <div id="stuck_container" class="stuck_container">
          <div class="container">
            <nav class="nav">
              <ul data-type="navbar" class="sf-menu">
                <li class="active"><a href="./">Home</a>
                </li>
                <li><a href="./">Medicos</a>
                    <ul>
                        <li><a href="{!! url('medico') !!}">Ingresar medico</a></li>
                        <li><a href="{!! url('consMedico') !!}">Consultar medico</a></li>
                    </ul>
                </li>
                <li><a href="index-3.html">Expediente</a>
                    <ul>
                      <li><a href="{!!  url('expediente') !!}">Ingresar paciente</a></li>
                      <li><a href="{!! url('consPaciente') !!}">Consultar paciente</a></li>
                  </ul>
                </li>
              </ul>
            </nav>
          </div>
        </div>
      </header>
<body>
<h1 class="text-primary">Expedientes de pacientes</h1>
<div>
        <table class="table">
        <thead class="table-info" >
          <td>ID</td>
          <td>NOMBRE</td>
          <td>APELLIDO</td>
          <td>TELEFONO</td>
          <td>DIRECCIÓN</td>
          <td>FECHA DE NACIEMIENTO</td>
          <td>EDAD</td>
          <td>TIPO DE SANGRE</td>
          <td>SEXP</td>
          <td>ESTADO CIVIL</td>
          <td></td>
        </thead>
         @foreach ($paciente as $pa)
                    <tbody>
                        <td>{{ $pa->idPacientes}}</td>
                        <td>{{ $pa->nombrePacientes}}</td>
                        <td>{{ $pa->apellidoPacientes}}</td>
                        <td>{{ $pa->telefonoPacientes}}</td>
                        <td>{{ $pa->direccionPacientes}}</td>
                        <td>{{ $pa->fechaNaciPacientes}}</td>
                        <td>{{ $pa->edadPacientes }}</td>
                        <td>{{ $pa->tipoSangrePacientes }}</td>
                        <td>{{ $pa->sexoPacientes }}</td>
                        <td>{{ $pa->estadoCivilPacientes }}</td>
                        <td>
                          <a href=""><button class="btn-edit">Editar</button></a>
                          <a href=""><button class="btn-destroid">Eliminar</button></a>
                        </td>
                    </tbody>
        @endforeach
       
      </table>
      
   
      </div>

</body>
<script src="{{ asset('js/script.js') }} "></script>
@endsection
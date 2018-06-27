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
                      <li><a href="{!!url('expediente')!!}">Ingresar paciente</a></li>
                      <li><a href="{!! url('consPaciente') !!}">Consultar paciente</a></li>
                  </ul>
                </li>
              </ul>
            </nav>
          </div>
        </div>
      </header>

<body>
  <div class="container">
    <div class="conteiner"> 
      <h1><b>Ingresar Paciente en expediente</b></h1>
    </div>
     @if (count($errors)>0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    @if (session('success'))
        <div>
            {{ session('success') }}
        </div>
    @endif


    <form class="form-horizontal"  method="POST" >
      <input type="hidden" name="_token" value="{!! csrf_token() !!}">

                    <div class="form-group">
                        <label  for="nombrePacientes" class="control-label col-xs-5">Nombre</label>
                        <div class="col-xs-5">
                          <input class="form-control" type="text" name="nombrePacientes" id="nombrePacientes" >
                        </div>
                        
                      </div>
                    <div class="form-group">
                        <label for='apellidoPacientes' class="control-label col-xs-5">Apellidos</label>
                        <div class="col-xs-5">
                           <input class="form-control" type="text" name="apellidoPacientes" id="apellidoPacientes">
                        </div>
                      </div>
                      
                    <div class="form-group">
                        <label for="telefonoPacientes" class="control-label col-xs-5">Telefono</label>
                        <div class="col-xs-5">
                          <input class="form-control" type="text" name="telefonoPacientes" id="telefonoPacientes">
                        </div>   
                      </div>

                    <div class="form-group">
                        <label  for='direccionPacientes' class="control-label col-xs-5">Direccion</label>
                        <div class="col-xs-5">
                            <input class="form-control" type="text" name="direccionPacientes" id="direccionPcientes">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="fechaNaciPacientes" class="control-label col-xs-5">Fecha de nacimiento</label>
                        <div class="col-xs-5">
                            <input class="form-control" type="date" name="fechaNaciPacientes" required="" placeholder="yyyy/mm/dd" id="fechaNaciPacientes">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="edadPacientes" class="control-label col-xs-5">Edad</label>
                        <div class="col-xs-5">
                            <input class="form-control" type="integer" name="edadPacientes" id="edadPacientes" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="tipoSangrePcientes" class="control-label col-xs-5">Tipo sangre</label>
                        <div class="col-xs-5">
                            <input class="form-control" type="text" name="tipoSangrePacientes" id="tipoSangrePacientes" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="sexoPacientes" class="control-label col-xs-5">Sexo</label>
                        <div class="col-xs-5">
                            <input class="form-control" type="text" name="sexoPacientes" id="sexoPacientes" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="estadoCivilPacientes" class="control-label col-xs-5">Estado Civil</label>
                        <div class="col-xs-5">
                            <input class="form-control" type="text" name="estadoCivilPacientes" id="estadoCivilPacientes" >
                        </div>
                    </div>
            <button  class="btn2" type="submit">GUARDAR</button>
    </form>
</body>
<script src="{{ asset('js/script.js') }} "></script>
@endsection
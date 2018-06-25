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
                    	<li><a href="{!! url('consultarMedico') !!}">Consultar medico</a></li>
                	</ul>
                </li>
                <li><a href="index-3.html">Expediente</a>
                	<ul>
                      <li><a href="#">Ingresar paciente</a></li>
                      <li><a href="#">Consultar paciente</a></li>
                  </ul>
                </li>
              </ul>
            </nav>
          </div>
        </div>
      </header>
<body>
  <div class="container">
    <div class="content"> 
      <h1><b>Ingresar medico</b></h1>
    </div>
    <form class="form-horizontal" id="formProducto" method="POST" >
      <input type="hidden" name="_token" value="{!! csrf_token() !!}">
                    <div class="form-group">
                        <label  for="nombreDoctor" class="control-label col-xs-5">Nombres</label>
                        <div class="col-xs-5">
                            <input class="form-control" type="text" name="nombreDoctor" id="nombreDoctor" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label for='apellidoDoctor' class="control-label col-xs-5">Apellidos</label>
                        <div class="col-xs-5">
                            <input class="form-control" type="text" name="apellidoDoctor" id="apellidoDoctor">
                        </div>
                    <div class="form-group">
                        <label for="telefonoDoctor" class="control-label col-xs-5">Telefono</label>
                        <div class="col-xs-5">
                            <input class="form-control" type="text" name="telefonoDoctor" id="telefonoDoctor">
                        </div>
                        <div class="form-group">
                        <label  for='direccionDoctor' class="control-label col-xs-5">Direccion</label>
                        <div class="col-xs-5">
                            <input class="form-control" type="text" name="direccionDoctor" id="direccionDoctor">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="fechaNaciDoctor" class="control-label col-xs-5">Fecha de nacimiento</label>
                        <div class="col-xs-5">
                            <input class="form-control" type="date" name="fechaNaciDoctor" required="" placeholder="yyyy/mm/dd" id="fechaNaciDoctor">
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="edadDoctor" class="control-label col-xs-5">Edad</label>
                        <div class="col-xs-5">
                            <input class="form-control" type="integer" name="edadDoctor" id="edadDoctor" >
                        </div>
                    </div>
            <button  class="btn2" type="submit">INGRESAR</button>
    </form>
</body>
<script src="{{ asset('js/script.js') }} "></script>
@endsection
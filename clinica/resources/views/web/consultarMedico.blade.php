
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
      <h1>consultar medicos</h1>
      <form action="consMedico" class="form-horizontal" id="formProducto" method="GET" >
      <input type="hidden" name="_token" value="{!! csrf_token() !!}">
                    <div class="form-group">
                        <label  for="nombreDoctor" class="control-label col-xs-5">id Medico</label>
                        <div class="col-xs-5">
                            <input class="form-control" type="text" name="nombreDoctor" id="nombreDoctor" >
                        </div>
                    </div>
              <button class="btn2" type="submit">CONSULTAR</button>
              <div>
      </div>
      

    </div>
  </div>
  
</body>
<script src="{{ asset('js/script.js') }} "></script>
@endsection
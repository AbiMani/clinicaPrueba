@extends('layout.home')

@section('content')
	<header>
        <div class="container">
          <div class="brand">
            <h1 class="brand_name"><a href="./">Clinica</a></h1>
            <p class="brand_slogan">Betel</p>
          </div><a href="callto:#" class="fa-phone">2531-2078</a>
          <p>Recuede que estamos disponibles para que nos llame las 24 horas al día</p>
        </div>
        <div id="stuck_container" class="stuck_container">
          <div class="container">
            <nav class="nav">
              <ul data-type="navbar" class="sf-menu">
                <li class="active"><a href="./">Home</a>
                </li>
                <li><a href="index-1.html">Conocenos</a>
                </li>
                <li><a href="./">Medicos</a>
                  <ul>
                      <li><a href="{!! url('medico') !!}">Ingresar medico</a></li>
                      <li><a href="{!! url('consMedico') !!}">Consultar medico</a></li>
                  </ul>
                </li>
                <li><a href="index-3.html">Expediente</a>
                  <ul>
                      <li><a href="{!! url('expediente') !!}">Ingresar paciente</a></li>
                      <li><a href="{!! url('consPaciente') !!}">Consultar paciente</a></li>
                  </ul>
                </li>
              </ul>
            </nav>
          </div>
        </div>
      </header>


 <main>
        <section class="camera_container">
          <div id="camera" class="camera_wrap">
            <div data-src="images/page-1_slide01.jpg">
              <div class="camera_caption fadeIn">
                <div class="container">
                  <div class="row">
                    <div class="preffix_6 grid_6">Helping with any of your business needs!</div>
                  </div>
                </div>
              </div>
            </div>
            <div data-src="images/page-1_slide02.jpg">
              <div class="camera_caption fadeIn">
                <div class="container">
                  <div class="row">
                    <div class="preffix_6 grid_6">The best strategies to attract new business</div>
                  </div>
                </div>
              </div>
            </div>
            <div data-src="images/page-1_slide03.jpg">
              <div class="camera_caption fadeIn">
                <div class="container">
                  <div class="row">
                    <div class="preffix_6 grid_6">A wide range of global business information</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>

      <section class="well ins1">
          <div class="container hr">
            <ul class="row product-list">
              <li class="grid_6">
                <div class="box wow fadeInRight">
                  <div class="box_aside">
                    <div class="icon fa-calendar-o"></div>
                  </div>
                  <div class="box_cnt__no-flow">
                    <h3><a href="#">Ingresar expediente nuevo</a></h3>
                    <p>Permite ingresar un nuevo paciente al expediente</p>
                  </div>
                </div>
                <hr>
                <div data-wow-delay="0.2s" class="box wow fadeInRight">
                  <div class="box_aside">
                    <div class="icon fa-comments"></div>
                  </div>
                  <div class="box_cnt__no-flow">
                    <h3><a href="#">consultar Paciente</a></h3>
                    <p>Permite consultar los expidientes guardados </p>
                  </div>
                </div>
              </li>
              <li class="grid_6">
                <div data-wow-delay="0.3s" class="box wow fadeInRight">
                  <div class="box_aside">
                    <div class="icon fa-group"></div>
                  </div>
                  <div class="box_cnt__no-flow">
                    <h3><a href="medico">Ingreso de medicos</a></h3>
                    <p>Permite ingresar un nuevo medico.</p>
                  </div>
                </div>
                <hr>
                <div data-wow-delay="0.4s" class="box wow fadeInRight">
                  <div class="box_aside">
                    <div class="icon fa-comments"></div>
                  </div>
                  <div class="box_cnt__no-flow">
                    <h3><a href="#">consultar medico</a></h3>
                    <p>Permite ver los datos de los medicos que trabajan en la clinica</p>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </section>
<main>
  
      <footer>
        <section class="well3">
          <div class="container">
            <ul class="row contact-list">
              <li class="grid_4">
                <div class="box">
                  <div class="box_aside">
                    <div class="icon2 fa-map-marker"></div>
                  </div>
                  <div class="box_cnt__no-flow">
                    <address>Barrio el angel, Rosario la paz<br/></address>
                  </div>
                </div>
                <div class="box">
                  <div class="box_aside">
                    <div class="icon2 fa-envelope"></div>
                  </div>
                  <div class="box_cnt__no-flow"><a href="mailto:#">info@demolink.org</a></div>
                </div>
              </li>
              <li class="grid_4">
                <div class="box">
                  <div class="box_aside">
                    <div class="icon2 fa-phone"></div>
                  </div>
                  <div class="box_cnt__no-flow"><a href="callto:#">2531-2078</a></div>
                </div>
              </li>
              <li class="grid_4">
                <div class="box">
                  <div class="box_aside">
                    <div class="icon2 fa-facebook"></div>
                  </div>
                  <div class="box_cnt__no-flow"><a href="#">Follow on facebook</a></div>
                </div>
                <div class="box">
                  <div class="box_aside">
                    <div class="icon2 fa-twitter"></div>
                  </div>
                  <div class="box_cnt__no-flow"><a href="#">Follow on Twitter</a></div>
                </div>
              </li>
            </ul>
          </div>
        </section>
      </footer>
    </div>
<script src="{{ asset('js/script.js') }} "></script>
@endsection
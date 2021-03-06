@extends('plantillaProyectos')
@section('titulo')
Project Team
@endsection
@section('css')
pjt
@endsection('css')
@section('main')

  <section class="projectteam">

    <div class="contenedor">

      <img class="no-expand" src="/img/logopjt.png" alt="logo">
      <h4>Team Building para equipos en Acción</h4>
      <h4 class="bold">Project Team</h4>
      <a href="#ProjectTeam" class="btnHumanTraining" >Qué es Project Team</a>

    </div>

  </section>

  <section class="white-background" id="ProjectTeam">

    <div class="caja">
      <div class="content">
        <h1>Qué es <br><span class="celesteBig"> Project Team</span></h1>
      </div>

      <div class="content">
        <p>Los equipos dentro de una organización están expuestos a cambios permanentes, es más, deben cambiar siempre para crecer y acompañar el escenario que se les presenta a las empresas hoy día. Para estos equipos diseñamos Project Team. Es un workshop diseñado para equipos en acción, para un momento donde es imperioso encontrar el sentido al esfuerzo. Es un laboratorio para repasar, organizarnos y seguir avanzando.</p>
        <a class="descargar-brochure "href="/documents/ProjectTeamWeb.pdf" target="_blank">Descargar Brochure</a>
      </div>
    </div>

  </section>

@endsection

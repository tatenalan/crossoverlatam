@extends('plantilla')
@section('titulo')
Project Team
@endsection
@section('css')
pjt
@endsection('css')
@section('main')

  <section class="projectteam">

    <div class="contenedor">

      <img class="logobrand" src="/img/logopjt.png" alt="logo">
      <h4>Clínicas de Team Building Project Team</h4>
      <h4 class="bold">Project Team</h4>
      <button class="btnHumanTraining btn" type="button" name="button">Qué es Project Team</button>

    </div>

  </section>

  <section class="white-background">

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

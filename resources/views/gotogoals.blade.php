@extends('plantillaProyectos')
@section('titulo')
Go to Goals
@endsection
@section('css')
gtg
@endsection('css')
@section('main')

  <section class="gotogoals">

    <div class="contenedor">

      <img class="logobrand" src="/img/logogtg.svg" alt="logo">
      <h4 class="bold">Sales Transformation Programme</h4>
      <a href="#GoToGoals" class="btnHumanTraining">Qué es Go to Goals</a>

    </div>

  </section>

  <section class="white-background" id="GoToGoals">

    <div class="caja">
      <div class="content">
        <h1>Qué es <br><span class="celesteBig"> Human to Human</span></h1>
      </div>

      <div class="content">
        <p>Human to Human es un Programa de Liderazgo que promueve un estilo de liderazgo basado en las capacidades de comunicación entre personas, que aspira a integrar las potencias de las organizaciones para alcanzar logros comunes. Es un programa dirigido a quienes lideran proyectos y equipos de trabajo que deben implementar en la táctica la definición estratégica.</p>
        <a class="descargar-brochure "href="/documents/GoToGoalsWeb.pdf" target="_blank">Descargar Brochure</a>
      </div>
    </div>

  </section>

  <section class="clinicas">

      <div class="clinica">

        <div class="foto-clinica">
          <img class="img-perfil" src="/img/lab1.jpg" alt="foto de perfil">
        </div>
        <div class="texto">
          <h3 class="rojo bold">Lab I - Identificación de la Oportunidad</h3>
          <p></p>
        </div>

      </div>

      <div class="clinica">

        <div class="foto-clinica">
          <img class="img-perfil" src="/img/lab2.jpg" alt="foto de perfil">
        </div>
        <div class="texto">
          <h3 class="rojo bold">Lab II - Desafiando la Oportunidad</h3>
          <p></p>
        </div>

      </div>

      <div class="clinica">

        <div class="foto-clinica">
          <img class="img-perfil" src="/img/lab3.jpg" alt="foto de perfil">
        </div>
        <div class="texto">
          <h3 class="rojo bold">Lab III - Cierre del Acuerdo</h3>
          <p></p>
        </div>

      </div>


  </section>

@endsection

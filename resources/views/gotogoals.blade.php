@extends('plantilla')
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
      <h4>Escuela de Ventas</h4>
      <h4 class="bold">Sales Transformation Programme</h4>
      <button class="btnHumanTraining btn" type="button" name="button">Qué es Go to Goals</button>

    </div>

  </section>

  <section class="white-background">

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
          <h3 class="rojo bold">Clínica 1 Líderes Inteligentes</h3>
          <p>Clínica de Liderazgo para Líderes de Acción: Dirigido a quienes lideran proyectos y equipos de trabajo que deben implementar en la táctica la definición de la estrategia.</p>
        </div>

      </div>

      <div class="clinica">

        <div class="foto-clinica">
          <img class="img-perfil" src="/img/lab2.jpg" alt="foto de perfil">
        </div>
        <div class="texto">
          <h3 class="rojo bold">Clínica 2 - Liderazgo Equipos Despistados</h3>
          <p>Clínica de Liderazgo dirigida a líderes que van a máxima velocidad y deben orientar el rumbo del equipo.</p>
        </div>

      </div>

      <div class="clinica">

        <div class="foto-clinica">
          <img class="img-perfil" src="/img/lab3.jpg" alt="foto de perfil">
        </div>
        <div class="texto">
          <h3 class="rojo bold">Clínica 3 - Liderazgo Faro en la Tormenta</h3>
          <p>Clínica de Liderazgo dirigida a Líderes que guían equipos en la gestión cotidiana.</p>
        </div>

      </div>


  </section>

@endsection

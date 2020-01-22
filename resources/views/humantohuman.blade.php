@extends('plantillaProyectos')
@section('titulo')
Human to Human
@endsection
@section('css')
hth
@endsection('css')
@section('main')

  <section class="humantohuman">

    <div class="contenedor">

      <img class="logobrand" src="/img/logohth.svg" alt="logo">
      <h4>Programa de Liderazgo</h4>
      <h4 class="bold">Human to Human</h4>
      <a href="#HumanToHuman" class="btnHumanTraining">Qué es Human to Human</a>

    </div>

  </section>

  <section class="white-background" id="HumanToHuman">

    <div class="caja">
      <div class="content">
        <h1>Qué es <br><span class="celesteBig"> Human to Human?</span></h1>
      </div>

      <div class="content">
        <p>Human to Human es un Programa de Liderazgo que promueve un estilo de liderazgo basado en las capacidades de comunicación entre personas, que aspira a integrar las potencias de las organizaciones para alcanzar logros comunes. Es un programa dirigido a quienes lideran proyectos y equipos de trabajo que deben implementar en la táctica la definición estratégica.</p>
        <a class="descargar-brochure "href="/documents/HumanToHumanWeb.pdf" target="_blank">Descargar Brochure</a>
      </div>
    </div>

  </section>

  <section class="clinicas">

      <div class="clinica">

        <div class="foto-clinica">
          <img class="img-perfil" src="/img/clinica1.jpg" alt="foto de perfil">
        </div>
        <div class="texto">
          <h3 class="celeste bold">Clínica 1 Líderes Inteligentes</h3>
          <p>Clínica de Liderazgo para Líderes de Acción: Dirigido a quienes lideran proyectos y equipos de trabajo que deben implementar en la táctica la definición de la estrategia.</p>
        </div>

      </div>

      <div class="clinica">

        <div class="foto-clinica">
          <img class="img-perfil" src="/img/clinica2.jpg" alt="foto de perfil">
        </div>
        <div class="texto">
          <h3 class="celeste bold">Clínica 2 - Liderazgo Equipos Despistados</h3>
          <p>Clínica de Liderazgo dirigida a líderes que van a máxima velocidad y deben orientar el rumbo del equipo.</p>
        </div>

      </div>

      <div class="clinica">

        <div class="foto-clinica">
          <img class="img-perfil" src="/img/clinica3.jpg" alt="foto de perfil">
        </div>
        <div class="texto">
          <h3 class="celeste bold">Clínica 3 - Liderazgo Faro en la Tormenta</h3>
          <p>Clínica de Liderazgo dirigida a Líderes que guían equipos en la gestión cotidiana.</p>
        </div>

      </div>

      <div class="clinica">

        <div class="foto-clinica">
          <img class="img-perfil" src="/img/clinica4.jpg" alt="foto de perfil">
        </div>
        <div class="texto">
          <h3 class="celeste bold">Clínica 4 - Liderazgo Equipos en Proyecto</h3>
          <p>Clínica de Liderazgo dirigida a Líderes que deben desafiar a sus equipos a alcanzar metas desafiantes.</p>
        </div>


    </div>


  </section>



@endsection

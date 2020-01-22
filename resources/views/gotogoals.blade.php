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
        <h1>Qué es <br><span class="celesteBig"> Go to Goals?</span></h1>
      </div>

      <div class="content">
        <p>La tarea comercial es ver las oportunidades y aceptar el desafío de transformarse en objetivos logrados, a través de un proceso de comunicación al cual llamamos venta. Go to Goals es una escuela de entrenamiento de vendedores. Somos un equipo especializado en ayudar a mejorar en lo que cada vendedor necesite hacerlo.</p>
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

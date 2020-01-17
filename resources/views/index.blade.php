@extends('plantilla')
@section('titulo')
Crossover LATAM
@endsection
@section('css')
styles
@endsection('css')
@section('main')

  <section class="vp carouselHero">
    <div class="carouselContent">

      <div class="text">
        <h2>Crossover es una consultora dedicada al  entrenamiento de personas y a la revitalizacion de equipos de trabajo.</h2>
        <p class="bold">Nos concentramos en desarrollar las habilidades necesarias para potenciar a las personas en el desempeño de habilidades para el rol.</p>
        <p>Con gran experiencia en equipos comerciales, nos especializamos en  el diseño de <span>Escuelas de  Entrenamiento de Líderes y Programas de entrenamiento en ventas</span>. Acompaña los momentos de cambio, ayudando a desarrollar las habilidades necesarias para poder implementar las estrategias definidas en la tarea cotidiana de los equipos de trabajo.</p>
        <p>Tenemos un equipo de gran experiencia: coachs, mentores y facilitadores especialistas en personas en desarrollo.</p>
        <span>Será un gusto conocernos.</span>
      </div>

      <div class="buttonContent">
        <button class="btnht btn btn-secondary" type="button" name="button">Qué es Human Training</button>
      </div>

    </div>
    <div class="violeta">

    </div>

      <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">

        <div class="carousel-inner">
          <div class="pic3 carousel-item active">
            {{-- <img src="/img/CrossoverTop3.png" class="d-block w-100" alt=""> --}}
          </div>
          <div class="pic4 carousel-item">
            {{-- <img src="/img/CrossoverTop4.png" class="d-block w-100" alt="..."> --}}
          </div>
          <div class="pic5 carousel-item">
            {{-- <img src="/img/CrossoverTop5.png" class="d-block w-100" alt="..."> --}}
          </div>
          <div class="pic2 carousel-item">
            {{-- <img src="/img/CrossoverTop2.png" class="d-block w-100" alt="..."> --}}
          </div>
          <div class="pic1 carousel-item">
            {{-- <img src="/img/CrossoverTop.png" class="d-block w-100" alt="..."> --}}
          </div>
        </div>

      </div>
  </section>



  {{-- <section>
    <div class="black">
    </div>
  </section> --}}

@endsection('main')

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
        <h2>Crossover Human Training</h2>
        <p class="bold">Crossover es una consultora dedicada al entrenamiento de personas y a la revitalización de trabajo.<span class="blanco"> Nos concentramos en desarrollar las habilidades necesarias para potenciar a las personas en el desempeño de habilidades para el rol.</span></p>
        <p>Con gran experiencia en equipos comerciales, nos especializamos en el diseño de <span class="naranja">Escuelas de  Entrenamiento de Líderes, Programas de Entrenamiento en Ventas y Team Buildings.</span></p>
      </div>

      <div class="buttonContent">
        <button class="btnHumanTraining btn" type="button" name="button">Qué es Human Training</button>
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

  <section class="black-background">

    <div class="black">
      <div class="content">
        <h1>Qué es <br> Human <br> <span class="naranjaBig">Training?</span></h1>
      </div>

      <div class="content">
        <p>Es un <span class="naranja">concepto de capacitación</span> a partir de un <span class="naranja">blending</span> de acciones de formación que consisten en una receta con condimentos, cuyas proporciones se definen a medida de las condiciones de cada grupo de trabajo.</p>
        <p>Mezclamos <span class="naranja">espacios teóricos conceptuales</span> (presenciales y de live learning), instancias reflexivas y lúdicas, networking entre los participantes, coaching grupal y personalizado, laboratorios de prácticas y contactos de seguimiento para que se <span class="naranja">traslade lo aprendido a la realidad. Somos humanos entrenando humanos.</span></p>
        <button class="btnComoTrabajamos btn" type="button" name="button">Mirá como trabajamos</button>
      </div>
    </div>

  </section>

  <section class="galery">

    <div class="imagen-galeria">
      <img class="imagen-ampliada"src="/img/1.png" alt="imagen galeria">
    </div>

    <div class="imgagenesMiniatura">
      <img class="imagen-miniatura" src="/img/9.png" alt="imagen galeria">
      <img class="imagen-miniatura" src="/img/2.png" alt="imagen galeria">
      <img class="imagen-miniatura" src="/img/3.png" alt="imagen galeria">
      <img class="imagen-miniatura" src="/img/4.png" alt="imagen galeria">
      <img class="imagen-miniatura" src="/img/5.png" alt="imagen galeria">
      <img class="imagen-miniatura" src="/img/6.png" alt="imagen galeria">
      <img class="imagen-miniatura" src="/img/7.png" alt="imagen galeria">
      <img class="imagen-miniatura" src="/img/8.png" alt="imagen galeria">
    </div>

  </section>

  <section class="black-background">

    <div class="black">
      <div class="content">
        <h1>Nuestros<br> <span class="naranjaBig">Programas</span></h1>
      </div>

      <div class="content">
        <p>Mezclamos espacios teóricos conceptuales (presenciales y de live learning), instancias reflexivas y lúdicas, networking entre los participantes, coaching grupal y personalizado, laboratorios de prácticas y contactos de seguimiento para que se traslade lo aprendido a la realidad. Somos humanos entrenando humanos.</p>
      </div>
    </div>

  </section>

@endsection('main')

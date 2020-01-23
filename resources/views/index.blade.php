@extends('plantilla')
@section('titulo')
Crossover LATAM
@endsection
@section('css')

@endsection('css')
@section('main')

  <section class="vp carouselHero">
    <div class="carouselContent">

      <div class="text">
        <img class="logo-hero" src="/img/logocrossoverhumantraining.svg" alt="">
        <p class="bold">Crossover es una consultora dedicada al entrenamiento de personas y a la revitalización de trabajo.<span class="blanco"> Nos concentramos en desarrollar las habilidades necesarias para potenciar a las personas en el desempeño de habilidades para el rol.</span></p>
        <p>Con gran experiencia en equipos comerciales, nos especializamos en el diseño de <span class="naranja">Escuelas de  Entrenamiento de Líderes, Programas de Entrenamiento en Ventas y Team Buildings.</span></p>
      </div>

      <div class="buttonContent">
        <a href="#quienes-somos" class="btnHumanTraining">Qué es Human Training</a>
      </div>

    </div>
    <div class="violeta">

    </div>

      <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">

        <div class="carousel-inner">
          <div class="pic1 carousel-item active">
          </div>
          <div class="pic4 carousel-item">
          </div>
          <div class="pic5 carousel-item">
          </div>
          <div class="pic2 carousel-item">
          </div>
          <div class="pic3 carousel-item">
          </div>
        </div>

      </div>
  </section>

  <section class="black-background" id="quienes-somos">

    <div class="caja">
      <div class="content">
        <h1>Qué es <br> Human <br> <span class="naranjaBig">Training?</span></h1>
      </div>

      <div class="content">
        <p>Es un <span class="naranja">concepto de capacitación</span> a partir de un <span class="naranja">blending</span> de acciones de formación que consisten en una receta con condimentos, cuyas proporciones se definen a medida de las condiciones de cada grupo de trabajo.</p>
        <p>Mezclamos <span class="naranja">espacios teóricos conceptuales</span> (presenciales y de live learning), instancias reflexivas y lúdicas, networking entre los participantes, coaching grupal y personalizado, laboratorios de prácticas y contactos de seguimiento para que se <span class="naranja">traslade lo aprendido a la realidad. Somos humanos entrenando humanos.</span></p>
        <a href="#como-trabajamos" class="btnComoTrabajamos">Mirá como trabajamos</a>
      </div>
    </div>

  </section>

  {{-- <section class="gallery">

    <div class="imagen-galeria">
      <img class="imagen-ampliada"src="/img/carousel1.jpg" alt="imagen galeria">
    </div>

    <div class="imagenesMiniatura">
      <img class="imagen-miniatura" src="/img/carousel1.jpg" alt="imagen galeria">
      <img class="imagen-miniatura" src="/img/carousel2.jpg" alt="imagen galeria">
      <img class="imagen-miniatura" src="/img/carousel3.jpg" alt="imagen galeria">
      <img class="imagen-miniatura" src="/img/carousel4.jpg" alt="imagen galeria">
      <img class="imagen-miniatura" src="/img/carousel5.jpg" alt="imagen galeria">
      <img class="imagen-miniatura" src="/img/carousel6.jpg" alt="imagen galeria">
      <img class="imagen-miniatura" src="/img/carousel7.jpg" alt="imagen galeria">
      <img class="imagen-miniatura" src="/img/carousel8.jpg" alt="imagen galeria">
    </div>

  </section> --}}

  <section class="gallery-mobile" id="como-trabajamos">

    <div id="carousel" class="carousel-mobile carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carousel" data-slide-to="0" class="active"></li>
        <li data-target="#carousel" data-slide-to="1"></li>
        <li data-target="#carousel" data-slide-to="2"></li>
        <li data-target="#carousel" data-slide-to="3"></li>
        <li data-target="#carousel" data-slide-to="4"></li>
        <li data-target="#carousel" data-slide-to="5"></li>
        <li data-target="#carousel" data-slide-to="6"></li>
        <li data-target="#carousel" data-slide-to="7"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="d-block w-100" src="/img/carousel1.jpg" alt="First slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="/img/carousel2.jpg" alt="Second slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="/img/carousel3.jpg" alt="Third slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="/img/carousel4.jpg" alt="Third slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="/img/carousel5.jpg" alt="Third slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="/img/carousel6.jpg" alt="Third slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="/img/carousel7.jpg" alt="Third slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="/img/carousel8.jpg" alt="Third slide">
        </div>
      </div>

      <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>

    <div id="carouselExampleIndicators" class="carousel-desktop carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="6"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="7"></li>
      </ol>
      <div class="carousel-inner ">
        <div class="img1 carousel-item active">
        </div>
        <div class="img8 carousel-item">
        </div>
        <div class="img2 carousel-item">
        </div>
        <div class="img3 carousel-item">
        </div>
        <div class="img4 carousel-item">
        </div>
        <div class="img5 carousel-item">
        </div>
        <div class="img6 carousel-item">
        </div>
        <div class="img7 carousel-item">
        </div>
      </div>

      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>

  </section>

  <section class="black-background">

    <div class="caja">
      <div class="content">
        <h1>Nuestros<br> <span class="naranjaBig">Programas</span></h1>
      </div>
    </div>

  </section>

  <section class="brandhth">

    <div class="boxes">
      <div class="box1">

        <div class="marca">
          <img class="logobrand" src="/img/logohth.svg" alt="logo">
        </div>

        <div class="slogan">
          <h4>Programa de Liderazgo</h4>
          <h4 class="bold">Human to Human</h4>
        </div>

      </div>

      <div class="box2">
        <a href="/HumanToHuman" class="btnbrand" target="_blank">Ingresá a Human to Human</a>
      </div>


    </div>

  </section>

  <section class="brandgtg">

    <div class="boxes">
      <div class="box1">

        <div class="marca">
          <img class="logobrand" src="/img/logogtg.svg" alt="logo">
        </div>

        <div class="slogan">
          <h4 class="bold">Sales Transformation Programme</h4>
        </div>

      </div>

      <div class="box2">
        <a href="/GoToGoals" class="btnbrand" target="_blank">Ingresá a Go to Goals</a>
      </div>


    </div>

  </section>

  <section class="brandpjt">

    <div class="boxes">
      <div class="box1">

        <div class="marca">
          <img class="logobrand" src="/img/logopjt.svg" alt="logo">
        </div>

        <div class="slogan">
          <h4>Team Building para equipos en Acción.</h4>
          <h4 class="bold">Project Team</h4>
        </div>

      </div>

      <div class="box2">
        <a href="/ProjectTeam" class="btnbrand" target="_blank">Ingresá a Project Team</a>
      </div>


    </div>

  </section>

  <section class="gray-background" id='nuestro-equipo'>

    <div class="caja margintop10">
      <div class="content">
        <h1 class="black">Nuestro<br> <span class="naranjaBig">Equipo</span></h1>
      </div>

      <div class="content">
        <p class="black">En Crossover nos destacamos por nuestra gran visión de equipos comerciales, y estamos especializados en el diseño de Escuelas de Entrenamiento de Líderes y Programas de Entrenamiento en Ventas y Team Buildings. Tenemos un equipo de gran experiencia, conformado por coachs, mentores y facilitadores especialistas en personas en desarrollo.</p>
      </div>
    </div>

  </section>

  <section class="team">
    <div class="persona">

      <div class="img-perfil">
        <img class="img-perfil" src="/img/danielarrighetti.png" alt="foto de perfil">
      </div>

      <div class="desc-perfil">
        <h2 class="magenta">Daniel Arrighetti</h2>
        <p class="black"><span class="bold">Director de Desarrollo Crossover LATAM. Co-Founder y consultor de los programas Human to Human y Go to Goals.</span> Su rol es entender las necesidades de los clientes y equipos de trabajo, y co crear programas de entrenamiento que preparen a las personas para proyectos de desarrollo. Anteriormente fue coordinador de la Global Sales School de IBM para varios países de la región y Gerente Comercial del canal Estaciones de Servicio en YPF S.A.</p>
        <ul class="social">
          <li><a href="mailto:daniel.arrighetti@crossoverlatam.com" target="_blank"><ion-icon class="rounded-circle icono-mail" name="mail"></ion-icon></a></li>
          {{-- <li><ion-icon class="rounded-circle icono-whatsapp" name="logo-whatsapp"></ion-icon></li> --}}
          <li><a href="https://www.linkedin.com/in/dani-arrighetti-95a02511/" target="_blank"><ion-icon class="rounded-circle icono-linkedin" name="logo-linkedin"></ion-icon></a></li>
        </ul>
      </div>

    </div>

    <div class="persona">

      <div class="img-perfil">
        <img class="img-perfil" src="/img/edgardosalamone.png" alt="foto de perfil">
      </div>

      <div class="desc-perfil">
        <h2 class="magenta">Edgardo Salamone</h2>
        <p class="black"><span class="bold">Co-Founder y Director Pedagógico de los programas de entrenamiento de Human to Human y Go to Goals.</span> Especialista en Human Training. Una metodología de entrenamiento con un enfoque integral de las actitudes, emociones y los procesos de aprendizaje de cada persona. Los pensamientos y conceptos que utiliza en estos procesos provienen de su formación como Counselor, Psicólogo Social y Coach.</p>
        <ul class="social">
          <li><a href="mailto:edgardo.salamone@crossoverlatam.com" target="_blank"><ion-icon class="rounded-circle icono-mail" name="mail"></ion-icon></a></li>
          {{-- <li><ion-icon class="rounded-circle icono-whatsapp" name="logo-whatsapp"></ion-icon></li> --}}
          <li><a href='https://www.linkedin.com/in/edgardo-salamone-6b1b2294/' target="_blank"><ion-icon class="rounded-circle icono-linkedin" name="logo-linkedin"></a></ion-icon></li>
        </ul>
      </div>

    </div>

    <div class="personas">

      <div class="tarjeta-individual">

        <div class="img-individual">
          <img class="img-individual" src="/img/silviagarrido.jpg" alt="foto de perfil">
        </div>

        <div class="texto-individual">
          <h5 class="bold magenta">Silvia Garrido</h5>
          <h5>Coach Motivacional Human to Human</h5>
        </div>

      </div>

      <div class="tarjeta-individual">

        <div class="img-individual">
          <img class="img-individual" src="/img/mariana.jpg" alt="foto de perfil">
        </div>

        <div class="texto-individual">
          <h5 class="bold magenta">Mariana Volchomirsky</h5>
          <h5>Mentor Human to Human</h5>
        </div>

      </div>


      <div class="tarjeta-individual">

        <div class="img-individual">
          <img class="img-individual" src="/img/anamaria.jpg" alt="foto de perfil">
        </div>

        <div class="texto-individual">
          <h5 class="bold magenta">Ana María Aguilera</h5>
          <h5>Mentor Human to Human</h5>
        </div>

      </div>

      <div class="tarjeta-individual">

        <div class="img-individual">
          <img class="img-individual" src="/img/silvina.jpg" alt="foto de perfil">
        </div>

        <div class="texto-individual">
          <h5 class="bold magenta">Silvina Sánchez</h5>
          <h5>Mentor Human to Human</h5>
        </div>

      </div>

      <div class="tarjeta-individual">

        <div class="img-individual">
          <img class="img-individual" src="/img/rocio.jpg" alt="foto de perfil">
        </div>

        <div class="texto-individual">
          <h5 class="bold magenta">Rocío Luz Mehtce</h5>
          <h5>Coordinadora Dinámica Musical</h5>
        </div>

      </div>

      <div class="tarjeta-individual">

        <div class="img-individual">
          <img class="img-individual" src="/img/marcela.jpg" alt="foto de perfil">
        </div>

        <div class="texto-individual">
          <h5 class="bold magenta">Marcela Salvemini</h5>
          <h5>Logística y Capacitación</h5>
        </div>

      </div>

      <div class="tarjeta-individual">

        <div class="img-individual">
          <img class="img-individual" src="/img/matias.jpg" alt="foto de perfil">
        </div>

        <div class="texto-individual">
          <h5 class="bold magenta">Matías Bisurgi</h5>
          <h5>Diseño Gráfico y Comunicación Visual</h5>
        </div>

      </div>

      <div class="tarjeta-individual">

        <div class="img-individual">
          <img class="img-individual" src="/img/alan.jpg" alt="foto de perfil">
        </div>

        <div class="texto-individual">
          <h5 class="bold magenta">Alan Rodriguez</h5>
          <h5>Programador Web Full Stack</h5>
        </div>

      </div>

      <div class="tarjeta-individual">

        <div class="img-individual">
          <img class="img-individual" src="/img/ezequiel.jpg" alt="foto de perfil">
        </div>

        <div class="texto-individual">
          <h5 class="bold magenta">Ezequiel Penido</h5>
          <h5>Consultor Crossover en Chile</h5>
        </div>

      </div>

      <div class="tarjeta-individual">

        <div class="img-individual">
          <img class="img-individual" src="/img/luiz.jpg" alt="foto de perfil">
        </div>

        <div class="texto-individual">
          <h5 class="bold magenta">Luis Siqueira Vieira</h5>
          <h5>Consultor Crossover en Perú</h5>
        </div>

    </div>

  </section>

  <section class="white-background" id="clientes">

    <div class="caja margintop10">

      <div class="content">
        <h1 class="black">Nuestros<br> <span class="naranjaBig">Clientes</span></h1>
      </div>

    </div>

    <div class="clientes">
      <a href="https://abmauri.es/es" target="_blank"><img class="cliente-logo" src="/img/abmauri.jpg" alt="logo cliente"></a>
      <img class="cliente-logo" src="/img/ambev.jpg" alt="logo cliente">
      <a href="https://calsa.com.ar/" target="_blank"><img class="cliente-logo" src="/img/calsa.jpg" alt="logo cliente"></a>
      <a href="https://ar.isadoraonline.com/" target="_blank"><img class="cliente-logo" src="/img/isadora.jpg" alt="logo cliente"></a>
      <a href="https://www.maersk.com/" target="_blank"><img class="cliente-logo" src="/img/maersk.jpg" alt="logo cliente"></a>
      <a href="https://www.gsk.com/" target="_blank"><img class="cliente-logo" src="/img/gsk.jpg" alt="logo cliente"></a>
      <a href="https://www.ibm.com/ar-es" target="_blank"><img class="cliente-logo" src="/img/ibm.jpg" alt="logo cliente"></a>
      <a href="https://www.repsol.es/es/index.cshtml" target="_blank"><img class="cliente-logo" src="/img/repsol.jpg" alt="logo cliente"></a>
      <a href="https://ar.todomoda.com/" target="_blank"><img class="cliente-logo" src="/img/todomoda.jpg" alt="logo cliente"></a>
      <a href="https://www.santander.com.ar/banco/online/personas" target="_blank"><img class="cliente-logo" src="/img/santander.jpg" alt="logo cliente"></a>
      <a href="https://www.total-argentina.com.ar/" target="_blank"><img class="cliente-logo" src="/img/total.jpg" alt="logo cliente"></a>
      <a href="https://www.draeger.com/es_csa/Home" target="_blank"><img class="cliente-logo" src="/img/drager.jpg" alt="logo cliente"></a>
      <a href="https://www.schaeffler.com.ar/content.schaeffler.com.br/es/index.jsp" target="_blank"><img class="cliente-logo logo-peque" src="/img/schaeffler.jpg" alt="logo cliente"></a>
    </div>

  </section>

  <section class="form" id="contacto">

    <div class="caja margintop10">
      <div class="content">
        <h1 class="black small">Conectate<br> <span class="naranjaSmall">con nosotros</span></h1>
      </div>
    </div>

    <div class="form">
      <form class="" action="{{ url('/') }}" method="post">
        @csrf

        <div class="form-group">
          <label class="bold">Nombre completo *</label>
          <input type="text" class="form-control" name="name" placeholder="Ingrese su nombre" required>
        </div>

        <div class="form-group">
          <label class="bold">Email *</label>
          <input type="email" class="form-control" name="email" placeholder="Ingrese su correo" required>
        </div>

        <div class="form-group">
          <label class="bold">Consulta *</label>
          <textarea class="form-control" name="content" placeholder="Escriba su mensaje..." rows="3" required></textarea>
        </div>

        <div class="form-group">
          <button type="submit" class="btn btn-secondary" placeholder="Escribe tu mensaje">Enviar Consulta</button>
        </div>
        <small id="emailHelp" class="form-text text-muted">Los valores con un * son obligatorios.</small>

      </form>

    </div>

  </section>



@endsection('main')

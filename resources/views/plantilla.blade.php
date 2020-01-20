<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no">
    <!-- Bootstrap JS --><script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Bootstrap JS --><script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <!-- Bootstrap JS --><script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <!-- ionicons JS --><script type="module" src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons/ionicons.esm.js"></script>
    <!-- ionicons JS --><script nomodule="" src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons/ionicons.js"></script>
    <!-- Bootstrap CSS --><link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Google Fonts --><link href="https://fonts.googleapis.com/css?family=Playfair+Display|Roboto&display=swap" rel="stylesheet">
    <!-- Mi css Socialbar --><link rel="stylesheet" href="/css/socialbar.css">
    <!-- Icono del logo en pestana --><link rel="icon" type="image/png" href="/favicon.ico" />
    <title>@yield('titulo')</title>
    <link rel="stylesheet" href="/css/@yield('css').css">
  </head>
  <body>
    <header>
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="/"><img class="logo" src="/img/crossoverlogo.svg"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav">

            <li class="nav-item active">
              <a class="nav-link" href="#">Quienes Somos <span class="sr-only">(current)</span></a>
            </li>

            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Nuestros Programas
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Human to Human</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Go to Goals</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Project Team</a>
              </div>
            </li>


            <li class="nav-item">
              <a class="nav-link" href="/nosotros">Nuestro Equipo</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="/contact">Clientes</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="/ayuda">Contacto</a>
            </li>

          </ul>
        </div>
      </nav>
    </header>
    <main>
      @yield('main')
    </main>
    <footer>
      {{-- contenido --}}
    </footer>

    <div class="padre">

        <div class="socialBar">
          <ul>
            <li><a href="https://api.whatsapp.com/send?phone=5491158291281&text=Hola, estoy contactandolos desde el sitio web para recibir mas informacion" target="_blank" class="icon-whatsapp" data-toggle="tooltip" data-placement="right" data-original-title="Consulta por Whatsapp!"><ion-icon name="logo-whatsapp"></ion-icon></a></li>
            <li><a href="tel:+549-11-58291281" target="_blank"  class="icon-phone" data-toggle="tooltip" data-placement="right" data-original-title="Llamanos"><ion-icon name="call"></ion-icon></a></li>
            <li><a href="mailto:info@laresdecanning.com" class="icon-mail"><ion-icon name="mail"></ion-icon></a></li>
            <li><a href="http://www.facebook.com/laresdecanning" target="_blank" class="icon-facebook"><ion-icon name="logo-facebook"></ion-icon></a></li>
            <li><a href="http://www.Instagram.com/laresdecanning" target="_blank" class="icon-instagram"><ion-icon class="logo-instagram" name="logo-instagram"></ion-icon></a></li>
          </ul>
        </div>

      </div>
  </body>
</html>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/css/lightbox.min.css">
   <link rel="stylesheet" href="/css/paginaP.css">
   <link rel="stylesheet" href="/css/prueba.css">
  <title>Clínica Veterinaria</title>
</head>
<body>
  <header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container">
        <img src="/imagenes/logo_antuansito.png" alt="Logo de la clinica Vet">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="justify-content-end mx-4">
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ml-auto">
          @if(auth()->user())
            <li class="nav-item">
              @include('clinica.sesionLogout')
            </li>
          @else
            <li class="nav-item">
            <a class="nav-link" href="/login">Iniciar sesión</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/clinica">Registro</a>
            </li>
              @endif
          </ul>

        </div>
        </div>
        </div>
        <p class='text-success'><strong>
            @if(session('status'))
            {{session('status')}}
            @endif
    </nav>
  </header>

    @if(!auth()->user())
        <div id="overlay">
        <img src="imagenes/huella.png" alt="Huella de perro">
        <div id="loading-dots"><strong>...</strong></div>
        </div>
    @endif


  @if(auth()->user())
  <main>
    <div class="imagenFondo container py-4">
    <div class="row">
      <div class="col-md-6 my-4">
        <h3 class="mx-2 tituloUser">Hola {{ Auth::user()->name }},</h3><h3 class="mx-2 tituloUser">¿Qué necesitas? </h3>
      </div>
      <div class="col-md-3 my-4">
      </div>
      @if(Auth::user()->name==='administradores')
      <div class="col-md-3 my-4">
        <div class="row justify-content-center border border-primary rounded-pill bg-opacity-25 mx-2 my-4">
        <a class="enlace text-center" href="/cliente">Listado clientes</a>
        </div>
        <div class="row justify-content-center border border-primary rounded-pill bg-opacity-25 mx-2 my-4">
        <a class="enlace text-center" href="/citas">Listado Citas</a>
      </div>
      <div class="row justify-content-center border border-primary rounded-pill bg-opacity-25 mx-2 my-4">
        <a class="enlace text-center" href="/animal">Listado Animal</a>
      </div>
      </div>
      @else
      <div class="col-md-3 my-4">
      <div class="row justify-content-center border border-primary rounded-pill bg-opacity-25 mx-4 my-4">
        <a class="enlace text-center" href="/dias">Pedir cita</a>
        </div>
        <div class="row justify-content-center border border-primary rounded-pill bg-opacity-25 mx-4 my-4">
        <a class="enlace text-center" href="/verCita">Ver cita</a>
      </div>
      </div>
      @endif
    </div>
  </div>
  </main>

    <div class="container py-4 bg-dark">
    <div class="row">
        <div class="bg-white col-md-4 my-4 mx-4 text-center">
            <p>Horacion atencion al cliente: L-V 10:00 - 14:00</p>
            <p>telefono:956765432</p>
            <a type="button" class="my-2 btn btn-primary mx-2 mt2-4 text-center" href="/contacto">Enviános un mensaje</a>
        </div>
        <div class="col-md-2">
        </div>
        <div class="col-md-4">
            <h3 class="tituloUser2 text-white">¿Necesitas ayuda?</h3><h3 class="tituloUser2 text-white">Contáctanos</h3>
        </div>
    </div>
    </div>

  @else
  <main>
    <div class="container py-4">
    <div class="row">
        <div class="col-md-12 my-4">
            <h2 class="text-center">Bienvenidos a MiVet</h2>
        </div>
    </div>
    <div class="row">
        <div class="col-4 my-4">
        <a href="/imagenes/foto_2_antuan.png" data-lightbox="gallery"><img src="/imagenes/foto_2_antuan.png" class="img-fluid aspect-ratio custom-img" alt="Imagen 1"></a>
                <h3>Ambiente cálido</h3>
                <p class="text-muted">Trataremos a tu mascota como si fuera la nuestra.</p>
        </div>
        <div class="col-4 my-4">
            <a href="/imagenes/foto_3_antuan.png" data-lightbox="gallery"><img src="/imagenes/foto_3_antuan.png" class="img-fluid aspect-ratio custom-img" alt="Imagen 1"></a>
                <h3>Mejor atención</h3>
                <p class="text-muted">Atendemos todos tipos de casos con una gran variedad de diagnósticos.</p>
        </div>
            <div class="col-4 my-4">
                <a href="/imagenes/foto_1_antuan.png" data-lightbox="gallery"><img src="/imagenes/foto_1_antuan.png" class="img-fluid aspect-ratio custom-img" alt="Imagen 1"/></a>
                    <h3>Profesionales</h3>
                    <p class="text-muted">Contamos con una plantilla de profesionales dentro del sector veterinario.</p>
        </div>
    </div>
    <div class="row my-4">
    </div>
    <div class="row my-4">
    </div>
    </div>
  </main>


  <div class="container my-2">
    <div class="row my-4">
        <div class="col-md-12 my-4">
            <h2 class="text-center">Servicios</h2>
        </div>
    <div class="row my-4 justify-content-center">
        <div class="col-3">
            <figure>
                <img src="/imagenes/pexels-tima-miroshnichenko-6235233.jpg" alt="diagnostico" title="photo 1">
                <figcaption>
                <div class="caption-title">Diagnóstico por imagen:</div>
                <div class="caption-full">Contamos con Rayos X, ecografía, TAC y resonancia magnética.</div>
                </figcaption>
            </figure>
        </div>
        <div class="col-3">
            <figure>
                <img src="/imagenes/pexels-pranidchakan-boonrom-1350591.jpg"alt="Nutricion" title="photo 2">
                <figcaption>
                <div class="caption-title">Nutrición de tu mascota:</div>
                <div class="caption-full">Te informaremos sobre las necesidades de tu mascota para que su salud mejore.</div>
                </figcaption>
            </figure>
        </div>
        <div class="col-3">
            <figure>
                <img src="/imagenes/pexels-tima-miroshnichenko-6234983.jpg" alt="Laboratorio" title="photo 3">
                <figcaption>
                <div class="caption-title">Laboratorio propio:</div>
                <div class="caption-full">Tenemos un laboratorio interno donde poder analizar y diagnosticar más rápido las muestras.</div>
                </figcaption>
            </figure>
        </div>
    </div>
    </div>
</div>
<script src="/js/figureImagenes.js"></script>


    <div class="container my-2">
    <div class="row my-4">
    <div class="row my-4">
        <div class="col-md-6 my-4">
            <h2>Horario de atención</h2>
            <p class="text-muted">Nuestra clínica veterinaria está abierta de lunes a viernes, con el siguiente horario de atención de consultas:</p>
                <ul class="justify-content-center">
                    <strong class=" border-bottom">De Lunes a viernes:</strong>
                    <li class="text-muted">Mañanas: 10:00 - 14:00</li>
                    <li class="text-muted">Tardes: 16:00 - 20:00</li>
                </ul>
            <p class="text-muted">Estamos disponibles para atender las necesidades de sus mascotas durante estos horarios. Si tiene alguna pregunta o necesita programar una cita, no dude en contactarnos.</p>
        </div>
        <div class="col-md-6 my-4">
            <a href="/imagenes/pet.jpg" data-lightbox="gallery"><img src="/imagenes/pet.jpg" class="img-fluid aspect-ratio custom-img" alt="Imagen 1"></a>
        </div>
    </div>
    </div>
    </div>

    @endif



  <footer class="bg-dark text-white">
    <div class="container py-4 mt-4">
      <div class="row">
        <div class="col-md-6">
          <h5>Datos de la empresa</h5>
          <p>Nombre de la clínica veterinaria</p>
          <p>Dirección de la clínica</p>
          <p>Teléfono de contacto</p>
        </div>
        <div class="col-md-6">
          <h5>Redes sociales</h5>
          <ul class="list-unstyled d-flex">
          <li><a href="#"><i class="fa fa-facebook-f mx-2"></i></a></li>
          <li><a href="#"><i class="fa fa-twitter mx-2"></i></a></li>
          <li><a href="#"><i class="fa fa-instagram mx-2"></i></a></li>
          </ul>
        </div>
      </div>
    </div>
  </footer>

  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/js/lightbox.min.js"></script>

  <script src="/js/menuMovil.js"></script>

</body>
</html>

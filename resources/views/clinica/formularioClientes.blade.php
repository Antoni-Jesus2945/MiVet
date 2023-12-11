<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/diseñoFormulario.css">
    <title>Formulario de Cliente</title>
</head>
<body class="degradado">

<div class="container">
    <h1 class="text-center mt-5">Registro cliente:</h1>

    <form action="{{route('registro.store')}}" method="POST" class="row mt-5 needs-validation justify-content-center" novalidate>
        @csrf <!-- Agrega el token CSRF para protección -->

        <div class="card my-4">
        <div class="card-header">
        <h4 class="h2 text-center mb-3">Datos Cliente:</h4>
        </div>
        <div class="card-body">
        <div class=" row justify-content-center">
        <div class="col-4 form-floating mb-4">
            <input type="text" class="form-control" placeholder="Antonio" id="nombre" name="nombre" required>
            <label for="nombre" class="form-label">Nombre:</label>
            <div class="invalid-feedback"> Escriba su nombre</div>
        </div>

        <div class="col-4 form-floating mb-4">
        <input type="text" class="form-control" placeholder="La Rubia" id="apellido" name="apellidos" required/>
        <label for="apellido" class="form-label">Apellidos:</label>
        <div class="invalid-feedback"> Escriba su apellido</div>
      </div>
        </div>

    <div class=" row justify-content-center">
        <div class="col-4 form-floating mb-4 ">
        <input type="text" class="form-control" placeholder="77557079J" id="dni" name="dni" required/>
        <label for="dni" class="form-label">Dni:</label>
        <div id="mensajedni" class="invalid-feedback"> Escriba su dni</div>
      </div>

        <div class="col-4 form-floating mb-4">
            <input type="tel" class="form-control" placeholder="684253323" id="telefono" name="telefono" required>
            <label for="telefono" class="form-label">Teléfono:</label>
            <div id="mensajetel" class="invalid-feedback"> Escriba su telefono</div>
        </div>
        </div>

    <div class=" row justify-content-center">
        <div class="col-8 form-floating mb-4 ">
        <input type="text" class="form-control" placeholder="calle" id="domi" name="domicilio" required/>
        <label for="domi" class="form-label">Domicilio:</label>
      </div>
    </div>

    <div class=" row justify-content-center">
     <div class="col-8">
      <div class="mb-4 input-group">
        <span class="input-group-text">correo</span>
        <input type="text" class="form-control" placeholder="escribe tu gmail" id="email" name="correo" required/>
         <div id="mensajecorreo" class="invalid-feedback"> Escriba su correo</div>
      </div>
     </div>
    </div>
</div>
</div>

    <div class="card my-4">
        <div class="card-header">
            <h4 class=" h2 text-center mb-3">Datos de la mascota:</h4>
        </div>
        <div class="card-body">

        <div class="row justify-content-center">
            <div class="col-4 form-floating mb-4">
                <input type="text" class="form-control" placeholder="Max" id="nombreA" name="NombreA" required>
                <label for="nombreA" class="form-label">Nombre del animal:</label>
                <div class="invalid-feedback"> Escriba su nombre</div>
            </div>

            <div class="col-4 form-floating mb-4">
                <input type="text" class="form-control" placeholder="12356787" id="chip" name="Nºchip" required>
                <label for="chip" class="form-label">Nº chip:</label>
                <div  id="mensajechip" class="invalid-feedback"> Escriba su chip</div>
            </div>
        </div>



            <div class="row justify-content-center">
                <div class="col-4 form-floating mb-4">
                    <select class="form-control" id="animal" name="tipoA">
                        <option value="perro">Perro</option>
                        <option value="gato">Gato</option>
                        <option value="exoticos">Exóticos</option>
                    </select>
                    <label for="animal">Selecciona un animal:</label>
            </div>

            <div class="col-4 form-floating mb-4">
                <input type="text" class="form-control" placeholder="masting" id="raza" name="raza" required>
                <label for="raza" class="form-label">Raza:</label>
                <div class="invalid-feedback"> Escriba su raza</div>
            </div>
        </div>

        <div class="row justify-content-center">
        <div class="col-3 form-floating mb-4">
            <input type="text" class="form-control" placeholder="30" id="peso" name="peso" required>
            <label for="peso" class="form-label">Peso:</label>
            <div id="mesnajepeso" class="invalid-feedback"> Escriba su peso</div>
        </div>

        <div class="col-3 form-floating mb-4">
            <input type="text" class="form-control" placeholder="7" id="edad" name="edad" required>
            <label for="edad" class="form-label">Edad:</label>
            <div class="invalid-feedback"> Escriba su edad</div>
        </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-2">
                <label class="mx-3 form-check-label">sexo</label>
            </div>
            <div class="mx-3 col-1">
                <label class="form-check-label">Esterilizado</label>
            </div>
        </div>

        <div class="row justify-content-center">
        <div class="col-1">
            <input type="radio" class="form-check-input" name="sexo" value="H" required>
            <label class="form-check-label" for="H">H</label>
        </div>
        <div class="col-1">
            <input type="radio" class="form-check-input" name="sexo" value="M" required>
            <label class="form-check-label" for="M">M</label>
        </div>
        <div class="col-1">
            <input type="radio" class="form-check-input" name="esterilizado" value="Si" required>
            <label class="form-check-label" for="Si">Si</label>
        </div>
        <div class="col-1">
            <input type="radio" class="form-check-input" name="esterilizado" value="No" required>
            <label class="form-check-label" for="No">No</label>
        </div>
        </div>




        <div class="text-center mb-4 my-4">
        <button type="submit" class="btn btn-outline-primary" id="boton">Registrar</button>
        </div>
        </div>
        </div>

    </form>
</div>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script src="/js/validacion.js"></script>
<script src="/js/ojo.js"></script>
</body>

</html>

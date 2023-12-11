<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href='https://use.fontawesome.com/releases/v5.7.2/css/all.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/diseñoFormulario.css">
    <title>Formulario para contacto</title>
</head>
<body class="degradado">

<div class="container">
    <h1 class="text-center mt-5">Contactanos:</h1>

   {{-- <form action="{{route('registro.store')}}" method="POST" class="row mt-5 needs-validation justify-content-center" novalidate>
        @csrf <!-- Agrega el token CSRF para protección -->
--}}
        <div class="row justify-content-end">
            <div class="card my-4 col-4">
                <div class="card-header">
                <h4 class=" text-center mb-3"></h4>
                </div>
                <div class="card-body">
                    <p>Deje su mensaje , le atenderemos lo antes posible a su consulta.</p>
                    <p><i class="fas fa-phone mx-2"></i>956765432</p>
                    <p><i class="fas fa-envelope mx-2"> admin@clinica.org</i></p>
            </div>
            </div>
            <div class="col-1">
            </div>
            <div class="card my-4 col-6">
            <div class="card-header">
            <h4 class=" text-center mb-3">Datos Consulta</h4>
            </div>
            <div class="card-body">
            <div class=" row justify-content-end">
            <div class="col-12 form-floating mb-4">
                <input type="text" class="form-control" placeholder="Antonio" id="nombre" name="nombre" required>
                <label for="nombre" class="form-label">Nombre:</label>
                <div class="invalid-feedback"> Escriba su nombre</div>
            </div>
            </div>

        <div class=" row justify-content-end">
            <div class="col-12">
                <div class="mb-4 input-group">
                <span class="input-group-text">correo</span>
                <input type="text" class="form-control" placeholder="escribe tu gmail" id="email" name="correo" required/>
                    <div id="mensajecorreo" class="invalid-feedback"> Escriba su correo</div>
                </div>
            </div>
        </div>
        <div class=" row justify-content-end">
            <div class="col-12 form-floating mb-4">
                <textarea class="form-control" placeholder="mensaje" id="mensaje" name="mensaje" required></textarea>
                <label for="nombre" class="form-label">Ingresa tu mensaje</label>
                <div class="invalid-feedback"> Escriba un mensaje</div>
            </div>
        </div>
        </div>
    </div>
    </div>

<div class="text-center mb-4 my-4">
    <button type="submit" class="btn btn-outline-success" id="boton">Enviar</button>
    </div>
    </div>
    </div>

</form>
</div>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script src="/js/validacion.js"></script>
</body>

</html>

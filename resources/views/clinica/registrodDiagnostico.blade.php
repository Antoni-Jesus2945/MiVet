
<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/diseñoFormulario.css">
    <title>Diagnósticos</title>
</head>
<body class="degradado">

<div class="container">
    <h1 class="text-center mt-5">Nuevo Diagnóstico:</h1>
    <form action="{{route('Diagnostico.store')}}" method="POST" class="row mt-5 needs-validation justify-content-center" novalidate>
        @csrf <!-- Agrega el token CSRF para protección -->
       <div class="d-none">
        {{$diagnostico = $diagnosticos->first()}};
       </div>
       <input type="hidden" name="id_animal" value="{{$diagnostico->id_animal}}">
       <input type="hidden" name="fecha" value="{{ now() }}">

        <div class="card my-4">
        <div class="card-header">
        <h4 class="h2 text-center mb-3">Diagnóstico:</h4>
        </div>
        <div class="card-body">
        <div class=" row justify-content-center">
        <div class="col-4 form-floating mb-4">
            <input type="text" class="form-control" placeholder="gastroenteritis" id="patologias" name="patologias" required>
            <label for="patologias" class="form-label">patologías:</label>
            <div class="invalid-feedback"> Escriba la patología</div>
        </div>
        </div>

        <div class=" row justify-content-center">
        <div class="col-4 form-floating mb-4">
        <textarea class="form-control" placeholder="informe" id="informe" name="informe" required>...</textarea>
        <label for="informe" class="form-label">informe:</label>
        <div class="invalid-feedback"> Escriba el informe del diagnóstico</div>
      </div>
        </div>
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

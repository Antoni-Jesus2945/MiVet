<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Formulario de Cliente</title>
</head>
<body class="bg-info bg-opacity-25">



<div class="container">
    <div class="my-3 mx-2">
        @include('clinica.sesionLogout')
    </div>
    <h1 class="text-center mt-5">Pedir Cita:</h1>

    <form action="{{route('citas.store')}}" method="POST" class="row mt-5">
         @csrf
        <div class=" row justify-content-center border border-dark rounded-pill bg-success bg-opacity-25">
            <div class="col-3 mb-4 text-center">
                <label for="semana" class="form-label">dia de la semana:</label>
                <select class="form-control  text-center" id="semana" name="semana">
                    @foreach($dia as $dias)
                    <option>{{$dias->dias}}</option>
                    @endforeach
                </select>
            </div>

            <div class="col-3 mb-4 text-center">
                <label for="horas" class="form-label">Hora de la cita:</label>
                <select class="form-control  text-center" id="horas" name="horas">
                    @foreach($hora as $horas)
                    <option>{{$horas->horas}}</option>
                    @endforeach
                </select>
            </div>

            <div class="col-3 mb-4 text-center">
                <label for="nombre" class="form-label">Tu nombre Cliente:</label>
                <input type='text' class='form-control text-center' id='nombre' name="nombre" value='{{ Auth::user()->name }}' readonly />
            </div>

            <div class=" col-1 mb-4">
            <button type="submit" class="btn btn-outline-primary mt-4" id="boton">Enviar</button>
            </div>
            </div>
    </form>
            @include('clinica.Inicio')
            <p class='text-danger text-center'><strong>
            @if(session('error'))
            {{session('error')}}
            @endif
            </strong></p>

    </div>


<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>

</html>

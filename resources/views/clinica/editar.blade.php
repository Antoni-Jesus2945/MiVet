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
    <h1 class="text-center mt-5">Editar Cita:</h1>

    <form action="{{route('citas.update',$cita->id)}}" method="POST" class="row mt-5">
         @csrf
         @method('PUT')
        <div class=" row justify-content-center border border-dark rounded-pill bg-success bg-opacity-25">
            <div class="col-3 mb-4 text-center">
                <label for="semana" class="form-label">dia de la semana:</label>
                <select class="form-control  text-center" id="semana" name="semana">
                <option value="{{$cita->dias}}" selected>{{$cita->dias}}</option>
                <option value="Lunes">Lunes</option>
                <option value="martes">Martes</option>
                <option value="miercoles">Miércoles</option>
                <option value="jueves">Jueves</option>
                <option value="viernes">Viernes</option>
                </select>
            </div>
            
            <div class="col-3 mb-4 text-center">
                <label for="horas" class="form-label">Hora de la cita:</label>
                <select class="form-control  text-center" id="horas" name="horas">
                    <option value="{{date('H:i', strtotime($cita->horas))}}" selected>{{date('H:i', strtotime($cita->horas))}}</option>
                    <option value="10:00">10:00</option>
                    <option value="10:30">10:30</option>
                    <option value="11:00">11:00</option>
                    <option value="11:30">11:30</option>
                    <option value="12:00">12:00</option>
                    <option value="12:30">12:30</option>
                    <option value="13:00">13:00</option>
                    <option value="13:30">13:30</option>
                    <option value="14:00">14:00</option>
                    <option value="16:00">16:00</option>
                    <option value="16:30">16:30</option>
                    <option value="17:00">17:00</option>
                    <option value="17:30">17:30</option>
                    <option value="18:00">18:00</option>
                    <option value="18:30">18:30</option>
                    <option value="19:00">19:00</option>
                    <option value="19:30">19:30</option>
                    <option value="20:00">20:00</option>
                </select>
            </div>
            
            <div class="col-3 mb-4 text-center">
                <label for="nombre" class="form-label">Tu nombre Cliente:</label>
                <input type='text' class='form-control text-center' id='nombre' name="nombre" value='{{$cita->nombreA}}' readonly />
            </div>
            
            <div class=" col-1 mb-4">
            <button type="submit" class="btn btn-outline-primary mt-4" id="boton">Enviar</button>
            </div>
            </div>
    </form>
    </div>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>

</html>

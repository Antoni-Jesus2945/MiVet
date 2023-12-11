<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/diseñoFormulario.css">
    <title>Listado de las citas</title>
</head>
<body class="fondoMasClaro">
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<div class="container">
    <h4 class="text-center mt-5">Listado de citas:</h4>
    <div class="row">
        <div class="col-12">
            <div class="table-responsive">
                <table class="table table-bordered table-striped table-info">
                    <thead class="border border-dark bg-white">
                        <tr>
                            <th>Dia</th>
                            <th>Hora de la cita</th>
                            <th>Nombre del Cliente </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($cita as $cita)
                        <tr class="border border-dark">
                            <td>{{$cita->dias}}
                            </td>
                            <td>{{date('H:i', strtotime($cita->horas))}}
                            </td>
                            <td>{{$cita->nombreA}}
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@include('clinica.Inicio')
</html>

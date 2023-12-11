<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href='https://use.fontawesome.com/releases/v5.7.2/css/all.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Listado de las citas</title>
</head>
<body>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<div class="container">
    <h4 class="text-center mt-5">Listado de citas:</h4>
    <div class="row">
        <div class="col-12">
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Dia</th>
                            <th>Hora de la cita</th>
                            <th>Nombre del Cliente<i id="triangulo" class="mx-2 fas fa-angle-right"></i> </th>
                            <th>Opciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($citas as $cita)
                        <tr>
                            <td>{{$cita->dias}}
                            </td>
                            <td>{{date('H:i', strtotime($cita->horas))}}
                            </td>
                            <td class="citas-field" data-cita-id="{{ $cita->nombreA }}">{{$cita->nombreA}}</td>
                            <td><a href="{{route('citas.edit',$cita->id)}}" class=' text-dark btn btn-outline-info btn-sm'>Editar</a>
                                | <button type="button" class="text-dark btn btn-outline-danger btn-sm" data-bs-toggle="modal" data-bs-target="#delete-{{$cita->id}}">Eliminar</button>
                            </td>
                        </tr>
                        @include('clinica.delete')
                        @endforeach
                    </tbody>
                </table>
                <script src="/js/cuadroModal.js"></script>
                <div id="cliente-list" class="list-group"></div>
            </div>
        </div>
    </div>
    @include('clinica.Inicio')
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>

</html>

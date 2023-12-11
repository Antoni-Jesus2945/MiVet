<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Listado de los Clientes</title>
</head>
<body>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<div class="container">
    <h4 class="text-center mt-5">Listado de Clientes:</h4>
    <div class="row">
        <div class="col-12">
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Apellidos</th>
                            <th>Dni</th>
                            <th>Telefono</th>
                            <th>Domicilio</th>
                            <th>Correo</th>
                            <th>Opciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($clientes as $clientes)
                        <tr>
                            <td>{{$clientes->nombre}}
                            </td>
                            <td>{{$clientes->apellidos}}
                            </td>
                            <td>{{$clientes->dni}}
                            </td>
                            <td>{{$clientes->telefono}}
                            </td>
                            <td>{{$clientes->domicilio}}
                            </td>
                            <td>{{$clientes->correo}}
                            </td>
                            <td>
                                <button type="button" class="text-dark btn btn-outline-danger btn-sm" data-bs-toggle="modal" data-bs-target="#delete-{{$clientes->id}}">Eliminar</button>
                            </td>
                        </tr>
                        @include('clinica.deleteCliente')
                        @endforeach
                    </tbody>
                </table>
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

<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Listado de los Diagnosticos</title>
</head>
<body>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<div class="container">
    <h4 class="text-center mt-5">Listado de Diagnosticos:</h4>
    <div class="row">
        <div class="col-12">
            <div class="accordion" id="accordionInforme">
                        @foreach($diagnosticos as $diagnosticos)
                        <div class="card mb-3">
                            <div class="card-header text-center">
                                <h2 class="card-title">INFORME</h2>
                                <p>Creación del informe: {{ $diagnosticos->fecha }}</p>
                            </div>
                            <div class="card-body">
                                    <div class="accordion-item">
                                        <p class="accordion-header" id="headingOne-{{$diagnosticos->id}}">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne-{{$diagnosticos->id}}" aria-expanded="true" aria-controls="collapseOne-{{$diagnosticos->id}}">
                                            Patologias:{{$diagnosticos->patologias}}
                                            </button>
                                        <div id="collapseOne-{{$diagnosticos->id}}" class="accordion-collapse collapse show" aria-labelledby="headingOne-{{$diagnosticos->id}}" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p>{{$diagnosticos->informe}}</p>
                                    </div>
                                    </div>
                                    </div>
                            </div>


                                <button type="button" class="text-center text-dark btn btn-outline-danger btn-sm" data-bs-toggle="modal" data-bs-target="#delete-{{$diagnosticos->id}}">Eliminar</button>
                        @include('clinica.deleteDiagnosticos')
                        </div>
                        @endforeach
                    </div>
                <div id="cliente-list" class="list-group"></div>
            </div>
        </div>
    </div>
    <div class="mb-4 text-center">
        <a href="/animal"><button type="submit" class="btn btn-dark mt-4" id="boton">Volver atras</button></a>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>

</html>

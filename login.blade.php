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
    <h1 class="text-center mt-5">Inicio de sesion:</h1>

    <form method="post" class="row mt-5 needs-validation justify-content-center" novalidate>
        @csrf <!-- Agrega el token CSRF para protección -->
        <h4 class="text-center mb-3">Login:</h4>
        
        <div class="row justify-content-center">
        <div class="col-4 form-floating mb-4">
            <input type="text" class="form-control" placeholder="antonio@gmail.com" id="email" name="email" required>
            <label for="email" class="form-label">email:</label>
            @error('email')
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        </div>    
            
        <div class="row justify-content-center">    
        <div class="col-4 form-floating mb-4">
            <input type="password" class="form-control" placeholder="password" id="password" name="password" required>
            <label for="paswword" class="form-label">contraseña</label>
            @error('password')
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>    
        </div>
        
        <div class="text-center mb-4">
        <button type="submit" class="btn btn-outline-primary" id="boton">Registrar</button>
        </div>
        
        
    </form>
    
    
</div>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>

</html>

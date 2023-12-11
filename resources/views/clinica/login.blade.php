<!DOCTYPE html>
    <head>
        <meta charset='utf-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1'>
        <title>Inicio de secion</title>
        <link href='https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css' rel='stylesheet'>
        <link href='https://use.fontawesome.com/releases/v5.7.2/css/all.css' rel='stylesheet'>
        <link href="/css/inicioSesion.css" rel="stylesheet">
        <script type='text/javascript' src='https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js'></script>
        <script type='text/javascript' src='https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js'></script>
    </head>
    <body>
        <div class="wrapper bg-white">
        <div class="text-center my-2"><img src="/imagenes/logo_antuansito.png" alt="Logo de la clinica Vet"></div>
        <div class="h4 text-muted text-center pt-2">Escribe tus credenciales para logearte</div>

        <form method="post" class="row pt-3 needs-validation" novalidate>
        @csrf <!-- Agrega el token CSRF para protección -->
            <div class="form-group py-2">
                <div class="input-field"> <span class="far fa-user p-2"></span> <input type="text" placeholder="correo electronico" required class="" id="email" name="email" required>
            </div>
            @error('email')
                <span class="text-danger">{{ $message }}</span>
            @enderror
            </div>
            <div class="form-group py-1 pb-2">
                <div class="input-field"> <span class="fas fa-lock p-2"></span> <input type="password" placeholder="contraseña es el dni" required class="" id="password" name="password">
                        <span id="ojo" class="mx-2 far fa-eye-slash"></span>
                </div>
            @error('password')
                <span class="text-danger">{{ $message }}</span>
            @enderror
            </div>
            <div class="d-flex align-items-start">
                <div class="remember"> <label class="option text-muted"> Remember me <input type="radio" name="radio"> <span class="checkmark"></span> </label> </div>
            <div class="ml-auto"> <a href="#" id="forgot">Forgot Password?</a> </div>
            </div> <button class="btn btn-block text-center my-3" id="boton">Log in</button>
            <div class="text-center pt-3 text-muted">¿No eres miembro? <a href="/clinica">Registrate</a></div>
    </form>
    <script src="/js/ojo.js"></script>
</div>
    </body>
</html>

<div class="d-flex justify-content-end ">
            {{--<p class="mx-2 mt-2">Bienvenido!!<strong>{{ Auth::user()->name }}</strong></p>--}}
            {{--cambiar el boton por un desplegable o algo asin--}}
            <button type="submit" class="btn miPerfil btn-primary">
                <img src="/imagenes/mi-perfil.png" alt="logo perfil usuario"/>Mi perfil
            </button>
            <form action="/logout" method="post">
            @csrf
            <button type="submit" class="btn btn-dark mx-2 mt2-4" id="boton">logout
               <img class="mx-1" src="/imagenes/cerrarSesion.png" alt="salir">
            </button>
            </form>

    </div>

    {{--Nota para los if puedo especificar rutas especificas , importante que los blade oportunos cojan los estilos del css
        por ejemplo --}}

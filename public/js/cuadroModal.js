
//cuando clikeamos hacemos un evento
const triangulo =document.getElementById("triangulo");
    $(document).ready(function() {
        $('.citas-field').click(function() {
            var citaId = $(this).data('cita-id');
            var $list = $('#cliente-list');

            let clase=triangulo.classList;
            // Si el elemento está oculto, lo mostramos
                if ($list.hasClass('d-none')) {
                    clase.remove("fa-angle-right");
                    clase.add("fa-angle-down");
                $list.removeClass('d-none');
                } else {
                // Si el elemento está visible, lo ocultamos
                clase.remove("fa-angle-down");
                clase.add("fa-angle-right");
                $list.addClass('d-none');
                }

            // Realizar la petición AJAX al servidor
            $.ajax({
                url: '/citas/' + citaId + '/clientes', // Ruta que manejará la petición en el controlador
                method: 'GET',//el metodo que manejara las peticiones en este caso es get
                success: function(response) {
                    $list.empty();

                    if (response.length > 0) {//hacemos un bucle for y terminara cuando no tenga mas Response
                        for (var i = 0; i < response.length; i++) {
                            var cliente = response[i];//guardamos el array que estamos recorriendo en una variable y despues sacamos cada uno de los elmentos
                            //de la tabla de clientes
                            var listItem = '<li class="list-group-item  bg-success bg-opacity-25 mb-2">';
                            listItem += '<strong>Nombre:</strong> ' + cliente.nombre + '<br>';
                            listItem += '<strong>Apellidos:</strong> ' + cliente.apellidos + '<br>';
                            listItem += '<strong>Dni:</strong> ' + cliente.dni + '<br>';
                            listItem += '<strong>Telefono:</strong> ' + cliente.telefono + '<br>';
                            listItem += '<strong>Domicilio:</strong> ' + cliente.domicilio + '<br>';
                            listItem += '<strong>Correo:</strong> ' + cliente.correo + '<br>';
                            listItem += '</li>';

                            $list.append(listItem);
                        }
                    } else {//si no mostramos esto por pantalla
                        $list.append('<li class="list-group-item">No hay clientes asociados a esta cita.</li>');
                    }
                },
                error: function(xhr, status, error) {
                    // Manejar errores de la petición
                    console.log(xhr.responseText);
                }
            });
        });
    });



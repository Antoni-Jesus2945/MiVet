
  // Validación de formularios con Bootstrap
  (function() {
    'use strict';
    window.addEventListener('load', function() {
      // cuando carguemos la página hacemos una funcion para todos los elementos con clase needs-validations en el html
      var forms = document.getElementsByClassName('needs-validation');
      // Itera sobre ellos y previene su envío si no son válidos
      var validation = Array.prototype.filter.call(forms, function(form) {
        form.addEventListener('submit', function(event) {
          if (form.checkValidity() === false) {
            event.preventDefault();
            event.stopPropagation();
          }
          form.classList.add('was-validated');
        }, false);
      });
    }, false);
  })();


  //validacion del dni si no tiene el formato no dejara al usuario enviar
  document.getElementById("dni").addEventListener("input", validarDNI);
//hago un evento del input con jna funcion llamada validarDni
  function validarDNI() {
    //hago variables para coger el dni y este lo convierto en mayusculas
    var dniInput = document.getElementById("dni");
    var dni = dniInput.value.toUpperCase();
    //la letra sera el ultimo elemento del lo que ponga el usuario como dni
    var letra = dni.charAt(dni.length-1);
   //hago la varible numeros que cogera toda la cadena de caracteres menos el ultimo
    var numeros = dni.substring(0, dni.length-1);
//si la longitud de numeros es disntinto de 8 sacamos que no es valido y erro, hacemos uso de un regex para la validacion y el.test
    if (!(/^\d+$/.test(numeros)) || numeros.length != 8) {
      //añadimos de que es invalido en la clase
      dniInput.classList.add("is-invalid");
      //cambiamos el mensaje de su div por otro esto es opcional yo lo he echo porque queda mejor mas el usuario saber el tipo de error que es distinto a no escribir nada
      document.getElementById("mensajedni").innerHTML="Por favor ingrese un DNI válido";
      //esto nos dara un error si tiene algun dato incorrecto mientras tenga algo rellenado el checkvalidaty sera de que no es valido si esta esto vacio lo intepreta como que es valido
      dniInput.setCustomValidity("error");
      return;
    }

    var letras = "TRWAGMYFPDXBNJZSQVHLCKE";
    //lo mismo para la letra que sea uno de los elementos,hacemos una variablr que sera los numeros%23 esto nos dara el indice de la letra que le corresponde segun el nunero de letras que hay para el dni
    var indiceLetra = numeros % 23;
    var letraCalculada = letras.charAt(indiceLetra);
    //si esto es incorrecto hacemos lo mismo que con los numeros
    if (letra != letraCalculada) {
      dniInput.classList.add("is-invalid");
      document.getElementById("mensajedni").innerHTML="Por favor ingrese un DNI válido";
      dniInput.setCustomValidity("error");
      //si no hay error quitamos el is-invalid, y dejamos los mensajes en blanco dejando un tic verde en el input una vez qur esta validado de forma correcta el dni
    } else {
      dniInput.classList.remove("is-invalid");
  document.getElementById("mensajedni").innerHTML="";
  dniInput.setCustomValidity("");
    }
  }

  //validacion del telefono
    document.getElementById("telefono").addEventListener("input", validartel);

  function validartel(){
      var telInput = document.getElementById('telefono');
      var tel= telInput.value;

      if( !(/^\d{9}$/.test(tel))){
          telInput.classList.add("is-invalid");
          document.getElementById("mensajetel").innerHTML="Por favor ingrese un numero de telefono valido";
          telInput.setCustomValidity("error");
    } else {
      telInput.classList.remove("is-invalid");
      document.getElementById("mensajetel").innerHTML="";
      telInput.setCustomValidity("");
    }

  }


  //hacemos lo mismo para el correo para que valide
  document.getElementById("email").addEventListener("input", validarCorreo);

  function validarCorreo() {
    var correoInput = document.getElementById("email");
    var correo = correoInput.value;
//expresion regex si es incorrecto q esta expresion mostramos un error cuando sea correcto quitamos el is-invalid
    if (!(/^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/.test(correo))) {
      correoInput.classList.add("is-invalid");
      document.getElementById("mensajecorreo").innerHTML="Por favor ingrese una dirección de correo electrónico válida";
      correoInput.setCustomValidity("error");
    } else {
      correoInput.classList.remove("is-invalid");
      document.getElementById("mensajecorreo").innerHTML="";
      correoInput.setCustomValidity("");
    }
  }


//validacion numero chip
//El primer bloque, de dos dígitos, identifica el país de origen del microchip.
//En España, este bloque siempre es 04.El segundo bloque, de seis dígitos, identifica el fabricante del microchip.
//El tercer bloque, de siete dígitos, identifica al animal de forma única.
document.getElementById("chip").addEventListener("input", validarchip);

  function validarchip(){
      var chipNInput = document.getElementById('chip');
      var chip= chipNInput.value;

      const expresionRegular = new RegExp(/^(04)([0-9]{6})([0-9]{7})$/);

      if(!expresionRegular.test(chip)){
          chipNInput.classList.add("is-invalid");
          document.getElementById("mensajechip").innerHTML="Por favor ingrese un numero de chip valido";
          chipNInput.setCustomValidity("error");
    } else {
      chipNInput.classList.remove("is-invalid");
      document.getElementById("mensajechip").innerHTML="";
      chipNInput.setCustomValidity("");
    }

  }



  //la validacion para el peso del perro
  document.getElementById("peso").addEventListener("input", validarpeso);

  function validarpeso(){
      var pesoInput = document.getElementById('peso');
      var peso= pesoInput.value;

      if( !(/^\d{2}$/.test(peso))){
          pesoInput.classList.add("is-invalid");
          document.getElementById("mesnajepeso").innerHTML="solo puede ser un valor de 2 digitos";
          pesoInput.setCustomValidity("error");
    } else {
      pesoInput.classList.remove("is-invalid");
      document.getElementById("mesnajepeso").innerHTML="";
      pesoInput.setCustomValidity("");
    }

  }



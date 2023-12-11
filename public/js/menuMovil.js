


// Script para habilitar el menú desplegable en la versión móvil
    var navCollapse = document.querySelector('.navbar-collapse');
    var navToggle = document.querySelector('.navbar-toggler');

    navToggle.addEventListener('click', function () {
        if (navCollapse.classList.contains('show')) {
            navCollapse.classList.remove('show');
      } else {
            navCollapse.classList.add('show');
      }
    });

//para activar la animacion creada en css y comentada en el mismo 
    window.addEventListener('load', function() {
        var overlay = document.getElementById('overlay');
        var dots = document.getElementById('loading-dots');
        var dogImage = document.querySelector('#overlay img');

        setTimeout(function() {
            overlay.style.display = 'none';
        }, 10000);

        setTimeout(function() {
            dots.style.display = 'none';
            dogImage.style.display = 'none';
            }, 10000);
    });

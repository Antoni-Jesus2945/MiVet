


const ojo =document.getElementById("ojo");
const inputP= document.getElementById("password");

ojo.addEventListener("click", function(){

    let clase = ojo.classList;
    if(clase.contains("fa-eye")){
    // Cambiar el tipo de entrada a texto
    clase.remove("fa-eye");
    clase.add("fa-eye-slash");
    inputP.type ="password";
    // Cambiar el icono del botón
    }else if(clase.contains("fa-eye-slash")){
    clase.remove("fa-eye-slash");
    clase.add("fa-eye");
    inputP.type ="text";
    }
});



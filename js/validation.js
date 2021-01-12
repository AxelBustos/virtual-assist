'use strict'
window.addEventListener('load',function(){

    var formulario = document.querySelector("#formulario");

    const open = document.getElementById('abrir');
    const modal_container = document.getElementById('contenido_modal');
    const close = document.getElementById('cerrar');
    
    open.addEventListener('click', () => {
    modal_container.classList.add('show'); 
     
    });
    
    close.addEventListener('click', () => {
      modal_container.classList.remove('show');
    
    });

    formulario.addEventListener('submit',function(){

    
    var nombre = document.querySelector("#nombre").value;
    var email = document.querySelector("#email").value;
    var apellido = document.querySelector("#apellido").value;
    
    
    var telefono = parseInt(document.querySelector("#telefono").value);
    var puesto = document.querySelector("#puesto").value;

    if(nombre.trim() == null || nombre.trim().length==0){

        alert("El campo de nombre es obligatorio");
        return false;
    }

    if(apellido.trim() == null || apellido.trim().length==0){

        alert("El campo de apellido es obligatorio");
        return false;
    }

    if(email.trim() == null || email.trim().length==0){

        alert("El campo de correo electrónico es obligatorio");
        return false;
    }

    if(telefono== null || isNaN(telefono)){

        alert("El campo de telefono es obligatorio");
        return false;
    }

    if(puesto.trim() == null || puesto.trim().length==0){

        alert("Puesto de trabajo no definido");
        return false;
    }




});
});

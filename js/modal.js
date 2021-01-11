
window.addEventListener('load',function(){


    const open = document.getElementById('abrir');
    const modal_container = document.getElementById('contenido_modal');
    const close = document.getElementById('cerrar');
    
    open.addEventListener('click', () => {
    modal_container.classList.add('show'); 
     
    });
    
    close.addEventListener('click', () => {
      modal_container.classList.remove('show');
    
    });


    });
    







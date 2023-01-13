
 var Submit = document.getElementById('SubMasse');
 var Nombre = document.getElementById('txtnombre');
 var Usuario = document.getElementById('txtusuario');
 var Mensaje = document.getElementById('txtmensaje');
 var Asunto = document.getElementById('txtasunto');
 var Formulario=document.getElementById('form_soli');

Formulario.setAttribute("method", "dialog");
Submit.addEventListener("click", ()=>{
    if(Nombre.value.length == 0){
        alert("Rellena todos los campos");
        return false;
    }else if(Usuario.value.length == 0){
        alert("Rellena todos los campos");
        return false;
    }else if(Mensaje.value.length == 0 ){
        alert("Rellena todos los campos");
        return false;
    }else if(Asunto.value.length == 0 ){
        alert("Rellena todos los campos");
        return false;
    }else{
        $.ajax({
            type: "POST",
            url: "db-php/crudSolicitudesadmi.php",
            dataType: 'json',
            data:{
              nombre:Nombre.value,
              usuario:Usuario.value,
              mensaje:Mensaje.value,
              asunto:Asunto.value,
            },
            success:function(r){
              if (r == 1) {
                alert("Felicidades solicitud enviada");
                $('#form_soli')[0].reset();
                return false;
              } else{
                alert("¡Lo siento! no fue posible envia esta solicitud");
                return false;
            }}
        });
        return false;
    }


 });
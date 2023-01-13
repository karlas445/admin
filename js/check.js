function revisar(id){
    var IdMensaje = id
    if(confirm("Desea eliminar este mensaje")){
        $.ajax({
            type: "POST",
            url: "db-php/eliminarmensaje.php",
            dataType: 'json',
            data:{
              id:IdMensaje,
            },
            success:function(r){
              if (r == 1) {
                alert("Mensaje borrado");
                return false;
              } else{
                alert("Mensaje no borrado");
                return false;
            }}
        });
        return false;
    }
}
<?php 
ob_start();
      session_start();
      $salida="";
        $varSesion=$_SESSION["usuario"];
        if ($varSesion==''|| $varSesion==null) {
            header("location:index.php");
        }else{
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/jquery-3.2.1.min.js"></script>
    <script>

function nobackbutton(){
   window.location.hash="no-back-button";
   window.location.hash="Again-No-back-button"
   window.onhashchange=function(){window.location.hash="";}   
}

</script>
    <title>Document</title>
</head>
<body onload="nobackbutton();">


<div class="cabecera">

        <?php 
                include ("db-php/cabecera_principal.php");
        }	
        ?>
</div>

<div class="divPrincipal">

<h2 class="tituloEmpleados">Principal</h2>

</div>

</body>
</html>
<script>

function cliente(consulta){

$.ajax({
url:'db-php/cargas/cargarClientesC.php',
type:'POST',
dataType:'html',
cache:'none',
data:{consulta : consulta},
})
.done(function(respuesta){
    $("#datos").html(respuesta);
})
.fail(function(){
console.log("error");
})
}

$(document).on('keyup','#txtBuscarCli',function(){
var valor=$(this).val();
if(valor !=""){
    cliente(valor);
}
})

function cuenta(){
    cadena="cuenta=" + $('#txtBuscarCu').val() +
            "&accion=" + "Cuenta";
            $('#datos').html('<div class="loading"><img src="recursos/loader.gif" alt="loading" /><br/>Cargardo Perfil, por favor espere...</div>');
    $.ajax({
      type:"POST",
      url:"db-php/filtros/buscarCu.php",
      data:cadena,
      success:function(r){
          
        if(r==''){
            alert("Cuenta no encontrada");
        }else{
            $('#txtBuscarCu').val("");
            window.location="clientes.php?id="+r;
        }
    }
    });
}


</script>
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
<div class="tituloEmpleados">
<h3 class="subtituloEmpleados">Registro de Personal</h3>
    </div>
    <div class="divEmpleados">
        
        <br>
        <form id="frmEmpleados" class="frmEmpleados" autocomplete="off">

       <h4 class="subtituloEmpleado">Datos del Personal</h4> 

        <label class="lblEmpleados" for="">Nombre(s):</label>
        <input type="text" class="txtEmpleados" id="txtNombre">

        <hr class='separacion'>
        
        <label class="lblEmpleados" for="">Correo :</label>
        <input type="text" class="txtEmpleados" id="txtCorreo">

        <label class="lblEmpleados" for="">Telefono :</label>
        <input type="text" class="txtEmpleados" id="txtTel">

        <label class="lblEmpleados" for="">Puesto :</label>
        <select class="sltEmpleados" name="" id="txtPuesto">
        <option value="0">Seleccione...</option>
        <?php
         include ("db-php/conexion.php");
         $query="SELECT * FROM puestos where estatus='Activo'";
             $result= $conexion->query($query);
         
             if($result->num_rows>0){
                    
                         while($fila=$result->fetch_assoc()){
                                echo "<option value=".$fila["id"].">".$fila["nombre"]."</option>";
                                
                         }
                     }else{
                        echo "<option value='0'>Vacío</option>";
                     }
             ?>   
        </select><br>

        <label class="lblEmpleados" for="">Usuario : </label>
        <input type="text" class="txtGasolina" id="txtUsuario">

        <label class="lblEmpleados" for="">Password :</label>
        <input type="password" class="txtFactor" id="txtPassword">

        <label class="lblEmpleados" for="">Confirmar :</label>
        <input type="password" class="txtFactor" id="txtConfirmar">

        </form>
        <div class="subtituloEmpleado">
        <input type="submit" class="btnLimpiar" onclick="limpiar()" value="Limpiar">
        <input type="submit" class="btnGuardar" id="btnEmpleados" value="Registrar">
        </div>
    </div>

    <iframe class="tablas" src="tablaPersonal.php" frameborder="0"></iframe>
</body>
</html>
<script type="text/javascript">

    function limpiar(){

        var txt;
var r = confirm("Deseas limpiar los datos?");
if (r == true) {
        
        $('#frmEmpleados')[0].reset();

}else{

}
    
        }

	$(document).ready(function(){
		$('#btnEmpleados').click(function(){
            if($('#txtNombre').val()==""){
				alert("Debes agregar el nombre");
				return false;
			}else if($('#txtCorreo').val()==""){
				alert("Debes agregar el correo");
				return false;
			}else if($('#txtTel').val()==""){
				alert("Debes agregar el telefono");
				return false;
			}else if($('#txtPuesto').find('option:selected').text()=="Seleccione..."){
				alert("Debes seleccionar el puesto");
				return false;
			}else if($('#txtUsuario').val()==""){
				alert("Debes agregar un Usuario");
				return false;
			}else if($('#txtPassword').val()==""){
				alert("Debes agregar un password");
				return false;
			}

            if($('#txtConfirmar').val()!=$('#txtPassword').val()){
                alert("Las contaseñas no son iguales");
				return false;
            }
        

                    var txt;
                    var r = confirm("Deseas agregar a este empleado?");
                    if (r == true) {

			cadena="nombre=" + $('#txtNombre').val() +
                    "&correo=" + $('#txtCorreo').val() +
                    "&telefono=" + $('#txtTel').val() +
                    "&puesto=" +  $('#txtPuesto').find('option:selected').text() +
                    "&usuario=" +  $('#txtUsuario').val() +
                    "&password=" +  $('#txtPassword').val() +
                    "&accion=" + 1 ;
					$.ajax({
						type:"POST",
						url:"db-php/crudPersonal.php",
						data:cadena,
						success:function(r){
							if(r==2){
								alert("Este usuario ya ha sido registrado");
							}
							else if(r==1){
								alert("Agregado con exito");
                                location.reload();
								
							}else{
								alert("Fallo al agregar"+r);
							}
						}
					});

                }else{}
					
		});
	});
</script>

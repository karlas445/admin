<?php 
ob_start();
      session_start();
      $salida="";
      $id = $_SESSION['id'];
      include("db-php/conexion.php");
  
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
<?php
    include ("db-php/subirF.php");
    $upImg=new upImg();
    if(isset($_POST['guardar'])){
   $upImg->uploadImage($_FILES);
         }
?>
<body onload="nobackbutton();">


<div class="cabecera">

        <?php 
            include ("db-php/cabecera_personal.php");
               $activo = 'Activo';
                $queryA="SELECT * FROM personal WHERE id=$id and estado=$activo";
                $resultA= $conexion->query($queryA);
            
                if($resultA->num_rows>0){
                    while($filaA=$resultA->fetch_assoc()){

                        $nombre=$filaA['nombre'];
                        $correo=$filaA['correo']; 
                        $telefono=$filaA['telefono']; 
                        $usuario=$filaA['usuario'];
                        $img=$filaA['img'];
                        $puesto=$filaA['puesto'];
                        $qr=$filaA['qr'];
        }
    }

        ?>
</div>

<div class="divPrincipal">

<h2 class="tituloEmpleados">Perfil de Usuario Fasda Tec.</h2>

<div id="imagen" align="center" class="imgP">
    <a href="#img1"><img src="<?php echo $img ?>" alt="FotoProducto"></a>
        <input type="text" id="txtFotoA" value="<?php echo $img ?>" hidden readonly>

    </div>

<div class="modal" id="img1">
        <div class="imagen">
            <a href="#img1"><img src="<?php echo $img?>" alt="FotoProducto"></a>
        </div>
        <a class="cerrar" href="">x</a>
      </div>

    <form id='form_subir'  method='post' enctype='multipart/form-data'>

    <h3 class="tituloEmpleados">Cambiar Foto</h3>

        <label class="lblEmpleados" for="">Imagen del Producto :</label>
        <input type="file" name='foto' class="txtEmpleados" id="txtFoto" accept="image/*" >
         <input type='submit' value='Subir' name="guardar" onclick="editarF()" class='btnCodigo'>
         </form>

    <form id="frmProductos" method = "POST" enctype = "multipart/form-data">

        <h3 class="tituloEmpleados">Datos del Empleado</h3>

        <label class="lblEmpleados" for="">Id :</label>
        <input type="text" class="txtPrecios" id="txtId" value="<?php echo $id ?>" readonly>
    

        <label class="lblEmpleados" for="">Nombre :</label>
        <input type="text" class="txtEmpleados" id="txtNombre" value="<?php echo $nombre ?>" readonly>

        <label class="lblEmpleados" for="">Correo :</label>
        <input type="text" class="txtEmpleados" id="txtMarca" value="<?php echo $correo ?>">

        <label class="lblEmpleados" for="">Telefono :</label>
        <input type="text" class="txtFactor" id="txtMarca" value="<?php echo $telefono ?>"><br>

        <label class="lblEmpleados" for="">Puesto :</label>
        <input type="text" class="txtEmpleados" id="txtMarca" value="<?php echo $puesto ?>">

        <label class="lblEmpleados" for="">Usuario :</label>
        <input type="text" class="txtEmpleados" id="txtMarca" value="<?php echo $usuario ?>">

        </form>

    </div>
    </div>


</div>

</body>
</html>

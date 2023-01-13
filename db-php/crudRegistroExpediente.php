<?php 
session_start();

include "conexion.php";
$archivo = $_FILES["archivo"]['name'];
$nombre = $_POST["nombre"];
$puesto = $_POST["puesto"];
$tipodearchivo = 'Expediente';

if(isset($_FILES["archivo"]["name"])){
    $new_route = './Archivos_Expe/';
    $newname ='Expediente_'.$nombre.'_'.$puesto.'_'.$archivo;
   try{
    $sql="SELECT * FROM registros WHERE archivo='$archivo' AND tipo_de_archivo ='$tipodearchivo'";
            $result=mysqli_query($conexion,$sql);
            $num_rows=mysqli_num_rows($result);
            if($num_rows== "1"){
                echo "<script>alert('Archivo duplicado'); window.location = '../registro_documentos.php'</script>";
            }else{
                if(move_uploaded_file($_FILES['archivo']['tmp_name'],$new_route.$newname)){
                    $sql="INSERT INTO registros values (null,'$nombre','$puesto','$archivo','$tipodearchivo' )";
                    $result=mysqli_query($conexion,$sql);
                    echo "<script>alert('Expediente guardado'); window.location = '../registro_documentos.php'</script>";
                }else{
                    echo "<script>alert('No se puede gardar el arhivo en el servidor'); window.location = '../registros_f_e_a.html'</script>";
                }
            }

   }catch (Exception $e) {
            echo 'Excepción capturada: ',  $e->getMessage(), "\n";
        }
}
 ?>
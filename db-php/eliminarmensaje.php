<?php 
	session_start();

	include "conexion.php";
	
        $id =$_POST['id'];


			try {
                $sql="DELETE FROM mensajes WHERE id = '$id'";
                $result=mysqli_query($conexion,$sql);
				echo 1;

			} catch (Exception $e) {
				echo 'Excepción capturada: ',  $e->getMessage(), "\n";
			}
 ?>
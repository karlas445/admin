<?php 
	session_start();

	include "conexion.php";
		$id_salida= $_POST['id'];
        $hora_salida = $_POST['hora_salida'];

			try {
                $sql="UPDATE asistencia SET hora_salida = '$hora_salida' WHERE id ='$id_salida'";
                $result=mysqli_query($conexion,$sql);
				echo 1;

			} catch (Exception $e) {
				echo 'Excepción capturada: ',  $e->getMessage(), "\n";
			}
 ?>
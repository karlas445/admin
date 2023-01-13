<?php 
	session_start();

	include "conexion.php";
		$nombre= $_POST['nombre'];
        $puesto=$_POST['puesto'];
        $fecha=$_POST['fecha'];
        $hora_entrada = $_POST['hora_entrada'];
        $hora_salida = $_POST['hora_salida'];

			try {
                $sql="INSERT into asistencia values (null,'$nombre','$puesto','$fecha','$hora_entrada','$hora_salida')";
                $result=mysqli_query($conexion,$sql);
				echo 1;

			} catch (Exception $e) {
				echo 'Excepción capturada: ',  $e->getMessage(), "\n";
			}
 ?>
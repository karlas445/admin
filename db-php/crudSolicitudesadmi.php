<?php 
	session_start();

	include "conexion.php";
	$user = $_SESSION['id'];
    $queryA = "SELECT * from personal where id=$user";
    $resultA = $conexion->query($queryA);
    $filaA=$resultA->fetch_assoc();
		$nombre= $_POST['nombre'];
        $id = $_SESSION['id'];
        $asunto =$_POST['asunto'];
        $usuario=$_POST['usuario'];
        $mensaje=$_POST['mensaje'];
        $puesto=$filaA['puesto'];
        $rol="Personal";
        $fecha = date('l jS \of F Y h:i:s A');

			try {
                $sql="INSERT into mensajes values (null,'$id','$nombre','$asunto','$usuario','$mensaje','$puesto','$rol','$fecha')";
                $result=mysqli_query($conexion,$sql);
				echo 1;

			} catch (Exception $e) {
				echo 'Excepción capturada: ',  $e->getMessage(), "\n";
			}
 ?>
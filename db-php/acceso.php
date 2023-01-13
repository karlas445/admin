<?php 
	session_start();

	include "conexion.php";
	
		$usuario=$_POST['usuario'];
		$password=$_POST['password'];

			try {
				$sql="SELECT * FROM administradores WHERE usuario='$usuario' AND password='$password'";
				$result=mysqli_query($conexion,$sql);
				$num_rows=mysqli_num_rows($result);
				if($num_rows=="1"){
					$data=mysqli_fetch_array($result);
					$_SESSION["id"]=$data["id"];
					$_SESSION["usuario"]=$data["usuario"];
					echo 1;
				}else{
					echo 2;
				}
			} catch (Exception $e) {
				echo 'Excepción capturada: ',  $e->getMessage(), "\n";
			}
 ?>
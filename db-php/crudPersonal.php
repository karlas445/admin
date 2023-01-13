<?php

session_start();
include "../phpqrcode/qrlib.php"; 
include "conexion.php";

		$nombre=$_POST['nombre'];
		$correo=$_POST['correo'];
        $telefono=$_POST['telefono'];
        $puesto=$_POST['puesto'];
        $usuario=$_POST['usuario'];
        $password=$_POST['password'];
        $accion=$_POST['accion'];
        $usuarioA=$_SESSION['usuario'];

        date_default_timezone_set('America/Mexico_City');
        setlocale(LC_TIME, 'es_MX.UTF-8');
        $hoy=strftime("%Y-%m-%d");
        $hora_actual=strftime("%H:%M:%S");

        if ($accion==1) {
                try{

                    $sql="SELECT id FROM personal";
        $result=mysqli_query($conexion,$sql);
        $num_rows=mysqli_num_rows($result);
        if($num_rows>="1"){
            $string=$num_rows+1;

             $idP=$string;

        }else{
            $string="1";

             $idP= $string;

        }

                    $dir = '../qr/';
            
                    //Si no existe la carpeta la creamos
                    if (!file_exists($dir))
                        mkdir($dir);
                    
                        //Declaramos la ruta y nombre del archivo a generar
                    $filename = 'qr/'.$idP."-".$hoy.'.png';
                 
                        //Parametros de Condiguración
                    
                    $tamaño = 10; //Tamaño de Pixel
                    $level = 'H'; //Precisión Baja
                    $framSize = 3; //Tamaño en blanco
                    $contenido = "https://fasdatec.com/perfil_personal.php?id=".$idP; //Texto
                    
                        //Enviamos los parametros a la Función para generar código QR 
                    QRcode::png($contenido, '../'.$filename, $level, $tamaño, $framSize); 
                    
                $sql="INSERT into personal values (null,'$nombre','$correo','$telefono','$puesto','$usuario','$password'
                ,'recursos/user.png','$usuarioA','$hoy','$filename','Activo')";
                $result=mysqli_query($conexion,$sql);
                
                ob_start();
    $destino=$correo;
    $correo="chavavelazquez7@gmail.com";
    $imagen="¡Bienvenido!
  Felicidades ".$nombre."!!! \nHas sido registrado al sistema de Fasda Tec.\n
    Más tarde recibiras instrucciones para ingresar y utilizar el sistemas de acceso de Fasda Tec.\n";
    eval("\$contenido = \"$imagen\";");
    mail($destino,"contacto",$imagen);
    ob_end_flush();
                
                echo 1;
        } catch (Exception $e) {
            echo 'Excepción capturada: ',  $e->getMessage(), "\n";
        }
			
    }
    if ($accion==2) {
        

}


		function buscaRepetido($nombre,$usuario,$password,$conexion){
			
			try {
                $sql="SELECT * from personal where usuario='$usuario' and password='$password'";
			$result=mysqli_query($conexion,$sql);
			if(mysqli_num_rows($result) > 0){
				return 1;
			}else{
				return 0;
			}
			} catch (Exception $e) {
				echo 'Excepción capturada: ',  $e->getMessage(), "\n";
			}
		}

?>
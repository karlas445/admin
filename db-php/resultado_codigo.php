<?php
include("conexion.php");
$CodigoIngreso = $_REQUEST['clave'];

$porciones = explode("?", $CodigoIngreso);
            $codigo= $porciones[1];

			$porciones1 = explode("=", $codigo);
            $codigoR= $porciones1[1];

$BuscarCodigo  = ("SELECT * FROM personal WHERE id=$codigoR");
$resultado  = mysqli_query($conexion, $BuscarCodigo);
$cantidadExistente = mysqli_num_rows($resultado);
$InfoCodigo = mysqli_fetch_array($resultado);
echo "<br><br>";

date_default_timezone_set('America/Mexico_City');
setlocale(LC_TIME, 'es_MX.UTF-8');
$hoy=strftime("%Y-%m-%d");
$hora_actual=strftime("%H:%M:%S");

$Object = new DateTime();  
$Object->setTimezone(new DateTimeZone('America/Mexico_City'));
$status = $Object->format("d-m-Y h:i:s a");  

if (!empty($cantidadExistente)) { 

	$usuario=$InfoCodigo['usuario'];

	$sql="INSERT into acceso values (null,$codigoR,'$hora_actual','$hoy')";
	$result=mysqli_query($conexion,$sql);

	echo "Bienvenido ".$usuario."<br> Hora : ".$hora_actual."<br> Fecha : ".$hoy;
	echo "<br> ACCESO CORRECTO";

}else{ ?>
	 	<div class="mensaje_registro_no_existente">
           <p style="font-family: 'Varela Round', sans-serif;">No hay registro asociado a esa Clave de empleado</b>
				<b style="color: red;font-family: 'Varela Round', sans-serif;"> (<?php echo $CodigoIngreso;?>)</b> 
			</p>
        </div>
<?php } ?>

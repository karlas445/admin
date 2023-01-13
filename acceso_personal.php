<?php include("db-php/conexion.php");
ob_start();
session_start();
$salida="";
  $varSesion=$_SESSION["usuario"];
  if ($varSesion==''|| $varSesion==null) {
      header("location:index.php");
  }else{ ?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/framework/semantic/semantic.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script  src="js/jsQR.js"></script>
	<script>
		function Actualizacion(){
			var tabla = $.ajax({
				url:'tabla_consulta.php',
				dataType:'text',
				async:false
			}).responseText;
			document.getElementById("miTabla").innerHTML = tabla;}
            setInterval(Actualizacion, 5000);
	</script>
</head>
<body  >
<?php 
                include ("db-php/cabecera_principal.php");
        }	?>
	<h1 class="titulo">Escanéa tu QR para ingresar</h1>
	<div class="panel-lectura" >
		<div class="panel-camara" >
			<div id="preMensaje">No se encuentra una cámara, asegúrate de tener habilitada una.</div>
				<canvas id="canvas" hidden></canvas>
			<div id="datosSalida" hidden>
				<div id="mensajeSalida">No se ha detectado ningún código QR</div>
				<div hidden><b>Clave de empleado: </b><span id="qrDetectado"></span></div>
			</div>
		</div>
		<div class="panel-resultado" id="resultado">
		</div>
	</div>
  <<!--<h1 class="titulo">Códigos Escaneados</h1>
	<section id="miTabla" style="max-width: 800px;
			background: #000;
			margin: auto;
			margin-top: 100px;
			text-align: center;
			border-radius: 10px;
			padding: 40px;">
	</section> -->
	<div class="sonido">
		<audio controls id="sonido_qr">
			<source src="sonido/beep.mp3" type="audio/mpeg">
		</audio>
	</div> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="css/framework/semantic/semantic.min.js"></script>
<script src="js/Escaner_qr.js"></script>
</body>
</html>
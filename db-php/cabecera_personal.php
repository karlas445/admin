<?php
        $usuario=$_SESSION['usuario'];
        date_default_timezone_set('America/Mexico_City');
setlocale(LC_TIME, 'es_MX.UTF-8');
$fecha=strftime("%d-%m-%Y");
$hora=strftime("%H:%M:%S");

?>

<header>
        <div class="contenedor">
            <a class='negocio' href="#"><img class="imgCabecera" src="recursos/logo-fasda-gris.png"></a>
            
            <br>
            
            <div class="sesionCabecera">
        </div>

    </div>
    </header>
    <script src="js/menu.js"></script>
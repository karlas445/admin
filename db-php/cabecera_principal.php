<?php
        $usuario=$_SESSION['usuario'];
        date_default_timezone_set('America/Mexico_City');
setlocale(LC_TIME, 'es_MX.UTF-8');
$fecha=strftime("%d-%m-%Y");
$hora=strftime("%H:%M:%S");

?>

<header>
        <div class="contenedor">
            <a class='negocio' href="principal.php"><img class="imgCabecera" src="recursos/logo-fasda-gris.png"></a>
            
            <br>
            
            <div class="sesionCabecera">
        </div>
            <input type="checkbox" id="menu-bar">
            <label class="icon-menu" for="menu-bar"></label>
            <nav class="barra">
   <ul id="info2">

                <li>
                    <a class="btnMenu" href="registro_personal.php">Registro Personal</a>
                </li>
                <li>
                    <a class="btnMenu" href="acceso_personal.php">Reporte Asistencia</a>
                </li>
                <li>
                    <a class="btnMenu" href="acceso_personal.php">Acceso Personal</a>
                </li>
                <li>
                    <a class="btnMenu" href="registroA.php">Resguardo Equipo</a>
                </li>
                <li>
                    <a class="btnMenu" href="bandeja_de_solicitudes_admi.php">Bandeja de solicitudes</a>
                </li>
                <li>
                    <a class="btnMenu" href="registro_documentos_analisi.php">Registro de análisis</a>
                </li>
                <li>
                    <a class="btnMenu" href="registro_documentos_expe.php">Registro de expedientes</a>
                </li>
                <li>
                    <a class="btnMenu" href="registro_documentos_ficha.php">Registro de fichas</a>
                </li>
                <li>
                    <a class="btnMenu" href="asistencia.php">Asistencia</a>
                </li>
                <li>
                    <a class="btnMenu" href="registroR.php">Cerrar Sesión</a>
                </li>

    <li>
    
        <li class="enlace" id="mensajes">
        <a class="btnMenu" href="db-php/cerrar.php">Salir</a>
        </li>
        </div>
        </nav>
    </li>
   </ul>
</nav>

    </div>
    </header>
    <script src="js/menu.js"></script>
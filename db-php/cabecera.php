<?php


        $usuario=$_SESSION['nombre'];
		$negocio=$_SESSION['perfil'];
        date_default_timezone_set('America/Mexico_City');
setlocale(LC_TIME, 'es_MX.UTF-8');
$fecha=strftime("%d-%m-%Y");
$hora=strftime("%H:%M:%S");

?>

<header>
        <div class="contenedor">
            <a class='negocio' href="principalA.php"><img class="imgCabecera" src="recursos/logo.png"></a>
            
            <br>
            
            <div class="sesionCabecera">
        </div>
            <input type="checkbox" id="menu-bar">
            <label class="icon-menu" for="menu-bar"></label>
            <nav class="barra">
   <ul id="info2">

                <li>
                    <a class="btnMenu" href="registroC.php">Registro de Carrera</a>
                </li>
                <li>
                    <a class="btnMenu" href="registroV.php">Registro de Vertiente</a>
                </li>
                <li>
                    <a class="btnMenu" href="registroD.php">Registro de Evaluador</a>
                </li>
                
                <li>
                    <a class="btnMenu" href="registroA.php">Registro de Equipos</a>
                </li>
                <li>
                    <a class="btnMenu" href="registroR.php">Registro de Rubrica</a>
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
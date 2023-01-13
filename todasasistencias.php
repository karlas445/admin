<?php
ob_start();
session_start();
include("db-php/conexion.php");
$salida = "";
$varSesion = $_SESSION["usuario"];
if ($varSesion == '' || $varSesion == null) {
    header("location:index.php");
} else {


?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/style-asistencia.css?see=1.0">
        <script src="js/jquery-3.2.1.min.js"></script>
        <title>Asistencia</title>
        <script>
            function nobackbutton() {
                window.location.hash = "no-back-button";
                window.location.hash = "Again-No-back-button"
                window.onhashchange = function() {
                    window.location.hash = "";
                }
            }
        </script>
        <title>Document</title>
    </head>

    <body onload="nobackbutton();">


        <div class="cabecera">

        <?php
        include("db-php/cabecera_principal.php");
    }
        ?>
        </div>
        <div class="contendor_asistencia">
            <div class="contenido_as">
                <div class="contitle">
                    <h2 class="titlei">Asistencia</h2>
                </div>
                <div class="contedor_registro">
                    <h3 class="titleregistro">Historial de asistensias</h3>
                    <div class="contendortabla">
                        <table class="table_asistencias">
                            <thead>
                                <tr>
                                    <th>ID Registro</th>
                                    <th>Nombre empleado</th>
                                    <th>Puesto</th>
                                    <th>Fecha</th>
                                    <th>Hora de entrada</th>
                                    <th>Hora de salida</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $queryA = "SELECT * from asistencia";
                                $resultA = $conexion->query($queryA);

                                if ($resultA->num_rows > 0) {
                                    while ($data = $resultA->fetch_assoc()) {

                                ?>
                                        <tr>
                                            <td><?php echo $data['id'];?></td>
                                            <td><?php echo $data['nombre'];?></td>
                                            <td><?php echo $data['puesto'];?></td>
                                            <td><?php echo $data['fecha'];?></td>
                                            <td><?php echo $data['hora_entrada'];?></td>
                                            <td><?php echo $data['hora_salida'];?></td>
                                        </tr>

                                    <?php
                                    }
                                } else {
                                    ?>
                                    <div class="contenedor_">
                                        <h4>NO HAY ASISTENCIAS REGISTRADAS----</h4>
                                    </div>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </body>

    </html>
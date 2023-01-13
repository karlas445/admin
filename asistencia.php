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
                    <form action="" class="formulari_asis" id="formasis">
                        <div class="contegrid">
                            <div class="conteinputs">
                                <div class="contelainput">
                                    <label for="nombre">Nombre completo:</label>
                                </div>
                                <div class="contelainput">
                                    <input type="text" name="nombre" id="txtnombre">
                                </div>
                            </div>
                            <div class="conteinputs">
                                <div class="contelainput">
                                    <label for="puesto">Puesto de trabajo:</label>
                                </div>
                                <div class="contelainput">
                                    <select name="puesto" id="selectoption">
                                        <option value="0">---Selecciona un puesto---</option>
                                        <option value="Director General Fasda tec.">Director General Fasda tec.</option>
                                        <option value="Director De Producción Fasda tec.">Director De Producción Fasda tec.</option>
                                        <option value="Diseñador y Productor">Diseñador y Productor</option>
                                        <option value="Desarrollador">Desarrollador</option>
                                        <option value="Administrador">Administrador</option>
                                    </select>
                                </div>
                            </div>
                            <div class="conteinputs">
                                <div class="contelainput">
                                    <label for="fecha">Fecha:</label>
                                </div>
                                <div class="contelainput">
                                    <input type="text" name="fecha" id="textfecha">
                                </div>
                            </div>
                            <div class="conteinputs">
                                <div class="contelainput">
                                    <label for="nombre">Hora de entrada:</label>
                                </div>
                                <div class="contelainput">
                                    <input type="text" name="hora_entrada" id="textentrada">
                                </div>
                            </div>
                        </div>
                        <div class="contegriduna">
                            <div class="conteinputs">
                                <div class="contelainput">
                                    <input type="submit" value="Registrar entrada" id="Submitenvia" class="inputenviar">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="contedor_registro">
                    <form action="" class="formulari_asiste" id="formasisd">
                        <div class="contegrid">
                            <div class="conteinputs">
                                <div class="contelainput">
                                    <label for="id_asistencia">ID de la asistencia:</label>
                                </div>
                                <div class="contelainput">
                                    <input type="text" name="id_asistencia" id="idasistenc">
                                </div>
                            </div>
                            <div class="conteinputs">
                                <div class="contelainput">
                                    <label for="nombre">Hora de salida:</label>
                                </div>
                                <div class="contelainput">
                                    <input type="text" name="hora_salida" id="textsalida">
                                </div>
                            </div>
                        </div>
                        <div class="contegriduna">
                            <div class="conteinputs">
                                <div class="contelainput">
                                    <input type="submit" value="Registrar salida" id="Submitenviados" class="inputenviar">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="contedor_registro">
                    <h3 class="titleregistro">Asistencia del día de hoy</h3>
                    <a href="todasasistencias.php" class="asis">Registros de asistencias</a>
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
                                $fecha = date('d/m/Y');
                                $queryA = "SELECT * from asistencia where fecha='$fecha'";
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
                                        <h4>NO HAY ASISTENCIAS HOY----</h4>
                                    </div>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <script type="text/javascript" src="js/clock.js?see=1.0"></script>
        <script type="text/javascript" src="js/bsasistenciaentrada.js"></script>
        <script type="text/javascript" src="js/bsasistenciasalida.js"></script>
     
    </body>

    </html>
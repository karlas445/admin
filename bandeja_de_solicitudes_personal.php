<?php
ob_start();
session_start();
include("db-php/conexion.php");
$salida = "";
$varSesion = $_SESSION["usuario"];
if ($varSesion == '' || $varSesion == null) {
    header("location:index.php");
} else {

    $user = $_SESSION['id'];
    $queryA = "SELECT * from personal where id=$user";
    $resultA = $conexion->query($queryA);

    if ($resultA->num_rows > 0) {
        while ($filaA = $resultA->fetch_assoc()) {

            $nombre = $filaA['nombre'];
            $correo = $filaA['correo'];
            $usuario = $filaA['usuario'];
        }
    }

?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/style-bandeja_de_solicitudes.css?see=1.0">
        <script src="js/jquery-3.2.1.min.js"></script>
        <title>Bandeja de solicitudes</title>
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
        <div class="contenedor_bs">
            <div class="contenido">
                <div class="contenedor_grid_unacolumna">
                    <div class="contenedor_title">
                        <h1 class="titleconte">Bandeja de solicitudes</h1>
                    </div>
                </div>
                <div class="contedor_grid">
                    <div class="contendor_contenido_admin">
                        <div class="contenido_usuario">
                            <h2 class="textoti">Personal</h2>
                            <h3 class="textoti"><?php echo '<strong>Nombre completo: </strong>' . $nombre;   ?></h3>
                            <h3 class="textoti"><?php echo '<strong>Correo electrónico: </strong>' . $correo;   ?></h3>
                            <h3 class="textoti"><?php echo '<strong>Usuario: </strong>' . $usuario;   ?></h3>
                        </div>
                    </div>
                    <div class="contendor_contenido_solicitudes">
                        <div class="contenido_usuario_soli">
                            <h2 class="textoti">Solicitudes</h2>
                            <h3 class="textoti">Solicitudes para el administrador</h3>
                            <div class="contenedor_solicitud">
                                <form action="" class="formulario_solicitud" id="form_soli">
                                    <div class="contenedor_grid_unacolumna">
                                        <div class="contenedor_inputs">
                                            <div class="con_labelandinpu">
                                                <label for="asunto">Asunto de la solicitud: </label>
                                            </div>
                                            <div class="con_labelandinpu">
                                                <input type="text" name="asunto" id="txtasunto">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="contedor_grid_form">
                                        <div class="contenedor_inputs">
                                            <div class="con_labelandinpu">
                                                <label for="nombre">Nombre completo: </label>
                                            </div>
                                            <div class="con_labelandinpu">
                                                <input type="text" name="nombre" disabled id="txtnombre" value="<?php echo $nombre; ?>">
                                            </div>
                                        </div>
                                        <div class="contenedor_inputs">
                                            <div class="con_labelandinpu">
                                                <label for="usuario">Usuario del administrador: </label>
                                            </div>
                                            <div class="con_labelandinpu">
                                                <input type="text" name="usuario" id="txtusuario">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="contenedor_grid_unacolumna">
                                        <div class="contenedor_inputs">
                                            <div class="con_labelandinpu">
                                                <label for="mensaje">Mensaje de la solicitud: </label>
                                            </div>
                                            <div class="con_labelandinpu">
                                                <textarea name="mensaje" cols="30" rows="10" id="txtmensaje"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="contenedor_grid_unacolumna">
                                        <div class="contenedor_inputs">
                                            <div class="con_labelandinpu">
                                                <input type="submit" value="Enviar solicitud" id="SubMasse">
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>

                        </div>
                        <div class="contenido_usuario_soli">
                            <h2 class="textoti">Recordatorios</h2>
                            <h3 class="textoti">Solicitudes enviadas por el personal</h3>
                                                        <!--SOLICITUDES-->
                                                        <?php 
                                $user = $_SESSION['usuario'];
                                $rol = "Personal";
                                $queryA = "SELECT * from mensajes where usuario='$user'and rol ='$rol' ";
                                $resultA = $conexion->query($queryA);
                            
                                if ($resultA->num_rows > 0) {
                                    while ($filaA = $resultA->fetch_assoc()) {
                            
                            
                            ?>
                            <div class="contenedor_recordatorio">
                                <div class="contedor_grid_recordarorio">
                                    <div class="conte_nombre">
                                        <h4 class="textname"><?php echo $filaA['nombre']; ?></h4>
                                        <h5 class="puesto">(<?php echo $filaA['puesto']; ?>)</h5>
                                    </div>
                                    <div class="conte_cuerpo">
                                        <div class="conte_mensaje">
                                            <h4 class="asunto"><?php echo $filaA['asunto']; ?></h4>
                                            <h6 class="fecha"><?php echo $filaA['fecha']; ?></h6>
                                            <h5 class="mensaje"><?php echo $filaA['mensaje']; ?></h5>
                                            <div class="botoness">
                                            <a href="" onclick="revisar('<?php echo $filaA['id']; ?>');" id="deletebutton">Borrar mensaje</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php 
                        }
                    }else{
                            ?>
                              <div class="contenedor_recordatorio">
                                <h4>NO HAY MENSAJES----</h4>
                            </div>
                    <?php }?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script type="text/javascript" src="js/bandeja_entra_personal.js"></script>
        <script type="text/javascript" src="js/check.js"></script>
        </body>
    </html>
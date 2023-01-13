<?php 
ob_start();
      session_start();
      $salida="";
        $varSesion=$_SESSION["usuario"];
        if ($varSesion==''|| $varSesion==null) {
            header("location:index.php");
        }else{
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/style-registros-documentos.css?ver=1.0">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/jquery-3.2.1.min.js"></script>
    <title>Registros de documentos</title>
    <script>

function nobackbutton(){
   window.location.hash="no-back-button";
   window.location.hash="Again-No-back-button"
   window.onhashchange=function(){window.location.hash="";}   
}

</script>
    <title>Document</title>
</head>
<body onload="nobackbutton();">


<div class="cabecera">

        <?php 
                include ("db-php/cabecera_principal.php");
        }	
        ?>
</div>
</head>
<body>
    <div class="contenedorregistros">
    <div class="containeelemetes">
        <div class="context">
            <h1 class="titleregistros">Registros de fichas, expedientes y analisis.</h1>
        </div>
        <div class="contenedorbutones">
            <div class="contegridbutton">
                <div class="button1">
                    <a href="#" class="button_reg" id="btn-abrirregistrooficha">Registro de fichas</a>
                </div>
               <div class="contenedorimage">
                <img src="recursos/IM_RE_FI.png" alt="" class="img_re_fi">
               </div>
            </div>
            
        </div>
        <div class="contenedorbutones">
            <div class="contegridbutton">
                <div class="button2">
                    <a href="#" class="button_reg" id="btn-abrirregistrooexpe">Registro de expedientes</a>
                </div>
               <div class="contenedorimage">
                <img src="recursos/IM_RE_EX.png" alt="" class="img_re_fi">
               </div>
            </div>
            
        </div>
        <div class="contenedorbutones">
            <div class="contegridbutton">
                <div class="button3">
                    <a href="#" class="button_reg" id="btn-abrirregistrooana">Registro de análisis</a>
                </div>
               <div class="contenedorimage">
                <img src="recursos/IM_RE_ANA.png" alt="" class="img_re_fi">
               </div>
            </div>
            
        </div>
    </div>
    </div>

    <div  id="overficha" class="overlaygen">
        <div class="containertitle">
            <div class="contedorformus">
                <h3 class="titleregistro">Registro de fichas.</h3>
                <form action="" method="dialog" class="formularioregistros" enctype="multipart/form-data" id="FormFicha">
                    <div class="inputsgrid">
                        <div class="cajainputs">
                            <div class="cajalabelhijo">
                                <label for="nombre">Nombre completo:</label>
                            </div>
                            <div class="cajahijoinput">
                                <input type="text" name="nombre" id="txtNombre" required class="btn-registros">
                            </div>
                        </div>
                        <div class="cajainputs">
                            <div class="cajalabelhijo">
                                <label for="puesto">Puesto que ocupa:</label>
                            </div>
                            <div class="cajahijoinput">
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
                    </div>
                    <div class="inputsgrid2">
                        <div class="cajainputs">
                            <div class="cajalabelhijo">
                                <label for="archivos">Subir ficha:</label>
                            </div>
                            <div class="cajahijoinput">
                                <input type="file" name="archivo" id="filearchivo">
                            </div>
                        </div>
                    </div>
                    <div class="inputsgrid">
                        <div class="cajainputs">
                            <div class="cajahijoinput">
                                <button id="btn-cerrarregistroficha" class="btn-cerrarregistro">Cancelar</button>
                            </div>
                        </div>
                        <div class="cajainputs">
                            <div class="cajahijoinput">
                                <input type="submit" id="SubmitForm" value="Enviar registro">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div> 
    </div>
    <div  id="overexpe" class="overlaygen">
        <div class="containertitle">
            <div class="contedorformus">
                <h3 class="titleregistro">Registro de expedientes.</h3>
                <form action="" method="dialog" class="formularioregistros" enctype="multipart/form-data" id="FormExpe">
                    <div class="inputsgrid">
                        <div class="cajainputs">
                            <div class="cajalabelhijo">
                                <label for="nombre">Nombre completo:</label>
                            </div>
                            <div class="cajahijoinput">
                                <input type="text" name="nombre" id="txtNombreExpe" required class="btn-registros">
                            </div>
                        </div>
                        <div class="cajainputs">
                            <div class="cajalabelhijo">
                                <label for="puesto">Puesto que ocupa:</label>
                            </div>
                            <div class="cajahijoinput">
                                <select name="puesto" id="selectoptionExpe">
                                    <option value="0">---Selecciona un puesto---</option>
                                    <option value="Director General Fasda tec.">Director General Fasda tec.</option>
                                    <option value="Director De Producción Fasda tec.">Director De Producción Fasda tec.</option>
                                    <option value="Diseñador y Productor">Diseñador y Productor</option>
                                    <option value="Desarrollador">Desarrollador</option>
                                    <option value="Administrador">Administrador</option>
                                  </select>
                            </div>
                        </div>
                    </div>
                    <div class="inputsgrid2">
                        <div class="cajainputs">
                            <div class="cajalabelhijo">
                                <label for="archivos">Subir expediente:</label>
                            </div>
                            <div class="cajahijoinput">
                                <input type="file" name="archivo" id="filearchivoExpe">
                            </div>
                        </div>
                    </div>
                    <div class="inputsgrid">
                        <div class="cajainputs">
                            <div class="cajahijoinput">
                                <button id="btn-cerrarregistroexpe" class="btn-cerrarregistro">Cancelar</button>
                            </div>
                        </div>
                        <div class="cajainputs">
                            <div class="cajahijoinput">
                                <input type="submit" id="SubmitFormExpe" value="Enviar registro">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div> 
    </div>
    <div  id="overana" class="overlaygen">
        <div class="containertitle">
            <div class="contedorformus">
                <h3 class="titleregistro">Registro de análisis.</h3>
                <form action="" method="dialog" class="formularioregistros" enctype="multipart/form-data" id="FormAna">
                    <div class="inputsgrid">
                        <div class="cajainputs">
                            <div class="cajalabelhijo">
                                <label for="nombre">Nombre completo:</label>
                            </div>
                            <div class="cajahijoinput">
                                <input type="text" name="nombre" id="txtNombreAna" required class="btn-registros">
                            </div>
                        </div>
                        <div class="cajainputs">
                            <div class="cajalabelhijo">
                                <label for="puesto">Puesto que ocupa:</label>
                            </div>
                            <div class="cajahijoinput">
                                <select name="puesto" id="selectoptionAna">
                                    <option value="0">---Selecciona un puesto---</option>
                                    <option value="Director General Fasda tec.">Director General Fasda tec.</option>
                                    <option value="Director De Producción Fasda tec.">Director De Producción Fasda tec.</option>
                                    <option value="Diseñador y Productor">Diseñador y Productor</option>
                                    <option value="Desarrollador">Desarrollador</option>
                                    <option value="Administrador">Administrador</option>
                                  </select>
                            </div>
                        </div>
                    </div>
                    <div class="inputsgrid2">
                        <div class="cajainputs">
                            <div class="cajalabelhijo">
                                <label for="archivos">Subir análisis:</label>
                            </div>
                            <div class="cajahijoinput">
                                <input type="file" name="archivo" id="filearchivoAna">
                            </div>
                        </div>
                    </div>
                    <div class="inputsgrid">
                        <div class="cajainputs">
                            <div class="cajahijoinput">
                                <button id="btn-cerrarregistroana" class="btn-cerrarregistro">Cancelar</button>
                            </div>
                        </div>
                        <div class="cajainputs">
                            <div class="cajahijoinput">
                                <input type="submit" id="SubmitFormAna" value="Enviar registro">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div> 
    </div>


    <script type="text/javascript" src="js/popup.js?see=1.2"></script>
    <script type="text/javascript" src="js/dbaseficha.js?see=1.0"></script>
    <script type="text/javascript" src="js/dbaseexpe.js?see=1.0"></script>
    <script type="text/javascript" src="js/dbaseana.js?see=1.0"></script>
</body>
</html>

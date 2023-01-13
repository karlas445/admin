<?php
    class upImg{
        public function uploadImage($Imagen){
            $ruta="archivos/" . $Imagen['foto']['name'];
            $_SESSION['foto']=$ruta;
            move_uploaded_file($Imagen['foto']['tmp_name'],$ruta);

            include "db-php/conexion.php";
                    $id=$_SESSION['id'];
                    $fotoA=$_SESSION['fotoA'];
                    $negocio=$_SESSION['negocio'];
                    $id=$_SESSION['id'];
            
                        if($ruta=="archivos/"){
                            echo "<script>alert('Debes seleccionar un archivo');</script>";
                        }else{
            
                        try {
                            $sql="UPDATE personal SET img='$ruta' WHERE id='$id'
                            AND id='$id'";
                        $result=mysqli_query($conexion,$sql);
                        } catch (Exception $e) {
                            echo 'Excepción capturada: ',  $e->getMessage(), "\n";
                        }
                        $_SESSION['foto']="";
                        header("location:perfil_personal.php?id=".$id);
                    }
                }
            }
            
            ?>
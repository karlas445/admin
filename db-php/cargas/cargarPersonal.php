<?php
session_start();
include ("../conexion.php");

$salida="";
$query="SELECT * FROM personal ORDER BY id";

if(isset($_POST['consulta'])){
    $q=$conexion->real_escape_string($_POST['consulta']);
    $query="SELECT * FROM personal WHERE nombre LIKE '%".$q."%' OR correo LIKE '%".$q."%' OR
     telefono LIKE '%".$q."%' OR usuario LIKE '%".$q."%'";
}
    $result= $conexion->query($query);

    if($result->num_rows >0){
        $salida.="
                <table class='tablaEmpleados'>
                <thead>
                    <tr>
                        <td>Id</td>
                        <td>Nombre</td>
                        <td>Correo</td>
                        <td>Telefono</td>
                        <td>Puesto</td>
                        <td>Usuario</td>
                        <td>Ver</td>
                    </tr>
                </thead>
                <tbody>";

                while($fila=$result->fetch_assoc()){

                $salida.="<tr>
                <td>".$fila["id"]."</td>
                <td>".$fila["nombre"]."</td>
                <td>".$fila["correo"]."</td>
                <td>".$fila["telefono"]."</td>
                <td>".$fila["puesto"]."</td>
                <td>".$fila["usuario"]."</td>
                <td><a id='btnEditarcar' target='_top' href='editarEmpleado.php?id=".$fila['id']."'>
                <img class='iconFolder' src='recursos/user.png' alt=''></a></td>
                </tr>";
                    
                }
                $salida.="</tbody></table>";
                }else{
                    $salida.="<table class='tablaPuestos'>
                    <thead>
                        <tr>
                            <td>No se encontraron resultados</td>";
                }
                echo $salida;

?>
<?php
/* $mysqli = new mysqli('localhost', 'root', '', 'feria_u');
if(mysqli_connect_errno()){
    echo 'Conexion Fallida :', mysqli_connect_error();
    exit();
} */

$mysqli = new mysqli('35.184.11.1', 'ErickUpqroo', 'Upqroo2020_E1', 'feria_universitaria');
if(mysqli_connect_errno()){
    echo 'Conexion Fallida :', mysqli_connect_error();
    exit();
}
?>
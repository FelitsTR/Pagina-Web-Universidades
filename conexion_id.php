
<?php


/* $mysqli = new mysqli('localhost', 'root', '', 'feria_u');
if(mysqli_connect_errno()){
    echo 'Conexion Fallida :', mysqli_connect_error();
    exit();
} */

define('USER', 'root');
define('PASSWORD', '');
define('HOST', 'localhost');
define('DATABASE', 'feria_u');
 
try {
    $conexion = new PDO("mysql:host=".HOST.";dbname=".DATABASE, USER, PASSWORD);
} catch (PDOException $e) {
    exit("Error: " . $e->getMessage());
}

?>


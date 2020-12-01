
<?php
/* define('USER', 'root');
define('PASSWORD', '');
define('HOST', 'localhost');
define('DATABASE', 'feria_u');
 
try {
    $conexion = new PDO("mysql:host=".HOST.";dbname=".DATABASE, USER, PASSWORD);
} catch (PDOException $e) {
    exit("Error: " . $e->getMessage());
} */

define('USER', 'ErickUpqroo');
define('PASSWORD', 'Upqroo2020_E1');
define('HOST', '35.184.11.1');
define('DATABASE', 'feria_universitaria');
 
try {
    $conexion = new PDO("mysql:host=".HOST.";dbname=".DATABASE, USER, PASSWORD);
} catch (PDOException $e) {
    exit("Error: " . $e->getMessage());
}

?>


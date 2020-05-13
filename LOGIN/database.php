<?php
$server = 'localhost';
$username = 'root';
$password = '1234';
$database = 'login';
 
/*conexion */
try {
    $conn = new PDO("mysql:host=$server;dbname=$database;",$username,$password);
} catch (Exception $e) {
    die('fallo de conexion:' .$e->getMessage());

}
?>

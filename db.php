<?php
$host = "localhost";
$usuario = "root";
$contrasena = ""; // Cambia si tu base tiene contraseña
$base_de_datos = "garage_mtb_neiva1";

$conn = new mysqli($host, $usuario, $contrasena, $base_de_datos);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
?>

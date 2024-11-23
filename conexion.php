<?php
// Parámetros de conexión a la base de datos
$servername = "localhost";
$username = "root"; // Tu usuario de base de datos (usualmente 'root' en local)
$password = ""; // Tu contraseña de base de datos (vacío en local por defecto)
$dbname = "abigail"; // Nombre de tu base de datos

// Conexión con PDO
try {
    // Crear conexión PDO
    $pdo = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // Configuración de PDO para manejo de excepciones
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Conexión fallida: " . $e->getMessage());
}

// Conexión con MySQLi
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Conexión fallida con MySQLi: " . mysqli_connect_error());
}
?>

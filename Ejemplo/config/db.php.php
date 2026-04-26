<?php
$host = "localhost";
$db = "act.1";   // usa el nombre exacto de tu BD
$user = "root";
$pass = "";
$charset = "utf8mb4";

$dsn = "mysql:host=$host;dbname=$db;charset=$charset"; // comillas invertidas por el punto

try {
    $pdo = new PDO($dsn, $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Conexión exitosa<br>";
} catch (PDOException $e) {
    die("Error de conexión: " . $e->getMessage());
}
?>

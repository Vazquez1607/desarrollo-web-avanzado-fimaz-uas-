<?php
require_once "config/db.php.php";
$sql = "INSERT INTO alumnos (nombre,apellido,correo)
    VALUES (:nombre, :apellido, :correo)";
$stmt = $pdo->prepare($sql);

$stmt->execute([
    'nombre' => 'Juan Pablo',
    'apellido' => 'Vazquez',
    'correo' => 'Vazquezjuanpablo140@gmail.com'
]);

echo "Alumno insertado correctamente<br>";
?>
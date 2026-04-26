<?php
require_once "config/db.php.php";

$idAlumno = 1; 
$sql = "UPDATE alumnos
        SET nombre = :nombre,
            apellido = :apellido,
            correo = :correo
        WHERE idAlumno = :idAlumno";

$stmt = $pdo->prepare($sql);

$stmt->execute([
    'nombre' => 'Joseph',
    'apellido' => 'Vazquez',
    'correo' => 'JosephVazquez16gmail.com',
    'idAlumno' => $idAlumno
]);

echo "Alumno actualizado correctamente<br>";
?>
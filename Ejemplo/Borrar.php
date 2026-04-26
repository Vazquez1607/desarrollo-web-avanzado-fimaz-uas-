<?php
require_once "config/db.php.php";

$idalumno = 1; 

$sql = "DELETE FROM alumnos WHERE idAlumno = :idAlumno";
$stm = $pdo->prepare($sql);
$stm->execute(['idAlumno'=> $idalumno]);

echo "Alumno eliminado correctamente<br>";
?>
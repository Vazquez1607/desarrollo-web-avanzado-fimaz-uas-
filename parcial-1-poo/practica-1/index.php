<?php
require_once 'Usuario.php';

$usuario = new Usuario("Juan Pablo", "vazquezjuanpablo140@gmai.com");

// Mostrar valores
echo "Nombre: " . $usuario->getNombre() . "<br>";
echo "Correo: " . $usuario->getCorreo() . "<br>";

// Cambiar valores con setters
$usuario->setNombre("Joseph julian");
$usuario->setCorreo("josephjulian16@gmail.com");

echo "Nuevo Nombre: " . $usuario->getNombre() . "<br>";
echo "Nuevo Correo: " . $usuario->getCorreo() . "<br>";
?>

<?php
require_once 'clases/Admin.php';
require_once 'clases/Alumno.php';

try {
    $admin = new Admin("Juan Pablo", "juan pablo@gmail.com");
    echo "Nombre: " . $admin->getNombre() . "<br>";
    echo "Correo: " . $admin->getCorreo() . "<br>";
    echo "Rol: " . $admin->getRol() . "<br><br>";

    $alumno = new Alumno("fernanda ortega", "fernanda ortega@gmail.com", "A12345");
    echo "Nombre: " . $alumno->getNombre() . "<br>";
    echo "Correo: " . $alumno->getCorreo() . "<br>";
    echo "Rol: " . $alumno->getRol() . "<br>";
    echo "Matrícula: " . $alumno->getMatricula() . "<br><br>";

    // Usuario inválido
    $usuarioInvalido = new Usuario("mama", "correo_invalido");
} catch (Exception $e) {
    echo "Error: " . $e->getMessage() . "<br>";
}
?>

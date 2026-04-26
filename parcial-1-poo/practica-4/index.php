<?php
require_once 'clases/Admin.php';
require_once 'clases/Alumno.php';
require_once 'clases/Invitado.php';

$usuarios = [];

try {
    $usuarios[] = new Admin("Juan Pablo", "juanpablo14@gmail.com");
    $usuarios[] = new Alumno("joseph julian", "josephjulian@gmail.com", "A12345");
    $usuarios[] = new Invitado("iker japhet", "ikerjaphet@gmail.com", "Empresa XYZ");

    // Usuario inválido
    $usuarios[] = new Usuario("Pedro", "correo_invalido");
} catch (Exception $e) {
    echo "Error controlado: " . $e->getMessage() . "<br><br>";
}

// Mostrar tabla HTML
echo "<table border='1' cellpadding='5'>";
echo "<tr><th>Nombre</th><th>Correo</th><th>Rol</th><th>Matrícula</th><th>Empresa</th></tr>";

foreach ($usuarios as $u) {
    echo "<tr>";
    echo "<td>" . $u->getNombre() . "</td>";
    echo "<td>" . $u->getCorreo() . "</td>";
    echo "<td>" . $u->getRol() . "</td>";

    // Alumno
    if ($u instanceof Alumno) {
        echo "<td>" . $u->getMatricula() . "</td>";
    } else {
        echo "<td>-</td>";
    }

    // Invitado
    if ($u instanceof Invitado) {
        echo "<td>" . $u->getEmpresa() . "</td>";
    } else {
        echo "<td>-</td>";
    }

    echo "</tr>";
}
echo "</table>";
?>

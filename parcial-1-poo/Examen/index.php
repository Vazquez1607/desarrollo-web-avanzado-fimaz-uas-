<?php
require_once 'clases/usuario.php';
require_once 'clases/admin.php';
require_once 'clases/alumno.php';


$usuarios = [];

try {
    $usuarios[] = new Admin("Juan Pablo", "vazquezjuanpablo140@gmail.com");
    $usuarios[] = new Alumno("Joseph julian", "josephjulian16@gmail.com", "A12345");
     $usuarios[] = new Alumno("Iker japhet", "ikerjaphet07@gmail.com", "A1345");
    
    // Error de correo
    $usuarios[] = new Admin("Carlos", "correo_invalido", "B67890");
} catch (Exception $e) {
    echo "Error capturado: " . $e->getMessage() . "</p>";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Usuarios</title>
</head>
<body>
    <h2>Usuarios</h2>
    <table border="1" >
        <tr>
            <th>Nombre</th>
            <th>Correo</th>
            <th>Rol</th>
            <th>Matrícula</th>
        </tr>
        <?php foreach ($usuarios as $u): ?>
        <tr>
            <td><?= $u->getNombre(); ?></td>
            <td><?= $u->getCorreo(); ?></td>
            <td><?= $u->getRol(); ?></td>
            <td><?= method_exists($u, 'getMatricula') ? $u->getMatricula() : ''; ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>

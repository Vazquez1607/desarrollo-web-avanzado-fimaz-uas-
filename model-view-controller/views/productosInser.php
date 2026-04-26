<?php

require_once(__DIR__ . "/../controllers/controladorProductos.php");

$producto = $_POST['txtProducto'];
$cantidad = $_POST['txtCantidad'];
$precio = $_POST['txtPrecio'];

$objController = new ProductosController();
$objController->saveProducto($producto, $cantidad, $precio);

?>
<?php
require_once(__DIR__ . "/../models/modeloProductos.php");

class ProductosController {

    private $model;

    public function __construct() {
        $this->model = new ProductsModel();
    }

    public function saveProducto($producto, $cantidad, $precio_unitario) {
        $id = $this->model->insert($producto, $cantidad, $precio_unitario);

        if ($id == false) {
            header("Location: ../index.php");
        } else {
            header("Location: ../views/lstProducto.php");
        }
        exit();
    }

    public function readProductos() {
        return $this->model->read();
    }
}

?>
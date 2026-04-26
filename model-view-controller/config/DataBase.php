<?php

class DataBase {

    // Atributos de la clase DataBase
    private $host = "localhost";
    private $db = "compras";
    private $user = "root";
    private $password = "";

    public function __construct()
    {
        // Constructor...
    }

    // Método para conexión a la base de datos.
    public function connect() {
        try {
            $PDO = new PDO(
                "mysql:host=" . $this->host . ";dbname=" . $this->db,
                $this->user,
                $this->password
            );
            return $PDO;
        } catch (PDOException $e) {
            return $e->getMessage();
        }
    }
}

?>

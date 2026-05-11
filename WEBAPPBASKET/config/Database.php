<?php
    //clase conexion

    class Database{
        private $host = "localhost";
        private $db = "examen";
        private $user = "root";
        private $password = "";

        public function __construct(){
            
        }

        public function connect(){
            try {
                // CORRECCIÓN AQUÍ: Se agregaron los "=" y el ";" entre host y dbname
                $PDO = new PDO("mysql:host=".$this->host.";dbname=".$this->db,
                $this->user, $this->password);

                $PDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                return $PDO;
            } catch (PDOException $e) {
                return $e->getMessage();
            }
        }
    }
?>




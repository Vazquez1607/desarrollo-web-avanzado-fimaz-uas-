<?php

require_once(__DIR__ . "/../config/DataBase.php");

class torneosModel {
    public $PDO;

    public function __construct() {
        // Declaramos la variable para conexión a la BD.
        // Instanciamos la clase DataBase.
        $conecction = new Database();

        // Llamamos al método connect y lo asignamos a nuestra variable PDO.
        $this->PDO = $conecction->connect();
    }

    // Método para hacer un INSERT en la BD, en tabla "torneos".
    public function insert($nombreTorneo, $organizador, $patrocinadores, $sede, $categoria,
    $premio1, $premio2, $premio3, $otroPremio, $usuario, $contrasena) {

        // Encriptar contraseña asignada al organizador del torneo.
        $contrasena = $this->passwordEncrypt($contrasena);

        // Iniciamos declarando el statement y preparando la consulta.
        $statement = $this->PDO->prepare(
            "INSERT INTO torneos VALUES(
                null, 
                :nombreTorneo, :organizador, :patrocinadores, :sede, :categoria, :premio1, :premio2, :premio3, :otroPremio, :usuario, :contrasena
            )"
        );

        // Asociamos los valores colocados como placeholder en el query mediante bindParam().
        $statement->bindParam(":nombreTorneo", $nombreTorneo);
        $statement->bindParam(":organizador", $organizador);
        $statement->bindParam(":patrocinadores", $patrocinadores);
        $statement->bindParam(":sede", $sede);
        $statement->bindParam(":categoria", $categoria);
        $statement->bindParam(":premio1", $premio1);
        $statement->bindParam(":premio2", $premio2);
        $statement->bindParam(":premio3", $premio3);
        $statement->bindParam(":otroPremio", $otroPremio);
        $statement->bindParam(":usuario", $usuario);
        $statement->bindParam(":contrasena", $contrasena);

        // Ejecutamos el statement mediante execute().
        return ($statement->execute()) ? $this->PDO->lastInsertId() : false;
    }

    // Método para encriptar contraseña
    public function passwordEncrypt($password) {
        $passwordEncrypted = password_hash($password, PASSWORD_DEFAULT);
        return $passwordEncrypted;
    }

    // Método para verificar si la password corresponde con la encriptada
    public function passwordDencrypted($passwordEncrypted, $passwordCandidate) {
        return (password_verify($passwordCandidate, $passwordEncrypted)) ? true : false;
    }

    //Crearemos el método para listar todos los torneos.
    public function read(){
        $statement = $this->PDO->prepare("SELECT * FROM torneos");
        return ($statement->execute()) ? $statement->fetchAll() : false;
    }

    //Método para devolver la información de un solo torneo.
    public function readOne($id) {
        $statement = $this->PDO->prepare("SELECT * FROM torneos WHERE id=:id limit 1");
        $statement->bindParam(":id", $id);
        return ($statement->execute()) ? $statement->fetch() : false;
    }

    // Metodo para actualizar los datos del torneo
    public function update($id , $nombreTorneo, $organizador, $patrocinadores, $sede, $categoria,
    $premio1, $premio2, $premio3, $otroPremio){

        $statement = $this->PDO->prepare(
            "UPDATE torneos SET nombreTorneo = :nombreTorneo, organizador = :organizador, patrocinadores = :patrocinadores, sede = :sede, categoria = :categoria, 
            premio1 = :premio1, premio2 = :premio2, premio3 = :premio3, otroPremio = :otroPremio
            WHERE id = :id"
        );

        // Asociamos los valores colocados como placeholder en el query mediante bindParam().
        $statement->bindParam(":id", $id);
        $statement->bindParam(":nombreTorneo", $nombreTorneo);
        $statement->bindParam(":organizador", $organizador);
        $statement->bindParam(":patrocinadores", $patrocinadores);
        $statement->bindParam(":sede", $sede);
        $statement->bindParam(":categoria", $categoria);
        $statement->bindParam(":premio1", $premio1);
        $statement->bindParam(":premio2", $premio2);
        $statement->bindParam(":premio3", $premio3);
        $statement->bindParam(":otroPremio", $otroPremio);

        return ($statement->execute()) ? $id : false;
        
    }

        //Método para devolver la información de un solo torneo.
    public function delete($id) {
        $statement = $this->PDO->prepare("DELETE FROM torneos WHERE id=:id");
        $statement->bindParam(":id", $id);
        return ($statement->execute()) ? true : false;
    }

}

?>


<?php

require_once "usuario.php";

class alumno extends usuario {
    private $matricula;

    public function __construct($nombre, $correo, $matricula) 
    {
        parent::__construct($nombre, $correo);
        $this->matricula = $matricula;
    }

    public function getmatricula() {
        return $this->matricula;
    }

    public function getrol() {
        return "alumno";
    }
}

?>
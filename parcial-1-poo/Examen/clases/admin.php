<?php
require_once "usuario.php";

class admin extends usuario {
    public function getRol() {
        return "Admin";
    }
}


?>
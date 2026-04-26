<?php


class producto{
    private $id;
    private $nombre;
    private $descripcion; 
    private $existencia;
    private $precio;

 public function __construct($id=0, $nombre = "",$descripcion="", $existencia="", $precio=0.0)
 {
    $this-> id = $id;
    $this->nombre=$nombre;
    $this->descripcion=$descripcion;
    $this->existencia=$existencia;
    $this->precio=$precio;

 }


 public function getid(){
    return $this->id;
 }
 public function setid($id){
    $this->id = $id;
 }
 public function getnombre(){
    return $this->nombre;

 }
 public function setnombre($nombre){
    $this->nombre = $nombre;
}
    public function getdescripcion(){
    return $this->descripcion;

}
 public function setdescripcion($descripcion){
    $this->descripcion = $descripcion;
 }

 public function getexistencia(){
    return $this->existencia;
 }

 public function setexistencia($existencia){
    $this->existencia = $existencia;
 }

 public function getprecio(){
    return $this->precio;
 
 }

 public function setprecio($precio){
    $this->precio = $precio;
 }
}
?>
<?php

/**
 * A point of interes keeps all the info 
 * about a place in the USB
 * @author andreth
 */
class Poi {

    private $id;
    private $creador;
    private $nombre;
    private $descripcion;
    private $longitud;
    private $latitud;
    private $altitud;
    private $multimedia;
    private $categorias;
    private $table = "pois";
    
    public function getMultimedia() {
        return $this->multimedia;
    }

    public function setMultimedia($multimedia) {
        $this->multimedia = $multimedia;
    }

    public function getCategorias() {
        return $this->categorias;
    }

    public function setCategorias($categorias) {
        $this->categorias = $categorias;
    }

        public function getTable() {
        return $this->table;
    }

    public function setTable($table) {
        $this->table = $table;
    }

    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getCreador() {
        return $this->creador;
    }

    public function setCreador($creador) {
        $this->creador = $creador;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function getDescripcion() {
        return $this->descripcion;
    }

    public function setDescripcion($descripcion) {
        $this->descripcion = $descripcion;
    }

    public function getLongitud() {
        return $this->longitud;
    }

    public function setLongitud($longitud) {
        $this->longitud = $longitud;
    }

    public function getLatitud() {
        return $this->latitud;
    }

    public function setLatitud($latitud) {
        $this->latitud = $latitud;
    }

    public function getAltitud() {
        return $this->altitud;
    }

    public function setAltitud($altitud) {
        $this->altitud = $altitud;
    }

    public function valuesDB() {
        return "'" . $this->creador . "','" . $this->nombre . "','"  . $this->descripcion . "','" .
        	$this->longitud . "','"  . $this->latitud . "','" . $this->altitud . "'";
    }

    public function columnsDB() {
        return '"' . "creador" . '","' . "nombre" . '","' . "descripcion" . '","' 
					. "longitud" . '","' . "latitud" . '","' . "altitud" . '"';
    }

    public function getIdName() {
        return '"' . 'id' . '"';
    }

}

?>

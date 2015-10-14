<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of file_upload
 *
 * @author Kiko
 */
class file_upload {

    private $archivo=null;
    private $tamano;
    private $direccion;
    private $tamanoMax=100000;

    public function __construct($archivoN = null) {
        if ($archivoN != null && $_FILES["archivo"]["size"]<=$tamanoMax) {
            echo "se ha subido el archivo";
            $this->$archivo = $archivoN;
        } else {
            echo "nose ha subido el archivo";
        };
    }

    public function quitarArchivo() {
        unlink($this->$direccion);
    }

    public function setamanoArchivo($tamanoM) {
        $this->tamano = $tamanoM;
    }

    public function getLocalizacion() {
        return $this->direccion;
    }

    public function getTamano() {
        return $this->$_FILES["archivo"]["size"];
    }
    
    public function getExtension() {
        return $this->$_FILES["archivo"]["type"];
    }

     public function getNombre() {
        return $this->$_FILES["archivo"]["name"];
    }
     public function getNombreTemporal() {
        return $this->$_FILES["archivo"]["tmp_name"];
    }
    
    public function cambiarTamanoMax($tamanoMaxNuevo){
        $this->tamanoMax=$tamanoMaxNuevo;
    }
}
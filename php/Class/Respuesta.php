<?php
class Respuesta{
    private $id;
    private $solicitud;
    private $usuario;
    private $respuesta;
    private $fecha;

    public function __construct($id,$solicitud,$usuario,$respuesta,$fecha){
        $this->id = $id;
        $this->solicitud = $solicitud;
        $this->usuario = $usuario;
        $this->respuesta = $respuesta;
        $this->fecha = $fecha;
    }

    public function getId(){
        return $this->id;
    }

    public function getSolicitud(){
        return $this->solicitud;
    }

    public function getUsuario(){
        return $this->usuario;
    }

    public function getRespuesta(){
        return $this->respuesta;
    }

    public function getFecha(){
        return $this->fecha;
    }
}
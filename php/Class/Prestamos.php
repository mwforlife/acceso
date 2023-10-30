<?php
class Prestamos{
    private $id;
    private $estudiante;
    private $marca;
    private $modelo;
    private $serie;
    private $inventario;
    private $fecha_prestamo;
    private $fecha_devolucion;
    private $estado;
    private $documento_firmado;
    private $registro;

    public function __construct($id, $estudiante, $marca, $modelo, $serie, $inventario, $fecha_prestamo, $fecha_devolucion, $estado, $documento_firmado, $registro){
        $this->id = $id;
        $this->estudiante = $estudiante;
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->serie = $serie;
        $this->inventario = $inventario;
        $this->fecha_prestamo = $fecha_prestamo;
        $this->fecha_devolucion = $fecha_devolucion;
        $this->estado = $estado;
        $this->documento_firmado = $documento_firmado;
        $this->registro = $registro;
    }

    public function getId(){
        return $this->id;
    }

    public function getEstudiante(){
        return $this->estudiante;
    }

    public function getMarca(){
        return $this->marca;
    }

    public function getModelo(){
        return $this->modelo;
    }

    public function getSerie(){
        return $this->serie;
    }

    public function getInventario(){
        return $this->inventario;
    }

    public function getFechaPrestamo(){
        return $this->fecha_prestamo;
    }

    public function getFechaDevolucion(){
        return $this->fecha_devolucion;
    }

    public function getEstado(){
        return $this->estado;
    }

    public function getDocumentoFirmado(){
        return $this->documento_firmado;
    }

    public function getRegistro(){
        return $this->registro;
    }
}
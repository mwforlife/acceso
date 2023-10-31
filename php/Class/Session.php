<?php
class Session{
    private $id;
    private $alumno;
    private $ingreso;
    private $salida;
    private $id_dispositivo;
    private $navegador;
    private $ip;
    private $estado;
    public function __construct($id, $alumno, $ingreso, $salida, $id_dispositivo, $navegador, $ip, $estado){
        $this->id = $id;
        $this->alumno = $alumno;
        $this->ingreso = $ingreso;
        $this->salida = $salida;
        $this->id_dispositivo = $id_dispositivo;
        $this->navegador = $navegador;
        $this->ip = $ip;
        $this->estado = $estado;
    }
    public function getId(){
        return $this->id;
    }
    public function getAlumno(){
        return $this->alumno;
    }
    public function getIngreso(){
        return $this->ingreso;
    }
    public function getSalida(){
        return $this->salida;
    }
    public function getIdDispositivo(){
        return $this->id_dispositivo;
    }
    public function getNavegador(){
        return $this->navegador;
    }
    public function getIp(){
        return $this->ip;
    }
    public function getEstado(){
        return $this->estado;
    }
}
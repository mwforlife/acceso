<?php
class Solicitud{
    private $id;
    private $titulo;
    private $objetivo;
    private $departamento;
    private $descripcion;
    private $limite;
    private $fechainicio;
    private $fechatermino;
    private $estado;
    private $dirigido;
    private $usuario;
    private $fecha;

    public function __construct($id,$titulo,$objetivo,$departamento,$descripcion,$limite,$fechainicio,$fechatermino,$estado,$dirigido,$usuario,$fecha){
        $this->id = $id;
        $this->titulo = $titulo;
        $this->objetivo = $objetivo;
        $this->departamento = $departamento;
        $this->descripcion = $descripcion;
        $this->limite = $limite;
        $this->fechainicio = $fechainicio;
        $this->fechatermino = $fechatermino;
        $this->estado = $estado;
        $this->dirigido = $dirigido;
        $this->usuario = $usuario;
        $this->fecha = $fecha;
    }

    public function getId(){
        return $this->id;
    }

    public function getTitulo(){
        return $this->titulo;
    }

    public function getObjetivo(){
        return $this->objetivo;
    }

    public function getDepartamento(){
        return $this->departamento;
    }

    public function getDescripcion(){
        return $this->descripcion;
    }

    public function getLimite(){
        return $this->limite;
    }

    public function getFechaInicio(){
        return $this->fechainicio;
    }

    public function getFechaTermino(){
        return $this->fechatermino;
    }

    public function getEstado(){
        return $this->estado;
    }

    public function getDirigido(){
        return $this->dirigido;
    }

    public function getUsuario(){
        return $this->usuario;
    }

    public function getFecha(){
        return $this->fecha;
    }
    
}

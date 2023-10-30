<?php
class Derivados{
    private $id;
    private $id_alu;
    private $alumno;
    private $curso;
    private $evaluacion_realizada;
    private $observacion;
    private $fecha;

    public function __construct($id, $id_alu, $alumno, $curso, $evaluacion_realizada, $observacion, $fecha){
        $this->id = $id;
        $this->id_alu = $id_alu;
        $this->alumno = $alumno;
        $this->curso = $curso;
        $this->evaluacion_realizada = $evaluacion_realizada;
        $this->observacion = $observacion;
        $this->fecha = $fecha;
    }

    public function getId(){
        return $this->id;
    }

    public function getIdAlu(){
        return $this->id_alu;
    }

    public function getAlumno(){
        return $this->alumno;
    }

    public function getCurso(){
        return $this->curso;
    }

    public function getEvaluacionRealizada(){
        return $this->evaluacion_realizada;
    }

    public function getObservacion(){
        return $this->observacion;
    }

    public function getFecha(){
        return $this->fecha;
    }

    
}
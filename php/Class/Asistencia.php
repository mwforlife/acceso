<?php
class Asistencia
{
    private $id;
    private $alumno;
    private $estado;
    private $fecha;

    public function __construct($id, $alumno, $estado, $fecha)
    {
        $this->id = $id;
        $this->alumno = $alumno;
        $this->estado = $estado;
        $this->fecha = $fecha;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getAlumno()
    {
        return $this->alumno;
    }

    public function getEstado()
    {
        return $this->estado;
    }

    public function getFecha()
    {
        return $this->fecha;
    }
}

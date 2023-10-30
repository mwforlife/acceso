<?php
class Licencia
{
    private $id;
    private $alumno;
    private $fecha_inicio;
    private $fecha_termino;
    private $motivo;
    private $documento;
    private $registro;

    public function __construct($id, $alumno, $fecha_inicio, $fecha_termino, $motivo, $documento, $registro)
    {
        $this->id = $id;
        $this->alumno = $alumno;
        $this->fecha_inicio = $fecha_inicio;
        $this->fecha_termino = $fecha_termino;
        $this->motivo = $motivo;
        $this->documento = $documento;
        $this->registro = $registro;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getAlumno()
    {
        return $this->alumno;
    }

    public function getFechaInicio()
    {
        return $this->fecha_inicio;
    }

    public function getFechaTermino()
    {
        return $this->fecha_termino;
    }

    public function getMotivo()
    {
        return $this->motivo;
    }

    public function getDocumento()
    {
        return $this->documento;
    }

    public function getRegistro()
    {
        return $this->registro;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function setAlumno($alumno)
    {
        $this->alumno = $alumno;
    }

    public function setFechaInicio($fecha_inicio)
    {
        $this->fecha_inicio = $fecha_inicio;
    }

    public function setFechaTermino($fecha_termino)
    {
        $this->fecha_termino = $fecha_termino;
    }

    public function setMotivo($motivo)
    {
        $this->motivo = $motivo;
    }

    public function setDocumento($documento)
    {
        $this->documento = $documento;
    }

    public function setRegistro($registro)
    {
        $this->registro = $registro;
    }
}

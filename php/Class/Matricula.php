<?php
class Matricula
{
    private $id;
    private $alumno;
    private $curso;
    private $ano;
    private $estado;
    private $tipoalumno;
    private $fechaMatricula;
    private $traslado;
    private $religion;
    private $religiontext;

    public function __construct($id, $alumno, $curso, $ano, $estado, $tipoalumno, $fechaMatricula, $traslado, $religion, $religiontext)
    {
        $this->id = $id;
        $this->alumno = $alumno;
        $this->curso = $curso;
        $this->ano = $ano;
        $this->estado = $estado;
        $this->tipoalumno = $tipoalumno;
        $this->fechaMatricula = $fechaMatricula;
        $this->traslado = $traslado;
        $this->religion = $religion;
        $this->religiontext = $religiontext;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getAlumno()
    {
        return $this->alumno;
    }

    public function getCurso()
    {
        return $this->curso;
    }

    public function getAno()
    {
        return $this->ano;
    }

    public function getEstado()
    {
        return $this->estado;
    }

    public function getTipoalumno()
    {
        return $this->tipoalumno;
    }

    public function getFechaMatricula()
    {
        return $this->fechaMatricula;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function setAlumno($alumno)
    {
        $this->alumno = $alumno;
    }

    public function setCurso($curso)
    {
        $this->curso = $curso;
    }

    public function setAno($ano)
    {
        $this->ano = $ano;
    }

    public function setEstado($estado)
    {
        $this->estado = $estado;
    }

    public function setTipoalumno($tipoalumno)
    {
        $this->tipoalumno = $tipoalumno;
    }

    public function setFechaMatricula($fechaMatricula)
    {
        $this->fechaMatricula = $fechaMatricula;
    }

    public function getTraslado()
    {
        return $this->traslado;
    }

    public function setTraslado($traslado)
    {
        $this->traslado = $traslado;
    }

    public function getReligion()
    {
        return $this->religion;
    }

    public function setReligion($religion)
    {
        $this->religion = $religion;
    }

    public function getReligiontext()
    {
        return $this->religiontext;
    }

    public function setRegligiontext($religiontext)
    {
        $this->religiontext = $religiontext;
    }
}

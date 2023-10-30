<?php
class Subcentro
{
    private $id;
    private $periodo;
    private $nombre;
    private $curso;
    private $fechareunion;
    private $asistencia;
    private $justificacion;
    private $participacion;
    private $clima;
    private $tema;
    private $directiva;
    private $observaciones;
    private $material;
    private $registro;

    public function __construct($id,$periodo, $nombre, $curso, $fechareunion, $asistencia, $justificacion, $participacion, $clima, $tema, $directiva, $observaciones, $material, $registro)
    {
        $this->id = $id;
        $this->periodo = $periodo;
        $this->nombre = $nombre;
        $this->curso = $curso;
        $this->fechareunion = $fechareunion;
        $this->asistencia = $asistencia;
        $this->justificacion = $justificacion;
        $this->participacion = $participacion;
        $this->clima = $clima;
        $this->tema = $tema;
        $this->directiva = $directiva;
        $this->observaciones = $observaciones;
        $this->material = $material;
        $this->registro = $registro;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getPeriodo()
    {
        return $this->periodo;
    }
    
    public function getNombre()
    {
        return $this->nombre;
    }

    public function getCurso()
    {
        return $this->curso;
    }

    public function getFechareunion()
    {
        return $this->fechareunion;
    }

    public function getAsistencia()
    {
        return $this->asistencia;
    }

    public function getJustificacion()
    {
        return $this->justificacion;
    }

    public function getParticipacion()
    {
        return $this->participacion;
    }

    public function getClima()
    {
        return $this->clima;
    }

    public function getTema()
    {
        return $this->tema;
    }

    public function getDirectiva()
    {
        return $this->directiva;
    }

    public function getObservaciones()
    {
        return $this->observaciones;
    }

    public function getMaterial()
    {
        return $this->material;
    }

    public function getRegistro()
    {
        return $this->registro;
    }
}
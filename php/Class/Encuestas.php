<?php
class Encuestas
{
    private $id;
    private $rut;
    private $nombre;
    private $curso;
    private $peso;
    private $talla;
    private $fecha;
    private $parents;
    private $vision;
    private $audicion;
    private $caries;

    public function __construct($id, $rut, $nombre, $curso, $peso, $talla, $fecha, $parents, $vision, $audicion, $caries)
    {
        $this->id = $id;
        $this->rut = $rut;
        $this->nombre = $nombre;
        $this->curso = $curso;
        $this->peso = $peso;
        $this->talla = $talla;
        $this->fecha = $fecha;
        $this->parents = $parents;
        $this->vision = $vision;
        $this->audicion = $audicion;
        $this->caries = $caries;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getRut()
    {
        return $this->rut;
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function getCurso()
    {
        return $this->curso;
    }

    public function getPeso()
    {
        return $this->peso;
    }

    public function getTalla()
    {
        return $this->talla;
    }

    public function getFecha()
    {
        return $this->fecha;
    }

    public function getParents()
    {
        return $this->parents;
    }

    public function getVision()
    {
        return $this->vision;
    }

    public function getAudicion()
    {
        return $this->audicion;
    }

    public function getCaries()
    {
        return $this->caries;
    }
}

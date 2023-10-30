<?php
class Alumnos
{
    private $id;
    private $rut;
    private $nombre;
    private $apellido_parterno;
    private $apellido_materno;
    private $fecha_nacimiento;
    private $genero;
    private $etnia;
    private $direccion;
    private $comuna;
    private $ciudad;
    private $telefono;

    public function __construct($id, $rut, $nombre, $apellido_parterno, $apellido_materno, $fecha_nacimiento, $genero, $etnia, $direccion, $comuna, $ciudad, $telefono)
    {
        $this->id = $id;
        $this->rut = $rut;
        $this->nombre = $nombre;
        $this->apellido_parterno = $apellido_parterno;
        $this->apellido_materno = $apellido_materno;
        $this->fecha_nacimiento = $fecha_nacimiento;
        $this->genero = $genero;
        $this->etnia = $etnia;
        $this->direccion = $direccion;
        $this->comuna = $comuna;
        $this->ciudad = $ciudad;
        $this->telefono = $telefono;
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

    public function getApellido_parterno()
    {
        return $this->apellido_parterno;
    }

    public function getApellido_materno()
    {
        return $this->apellido_materno;
    }

    public function getFecha_nacimiento()
    {
        return $this->fecha_nacimiento;
    }

    public function getGenero()
    {
        return $this->genero;
    }

    public function getEtnia()
    {
        return $this->etnia;
    }

    public function getDireccion()
    {
        return $this->direccion;
    }

    public function getComuna()
    {
        return $this->comuna;
    }

    public function getCiudad()
    {
        return $this->ciudad;
    }

    public function getTelefono()
    {
        return $this->telefono;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function setRut($rut)
    {
        $this->rut = $rut;
    }

    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    public function setApellido_parterno($apellido_parterno)
    {
        $this->apellido_parterno = $apellido_parterno;
    }

    public function setApellido_materno($apellido_materno)
    {
        $this->apellido_materno = $apellido_materno;
    }

    public function setFecha_nacimiento($fecha_nacimiento)
    {
        $this->fecha_nacimiento = $fecha_nacimiento;
    }

    public function setGenero($genero)
    {
        $this->genero = $genero;
    }

    public function setEtnia($etnia)
    {
        $this->etnia = $etnia;
    }

    public function setDireccion($direccion)
    {
        $this->direccion = $direccion;
    }

    public function setComuna($comuna)
    {
        $this->comuna = $comuna;
    }

    public function setCiudad($ciudad)
    {
        $this->ciudad = $ciudad;
    }

    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;
    }
}

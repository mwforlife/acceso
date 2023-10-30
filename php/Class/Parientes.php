<?php
class Parientes
{
    private $id;
    private $rut;
    private $nombre;
    private $email;
    private $telefono;
    private $direccion;
    private $ocupacion;
    private $educacion;
    private $parentesco;
    private $alumno;

    public function __construct($id, $rut, $nombre, $email, $telefono, $direccion, $ocupacion, $educacion, $parentesco, $alumno)
    {
        $this->id = $id;
        $this->rut = $rut;
        $this->nombre = $nombre;
        $this->email = $email;
        $this->telefono = $telefono;
        $this->direccion = $direccion;
        $this->ocupacion = $ocupacion;
        $this->educacion = $educacion;
        $this->parentesco = $parentesco;
        $this->alumno = $alumno;
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

    public function getEmail()
    {
        return $this->email;
    }

    public function getTelefono()
    {
        return $this->telefono;
    }

    public function getDireccion()
    {
        return $this->direccion;
    }

    public function getOcupacion()
    {
        return $this->ocupacion;
    }

    public function getEducacion()
    {
        return $this->educacion;
    }

    public function getParentesco()
    {
        return $this->parentesco;
    }

    public function getAlumno()
    {
        return $this->alumno;
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

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;
    }

    public function setDireccion($direccion)
    {
        $this->direccion = $direccion;
    }

    public function setOcupacion($ocupacion)
    {
        $this->ocupacion = $ocupacion;
    }

    public function setEducacion($educacion)
    {
        $this->educacion = $educacion;
    }

    public function setParentesco($parentesco)
    {
        $this->parentesco = $parentesco;
    }

    public function setAlumno($alumno)
    {
        $this->alumno = $alumno;
    }
}

<?php
class Apoderados
{
    private $id;
    private $rut;
    private $nombre;
    private $email;
    private $telefono;
    private $direccion;
    private $parentesco;
    private $tipoApoderado;
    private $alumno;

    public function __construct($id, $rut, $nombre, $email, $telefono, $direccion, $parentesco, $tipoApoderado, $alumno)
    {
        $this->id = $id;
        $this->rut = $rut;
        $this->nombre = $nombre;
        $this->email = $email;
        $this->telefono = $telefono;
        $this->direccion = $direccion;
        $this->parentesco = $parentesco;
        $this->tipoApoderado = $tipoApoderado;
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

    public function getParentesco()
    {
        return $this->parentesco;
    }

    public function getTipoApoderado()
    {
        return $this->tipoApoderado;
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

    public function setParentesco($parentesco)
    {
        $this->parentesco = $parentesco;
    }

    public function setTipoApoderado($tipoApoderado)
    {
        $this->tipoApoderado = $tipoApoderado;
    }

    public function setAlumno($alumno)
    {
        $this->alumno = $alumno;
    }
}

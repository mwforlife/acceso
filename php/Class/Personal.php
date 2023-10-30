<?php

class Personal
{
    private $id;
    private $rut;
    private $nombre;
    private $apellido;
    private $correo;
    private $sexo;
    private $tipo;
    private $perfil;

    public function __construct($id, $rut, $nombre, $apellido, $correo,$sexo, $tipo,$perfil)
    {
        $this->id = $id;
        $this->rut = $rut;
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->correo = $correo;
        $this->sexo = $sexo;
        $this->tipo = $tipo;
        $this->perfil = $perfil;
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

    public function getApellido()
    {
        return $this->apellido;
    }

    public function getCorreo()
    {
        return $this->correo;
    }

    public function getSexo()
    {
        return $this->sexo;
    }

    public function getTipo()
    {
        return $this->tipo;
    }

    public function getPerfil()
    {
        return $this->perfil;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    public function setApellido($apellido)
    {
        $this->apellido = $apellido;
    }

    public function setCorreo($correo)
    {
        $this->correo = $correo;
    }

    public function setSexo($sexo)
    {
        $this->sexo = $sexo;
    }

    public function setTipo($tipo)
    {
        $this->tipo = $tipo;
    }

    public function setPerfil($perfil)
    {
        $this->perfil = $perfil;
    }
}

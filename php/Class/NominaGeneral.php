<?php
class Nominageneral
{
    private $id;
    private $rut;
    private $nombre;
    private $apellido_paterno;
    private $apellido_materno;
    private $fec_nac;
    private $genero;
    private $etnia;
    private $curso;
    private $direccion;
    private $comuna;
    private $ciudad;
    private $telefono;
    private $estado;
    private $idapoderado;
    private $rutAporderado;
    private $nombreApoderado;
    private $emailApoderado;
    private $telefonoApoderado;
    private $direccionApoderado;
    private $parentesco;
    private $tipoApoderado;

    public function __construct($id, $rut, $nombre, $apellido_paterno, $apellido_materno, $fec_nac, $genero, $etnia, $curso, $direccion, $comuna, $ciudad, $telefono, $estado, $idapoderado, $rutAporderado, $nombreApoderado, $emailApoderado, $telefonoApoderado, $direccionApoderado, $parentesco, $tipoApoderado)
    {
        $this->id = $id;
        $this->rut = $rut;
        $this->nombre = $nombre;
        $this->apellido_paterno = $apellido_paterno;
        $this->apellido_materno = $apellido_materno;
        $this->fec_nac = $fec_nac;
        $this->genero = $genero;
        $this->etnia = $etnia;
        $this->curso = $curso;
        $this->direccion = $direccion;
        $this->comuna = $comuna;
        $this->ciudad = $ciudad;
        $this->telefono = $telefono;
        $this->estado = $estado;
        $this->idapoderado = $idapoderado;
        $this->rutAporderado = $rutAporderado;
        $this->nombreApoderado = $nombreApoderado;
        $this->emailApoderado = $emailApoderado;
        $this->telefonoApoderado = $telefonoApoderado;
        $this->direccionApoderado = $direccionApoderado;
        $this->parentesco = $parentesco;
        $this->tipoApoderado = $tipoApoderado;
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
    public function getApellido_paterno()
    {
        return $this->apellido_paterno;
    }
    public function getApellido_materno()
    {
        return $this->apellido_materno;
    }
    public function getFec_nac()
    {
        return $this->fec_nac;
    }
    public function getGenero()
    {
        return $this->genero;
    }
    public function getEtnia()
    {
        return $this->etnia;
    }

    public function getCurso()
    {
        return $this->curso;
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
    public function getEstado()
    {
        return $this->estado;
    }
    public function getIdapoderado()
    {
        return $this->idapoderado;
    }
    public function getRutAporderado()
    {
        return $this->rutAporderado;
    }
    public function getNombreApoderado()
    {
        return $this->nombreApoderado;
    }
    public function getEmailApoderado()
    {
        return $this->emailApoderado;
    }
    public function getTelefonoApoderado()
    {
        return $this->telefonoApoderado;
    }
    public function getDireccionApoderado()
    {
        return $this->direccionApoderado;
    }
    public function getParentesco()
    {
        return $this->parentesco;
    }
    public function getTipoApoderado()
    {
        return $this->tipoApoderado;
    }
}

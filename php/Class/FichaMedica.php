<?php
class FichaMedica
{
    private $id;
    private $alumno;
    private $peso;
    private $talla;
    private $grupoSanguino;

    private $factorRH;
    private $enfermedadanterior;
    private $enfermedadanteriortext;
    private $suecuelas;
    private $suecuelastext;
    private $prevision;
    private $diabetes;
    private $diabetestext;
    private $celiaca;
    private $celiacatext;
    private $asma;
    private $asmatext;
    private $otro;
    private $otrotext;
    private $alimentacion;
    private $alimentaciontratamiento;
    private $medicamento;
    private $medicamentotratamiento;
    private $respiratorias;
    private $respiratoriastratamiento;
    private $contacto;
    private $contactotratamiento;
    private $intoleracia;
    private $intoleraciatratamiento;
    private $otrasalergias;
    private $otrasalergiastext;
    private $ultimocontrol;
    private $operaciones;
    private $operacionestext;
    private $accidentes;
    private $accidentestext;
    private $auditivas;
    private $auditivastext;
    private $visuales;
    private $visualestext;
    private $otrasdefiniciencias;
    private $otrasdefinicienciastext;
    private $compromiso;
    private $jurado;

    public function __construct($id, $alumno, $peso, $talla, $grupoSanguino, $factorRH, $enfermedadanterior, $enfermedadanteriortext, $suecuelas, $suecuelastext, $prevision, $diabetes, $diabetestext, $celiaca, $celiacatext, $asma, $asmatext, $otro, $otrotext, $alimentacion, $alimentaciontratamiento, $medicamento, $medicamentotratamiento, $respiratorias, $respiratoriastratamiento, $contacto, $contactotratamiento, $intoleracia, $intoleraciatratamiento, $otrasalergias, $otrasalergiastext, $ultimocontrol, $operaciones, $operacionestext, $accidentes, $accidentestext, $auditivas, $auditivastext, $visuales, $visualestext, $otrasdefiniciencias, $otrasdefinicienciastext, $compromiso, $jurado)
    {
        $this->id = $id;
        $this->alumno = $alumno;
        $this->peso = $peso;
        $this->talla = $talla;
        $this->grupoSanguino = $grupoSanguino;
        $this->factorRH = $factorRH;
        $this->enfermedadanterior = $enfermedadanterior;
        $this->enfermedadanteriortext = $enfermedadanteriortext;
        $this->suecuelas = $suecuelas;
        $this->suecuelastext = $suecuelastext;
        $this->prevision = $prevision;
        $this->diabetes = $diabetes;
        $this->diabetestext = $diabetestext;
        $this->celiaca = $celiaca;
        $this->celiacatext = $celiacatext;
        $this->asma = $asma;
        $this->asmatext = $asmatext;
        $this->otro = $otro;
        $this->otrotext = $otrotext;
        $this->alimentacion = $alimentacion;
        $this->alimentaciontratamiento = $alimentaciontratamiento;
        $this->medicamento = $medicamento;
        $this->medicamentotratamiento = $medicamentotratamiento;
        $this->respiratorias = $respiratorias;
        $this->respiratoriastratamiento = $respiratoriastratamiento;
        $this->contacto = $contacto;
        $this->contactotratamiento = $contactotratamiento;
        $this->intoleracia = $intoleracia;
        $this->intoleraciatratamiento = $intoleraciatratamiento;
        $this->otrasalergias = $otrasalergias;
        $this->otrasalergiastext = $otrasalergiastext;
        $this->ultimocontrol = $ultimocontrol;
        $this->operaciones = $operaciones;
        $this->operacionestext = $operacionestext;
        $this->accidentes = $accidentes;
        $this->accidentestext = $accidentestext;
        $this->auditivas = $auditivas;
        $this->auditivastext = $auditivastext;
        $this->visuales = $visuales;
        $this->visualestext = $visualestext;
        $this->otrasdefiniciencias = $otrasdefiniciencias;
        $this->otrasdefinicienciastext = $otrasdefinicienciastext;
        $this->compromiso = $compromiso;
        $this->jurado = $jurado;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getAlumno()
    {
        return $this->alumno;
    }

    public function getPeso()
    {
        return $this->peso;
    }

    public function getTalla()
    {
        return $this->talla;
    }

    public function getGrupoSanguino()
    {
        return $this->grupoSanguino;
    }

    public function getFactorRH()
    {
        return $this->factorRH;
    }

    public function getEnfermedadanterior()
    {
        return $this->enfermedadanterior;
    }

    public function getEnfermedadanteriortext()
    {
        return $this->enfermedadanteriortext;
    }

    public function getSuecuelas()
    {
        return $this->suecuelas;
    }

    public function getSuecuelastext()
    {
        return $this->suecuelastext;
    }

    public function getPrevision()
    {
        return $this->prevision;
    }

    public function getDiabetes()
    {
        return $this->diabetes;
    }

    public function getDiabetestext()
    {
        return $this->diabetestext;
    }

    public function getCeliaca()
    {
        return $this->celiaca;
    }

    public function getCeliacatext()
    {
        return $this->celiacatext;
    }

    public function getAsma()
    {
        return $this->asma;
    }

    public function getAsmatext()
    {
        return $this->asmatext;
    }

    public function getOtro()
    {
        return $this->otro;
    }

    public function getOtrotext()
    {
        return $this->otrotext;
    }

    public function getAlimentacion()
    {
        return $this->alimentacion;
    }

    public function getAlimentaciontratamiento()
    {
        return $this->alimentaciontratamiento;
    }

    public function getMedicamento()
    {
        return $this->medicamento;
    }

    public function getMedicamentotratamiento()
    {
        return $this->medicamentotratamiento;
    }

    public function getRespiratorias()
    {
        return $this->respiratorias;
    }

    public function getRespiratoriastratamiento()
    {
        return $this->respiratoriastratamiento;
    }

    public function getContacto()
    {
        return $this->contacto;
    }

    public function getContactotratamiento()
    {
        return $this->contactotratamiento;
    }

    public function getIntoleracia()
    {
        return $this->intoleracia;
    }

    public function getIntoleraciatratamiento()
    {
        return $this->intoleraciatratamiento;
    }

    public function getOtrasalergias()
    {
        return $this->otrasalergias;
    }

    public function getOtrasalergiastext()
    {
        return $this->otrasalergiastext;
    }

    public function getUltimocontrol()
    {
        return $this->ultimocontrol;
    }

    public function getOperaciones()
    {
        return $this->operaciones;
    }

    public function getOperacionestext()
    {
        return $this->operacionestext;
    }

    public function getAccidentes()
    {
        return $this->accidentes;
    }

    public function getAccidentestext()
    {
        return $this->accidentestext;
    }

    public function getAuditivas()
    {
        return $this->auditivas;
    }

    public function getAuditivastext()
    {
        return $this->auditivastext;
    }

    public function getVisuales()
    {
        return $this->visuales;
    }

    public function getVisualestext()
    {
        return $this->visualestext;
    }

    public function getOtrasdefiniciencias()
    {
        return $this->otrasdefiniciencias;
    }

    public function getOtrasdefinicienciastext()
    {
        return $this->otrasdefinicienciastext;
    }

    public function getCompromiso()
    {
        return $this->compromiso;
    }

    public function getJurado()
    {
        return $this->jurado;
    }
}

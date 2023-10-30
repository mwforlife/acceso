<?php
class PIE{
    private $id;
    private $alumno;
    private $tipoestudiante;
    private $fechaingreso;
    private $ano_ingreso;
    private $diagnostico_actual;
    private $educadora;
    private $apoyofono;
    private $apoyopsico;
    private $deriopsi;
    private $deriespe;
    private $deriexterno;
    private $deriexternoespe;
    private $diagonuevoano;
    private $diagonuevo;
    private $observacion;
    private $fecha;
    private $ingresoestablecimiento;

    public function __construct($id, $alumno, $tipoestudiante, $fechaingreso, $ano_ingreso, $diagnostico_actual, $educadora, $apoyofono, $apoyopsico, $deriopsi, $deriespe, $deriexterno, $deriexternoespe, $diagonuevoano, $diagonuevo, $observacion, $fecha, $ingresoestablecimiento){
        $this->id = $id;
        $this->alumno = $alumno;
        $this->tipoestudiante = $tipoestudiante;
        $this->fechaingreso = $fechaingreso;
        $this->ano_ingreso = $ano_ingreso;
        $this->diagnostico_actual = $diagnostico_actual;
        $this->educadora = $educadora;
        $this->apoyofono = $apoyofono;
        $this->apoyopsico = $apoyopsico;
        $this->deriopsi = $deriopsi;
        $this->deriespe = $deriespe;
        $this->deriexterno = $deriexterno;
        $this->deriexternoespe = $deriexternoespe;
        $this->diagonuevoano = $diagonuevoano;
        $this->diagonuevo = $diagonuevo;
        $this->observacion = $observacion;
        $this->fecha = $fecha;
        $this->ingresoestablecimiento = $ingresoestablecimiento;
    }

    public function getId(){
        return $this->id;
    }

    public function getAlumno(){
        return $this->alumno;
    }

    public function getTipoestudiante(){
        return $this->tipoestudiante;
    }

    public function getFechaingreso(){
        return $this->fechaingreso;
    }

    public function getAno_ingreso(){
        return $this->ano_ingreso;
    }

    public function getDiagnostico_actual(){
        return $this->diagnostico_actual;
    }

    public function getEducadora(){
        return $this->educadora;
    }

    public function getApoyofono(){
        return $this->apoyofono;
    }

    public function getApoyopsico(){
        return $this->apoyopsico;
    }

    public function getDeriopsi(){
        return $this->deriopsi;
    }

    public function getDeriespe(){
        return $this->deriespe;
    }

    public function getDeriexterno(){
        return $this->deriexterno;
    }

    public function getDeriexternoespe(){
        return $this->deriexternoespe;
    }

    public function getDiagonuevoano(){
        return $this->diagonuevoano;
    }

    public function getDiagonuevo(){
        return $this->diagonuevo;
    }

    public function getObservacion(){
        return $this->observacion;
    }

    public function getFecha(){
        return $this->fecha;
    }

    public function getIngresoestablecimiento(){
        return $this->ingresoestablecimiento;
    }

}
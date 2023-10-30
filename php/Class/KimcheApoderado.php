<?php
class KimcheApoderado{
    /*RBD COLEGIO	AÑO	Código de enseñanza	Curso Grado	Curso Letra 	Rut estudiante sin Digito Verificador	Nombre Estudiante	Apellido Estudiante	Rut	Dígito Verificador	Nombres	Apellido Paterno	Apellido Materno	Género	Email	Móvil	Fecha Nacimiento	Es primario ?	Es contacto de Emergencia	Relación	Último nivel de estudios	Región	Comuna	Dirección	Rut válido	Teléfono válido	Completadas columnas obligatorias
*/
    private $RBD;
    private $Ano;
    private $CodigoEducacional;
    private $grado;
    private $Letra;
    private $Rut;
    private $nombreestudiante;
    private $apellidoestudiante;
    private $rutapoderado;
    private $DigitoVerificador;
    private $Nombres;
    private $ApellidoPaterno;
    private $ApellidoMaterno;
    private $Genero;
    private $Email;
    private $Movil;
    private $FechaNacimiento;
    private $EsPrimario;
    private $EsContactoEmergencia;
    private $Relacion;
    private $UltimoNivelEstudios;
    private $Region;
    private $Comuna;
    private $Direccion;
    private $RutValido;
    private $TelefonoValido;
    private $CompletadasColumnasObligatorias;
    
    public function __construct($RBD, $Ano, $CodigoEducacional, $grado , $Letra, $Rut, $nombreestudiante, $apellidoestudiante, $rutapoderado, $DigitoVerificador, $Nombres, $ApellidoPaterno, $ApellidoMaterno, $Genero, $Email, $Movil, $FechaNacimiento, $EsPrimario, $EsContactoEmergencia, $Relacion, $UltimoNivelEstudios, $Region, $Comuna, $Direccion, $RutValido, $TelefonoValido, $CompletadasColumnasObligatorias) {
        $this->RBD = $RBD;
        $this->Ano = $Ano;
        $this->CodigoEducacional = $CodigoEducacional;
        $this->grado = $grado;
        $this->Letra = $Letra;
        $this->Rut = $Rut;
        $this->nombreestudiante = $nombreestudiante;
        $this->apellidoestudiante = $apellidoestudiante;
        $this->rutapoderado = $rutapoderado;
        $this->DigitoVerificador = $DigitoVerificador;
        $this->Nombres = $Nombres;
        $this->ApellidoPaterno = $ApellidoPaterno;
        $this->ApellidoMaterno = $ApellidoMaterno;
        $this->Genero = $Genero;
        $this->Email = $Email;
        $this->Movil = $Movil;
        $this->FechaNacimiento = $FechaNacimiento;
        $this->EsPrimario = $EsPrimario;
        $this->EsContactoEmergencia = $EsContactoEmergencia;
        $this->Relacion = $Relacion;
        $this->UltimoNivelEstudios = $UltimoNivelEstudios;
        $this->Region = $Region;
        $this->Comuna = $Comuna;
        $this->Direccion = $Direccion;
        $this->RutValido = $RutValido;
        $this->TelefonoValido = $TelefonoValido;
        $this->CompletadasColumnasObligatorias = $CompletadasColumnasObligatorias;
    }

    public function getRBD() {
        return $this->RBD;
    }

    public function getAno() {
        return $this->Ano;
    }

    public function getCodigoEducacional() {
        return $this->CodigoEducacional;
    }
    
    public function getGrado() {
        return $this->grado;
    }

    public function getLetra() {
        return $this->Letra;
    }

    public function getRut() {
        return $this->Rut;
    }

    public function getNombreestudiante() {
        return $this->nombreestudiante;
    }

    public function getApellidoestudiante() {
        return $this->apellidoestudiante;
    }

    public function getRutapoderado() {
        return $this->rutapoderado;
    }

    public function getDigitoVerificador() {
        return $this->DigitoVerificador;
    }

    public function getNombres() {
        return $this->Nombres;
    }

    public function getApellidoPaterno() {
        return $this->ApellidoPaterno;
    }

    public function getApellidoMaterno() {
        return $this->ApellidoMaterno;
    }

    public function getGenero() {
        return $this->Genero;
    }

    public function getEmail() {
        return $this->Email;
    }

    public function getMovil() {
        return $this->Movil;
    }

    public function getFechaNacimiento() {
        return $this->FechaNacimiento;
    }

    public function getEsPrimario() {
        return $this->EsPrimario;
    }

    public function getEsContactoEmergencia() {
        return $this->EsContactoEmergencia;
    }

    public function getRelacion() {
        return $this->Relacion;
    }

    public function getUltimoNivelEstudios() {
        return $this->UltimoNivelEstudios;
    }

    public function getRegion() {
        return $this->Region;
    }

    public function getComuna() {
        return $this->Comuna;
    }

    public function getDireccion() {
        return $this->Direccion;
    }

    public function getRutValido() {
        return $this->RutValido;
    }

    public function getTelefonoValido() {
        return $this->TelefonoValido;
    }

    public function getCompletadasColumnasObligatorias() {
        return $this->CompletadasColumnasObligatorias;
    }
            
}
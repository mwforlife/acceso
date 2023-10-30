<?php
class Kimche{
    /*RBD COLEGIO	AÑO	Código Educacional	Nivel	Letra	Nombre Curso	Rut	Dígito Verificador	Apellido Paterno	Apellido Materno	Nombres	Estado Matrícula	Género	Número Matrícula	Fecha Matrícula	Número Lista	Fecha Nacimiento	Nacionalidad	Móvil	Email	Pro Retención	Alumno PIE	Región	Comuna	Dirección	Prevención Salud	Observación adicional de salud	Tipo de Sangre	Verificaciones - Tipo de enseñanza	Grado	Verificación grado propuesta 2	Rut válido	Teléfono válido	Completadas columnas obligatorias							
*/
 private $RBD;
    private $Ano;
    private $CodigoEducacional;
    private $Nivel;
    private $Letra;
    private $NombreCurso;
    private $Rut;
    private $DigitoVerificador;
    private $ApellidoPaterno;
    private $ApellidoMaterno;
    private $Nombres;
    private $EstadoMatricula;
    private $Genero;
    private $NumeroMatricula;
    private $FechaMatricula;
    private $NumeroLista;
    private $FechaNacimiento;
    private $Nacionalidad;
    private $Movil;
    private $Email;
    private $ProRetencion;
    private $AlumnoPie;
    private $Region;
    private $Comuna;
    private $Direccion;
    private $PrevencionSalud;
    private $ObservacionAdicionalSalud;
    private $TipoSangre;
    private $VerificacionesTipoEnsenanza;
    private $Grado;
    private $VerificacionGradoPropuesta2;
    private $RutValido;
    private $TelefonoValido;
    private $CompletadasColumnasObligatorias;
    
    public function __construct($RBD, $Ano, $CodigoEducacional, $Nivel, $Letra, $NombreCurso, $Rut, $DigitoVerificador, $ApellidoPaterno, $ApellidoMaterno, $Nombres, $EstadoMatricula, $Genero, $NumeroMatricula, $FechaMatricula, $NumeroLista, $FechaNacimiento, $Nacionalidad, $Movil, $Email, $ProRetencion, $AlumnoPie, $Region, $Comuna, $Direccion, $PrevencionSalud, $ObservacionAdicionalSalud, $TipoSangre, $VerificacionesTipoEnsenanza, $Grado, $VerificacionGradoPropuesta2, $RutValido, $TelefonoValido, $CompletadasColumnasObligatorias) {
        $this->RBD = $RBD;
        $this->Ano = $Ano;
        $this->CodigoEducacional = $CodigoEducacional;
        $this->Nivel = $Nivel;
        $this->Letra = $Letra;
        $this->NombreCurso = $NombreCurso;
        $this->Rut = $Rut;
        $this->DigitoVerificador = $DigitoVerificador;
        $this->ApellidoPaterno = $ApellidoPaterno;
        $this->ApellidoMaterno = $ApellidoMaterno;
        $this->Nombres = $Nombres;
        $this->EstadoMatricula = $EstadoMatricula;
        $this->Genero = $Genero;
        $this->NumeroMatricula = $NumeroMatricula;
        $this->FechaMatricula = $FechaMatricula;
        $this->NumeroLista = $NumeroLista;
        $this->FechaNacimiento = $FechaNacimiento;
        $this->Nacionalidad = $Nacionalidad;
        $this->Movil = $Movil;
        $this->Email = $Email;
        $this->ProRetencion = $ProRetencion;
        $this->AlumnoPie = $AlumnoPie;
        $this->Region = $Region;
        $this->Comuna = $Comuna;
        $this->Direccion = $Direccion;
        $this->PrevencionSalud = $PrevencionSalud;
        $this->ObservacionAdicionalSalud = $ObservacionAdicionalSalud;
        $this->TipoSangre = $TipoSangre;
        $this->VerificacionesTipoEnsenanza = $VerificacionesTipoEnsenanza;
        $this->Grado = $Grado;
        $this->VerificacionGradoPropuesta2 = $VerificacionGradoPropuesta2;
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

    public function getNivel() {
        return $this->Nivel;
    }

    public function getLetra() {
        return $this->Letra;
    }

    public function getNombreCurso() {
        return $this->NombreCurso;
    }

    public function getRut() {
        return $this->Rut;
    }

    public function getDigitoVerificador() {
        return $this->DigitoVerificador;
    }

    public function getApellidoPaterno() {
        return $this->ApellidoPaterno;
    }

    public function getApellidoMaterno() {
        return $this->ApellidoMaterno;
    }

    public function getNombres() {
        return $this->Nombres;
    }

    public function getEstadoMatricula() {
        return $this->EstadoMatricula;
    }

    public function getGenero() {
        return $this->Genero;
    }

    public function getNumeroMatricula() {
        return $this->NumeroMatricula;
    }

    public function getFechaMatricula() {
        return $this->FechaMatricula;
    }

    public function getNumeroLista() {
        return $this->NumeroLista;
    }

    public function getFechaNacimiento() {
        return $this->FechaNacimiento;
    }

    public function getNacionalidad() {
        return $this->Nacionalidad;
    }

    public function getMovil() {
        return $this->Movil;
    }

    public function getEmail() {
        return $this->Email;
    }

    public function getProRetencion() {
        return $this->ProRetencion;
    }

    public function getAlumnoPie() {
        return $this->AlumnoPie;
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

    public function getPrevencionSalud() {
        return $this->PrevencionSalud;
    }

    public function getObservacionAdicionalSalud() {
        return $this->ObservacionAdicionalSalud;
    }

    public function getTipoSangre() {
        return $this->TipoSangre;
    }

    public function getVerificacionesTipoEnsenanza() {
        return $this->VerificacionesTipoEnsenanza;
    }

    public function getGrado() {
        return $this->Grado;
    }

    public function getVerificacionGradoPropuesta2() {
        return $this->VerificacionGradoPropuesta2;
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
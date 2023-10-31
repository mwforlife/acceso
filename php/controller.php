<?php
/*Class Import */
require 'Class/TipoPersonal.php';
require 'Class/Comunas.php';
require 'Class/Prevision.php';
require 'Class/Genero.php';
require 'Class/Etnia.php';
require 'Class/Curso.php';
require 'Class/Parentesco.php';
require 'Class/Educacion.php';
require 'Class/GrupoSanguino.php';
require 'Class/FactorRH.php';
require 'Class/NominaGeneral.php';

/****************************/
require 'Class/Alumnos.php';
require 'Class/Matricula.php';
require 'Class/Apoderados.php';
require 'Class/Personal.php';
require 'Class/Usuarios.php';
require 'Class/Parientes.php';
require 'Class/Encuestas.php';
require 'Class/FichaMedica.php';
require 'Class/Kimche.php';
require 'Class/KimcheApoderado.php';
require 'Class/Acceso.php';
require 'Class/Solicitud.php';
require 'Class/Respuesta.php';
require 'Class/Subcentro.php';
require 'Class/Asistencia.php';
require 'Class/Licencia.php';
require 'Class/Prestamos.php';
require 'Class/Session.php';

/******************** */
require 'Class/Derivados.php';
require 'Class/PIE.php';

class Controller{
     /*Host */
     private $host = 'localhost';
     public $mi;
 
     /*Variables BD Local
     private $user = 'root';
     private $pass = '';
     private $db = 'gestionescolar';
 
     /*Variables BD Remota*/
     private $user = 'colegi38_informatica';
     private $pass = 'informatica2022';
     private $db = 'colegi38_bd';
 
     /*Conection Method */
     public function conexion()
     {
         $this->mi = new mysqli($this->host, $this->user, $this->pass, $this->db);
         $this->mi->set_charset('utf8');
         if ($this->mi->connect_errno) {
             echo 'Error Conexion: ' . $this->mi->connect_error;
         }
     }
 
     public function escape_string($string)
     {
         $this->conexion();
         return $this->mi->real_escape_string($string);
     }
 
     /*Close Method */
     public function desconexion()
     {
         $this->mi->close();
     }
     /*Insert Query Method */
 
     public function query($sql)
     {
         $this->conexion();
         $result = $this->mi->query($sql);
         $this->desconexion();
         return json_encode($result);
     }

     //Search Student By RUT
     public function buscarEstudianteByRUT($rut, $ano)
    {
        $this->conexion();
        $result = $this->mi->query("select alumnos.id_alu as id, id_est as estado, id_estmat, curso.id_cur as id_cur, curso.nombre as curso_nom, alumnos.rut as 'Rut Alumno', alumnos.nombres as Nombre, ape_paterno as 'Apellido Paterno', ape_materno as 'Apellido Materno', fecnac as 'Fecha de Nacimiento', genero.id_gen as 'Genero', etnia.nombre as 'Etnia', alumnos.direccion as 'Direccion', nom_com as Comuna, ciudad, alumnos.telefono as Telefono from curso, detalle_matricula,alumnos,genero,etnia,comunas where curso.id_cur=detalle_matricula.id_cur and genero.id_gen=alumnos.id_gen and etnia.id_et=alumnos.id_et and comunas.id_com=alumnos.id_com and detalle_matricula.id_alu=alumnos.id_alu and ano=$ano and alumnos.rut='$rut'");
        if ($rs = mysqli_fetch_array($result)) {
            $id = $rs['id'];
            $rut = $rs['Rut Alumno'];
            $nombre = $rs['Nombre'];
            $ape_pat = $rs['Apellido Paterno'];
            $ape_mat = $rs['Apellido Materno'];
            $fec_nac = date("d-m-Y", strtotime($rs['Fecha de Nacimiento']));
            $genero = $rs['Genero'];
            $etnia = $rs['Etnia'];
            $direccion = $rs['estado'];
            $comuna = $rs['id_estmat'];
            $ciudad = $rs['id_cur'];
            $telefono = $rs['curso_nom'];
            $al = new Alumnos($id, $rut, $nombre, $ape_pat, $ape_mat, $fec_nac, $genero, $etnia, $direccion, $comuna, $ciudad, $telefono);
            $this->desconexion();
            return $al;
        }
        $this->desconexion();
        return null;
    }

    //Search Student By ID
    public function buscarEstudianteById($id, $ano)
    {
        $this->conexion();
        $result = $this->mi->query("select alumnos.id_alu as id, id_estmat, curso.id_cur as id_cur, curso.nombre as curso_nom, alumnos.rut as 'Rut Alumno', alumnos.nombres as Nombre, ape_paterno as 'Apellido Paterno', ape_materno as 'Apellido Materno', fecnac as 'Fecha de Nacimiento', genero.nombre as 'Genero', etnia.nombre as 'Etnia', alumnos.direccion as 'Direccion', nom_com as Comuna, ciudad, alumnos.telefono as Telefono from curso, detalle_matricula,alumnos,genero,etnia,comunas where curso.id_cur=detalle_matricula.id_cur and genero.id_gen=alumnos.id_gen and etnia.id_et=alumnos.id_et and comunas.id_com=alumnos.id_com and detalle_matricula.id_alu=alumnos.id_alu and ano=$ano and alumnos.id_alu='$id' and id_est=1;");
        if ($rs = mysqli_fetch_array($result)) {
            $id = $rs['id'];
            $rut = $rs['Rut Alumno'];
            $nombre = $rs['Nombre'];
            $ape_pat = $rs['Apellido Paterno'];
            $ape_mat = $rs['Apellido Materno'];
            $fec_nac = date("d-m-Y", strtotime($rs['Fecha de Nacimiento']));
            $genero = $rs['Genero'];
            $etnia = $rs['Etnia'];
            $direccion = $rs['Direccion'];
            $comuna = $rs['id_estmat'];
            $ciudad = $rs['id_cur'];
            $telefono = $rs['curso_nom'];
            $al = new Alumnos($id, $rut, $nombre, $ape_pat, $ape_mat, $fec_nac, $genero, $etnia, $direccion, $comuna, $ciudad, $telefono);
            $this->desconexion();
            return $al;
        }
        $this->desconexion();
        return null;
    }

    //Crear la session
    public function crearsesion($alumno, $dispositivo, $navegador, $ip){
        $this->conexion();
        $sql = "insert into sessiones values(null, $alumno, now(),'','$dispositivo','$navegador','$ip',1)";
        $result = $this->mi->query($sql);
        //Retornar el id del registro
        $id = $this->mi->insert_id;
        $this->desconexion();
        return $id;
    }

    //Cerrar la session
    public function cerrarsession($id){
        $this->conexion();
        $sql = "update sessiones set salida=now(), estado=2 where id=$id and estado=1";
        $result = $this->mi->query($sql);
        $this->desconexion();
        return json_encode($result);
    }

    //Buscar ultimo registro de session
    public function ultimasession($id_alu){
        $this->conexion();
        $sql = "select * from sessiones where alumno=$id_alu and estado=1 order by id desc limit 1";
        $result = $this->mi->query($sql);
        if ($rs = mysqli_fetch_array($result)) {
            $id = $rs['id'];
            $id_alu = $rs['alumno'];
            $entrada = $rs['ingreso'];
            $salida = $rs['salida'];
            $dispositivo = $rs['id_dispositivo'];
            $navegador = $rs['navegador'];
            $ip = $rs['ip'];
            $estado = $rs['estado'];
            $ses = new Session($id, $id_alu, $entrada, $salida, $dispositivo, $navegador, $ip, $estado);
            $this->desconexion();
            return $ses;
        }
        $this->desconexion();
        return null;
    }

    //Buscar registros según el id del dispositivo
    public function buscarSessionByDispositivo($dispositivo){
        $this->conexion();
        $sql = "select sessiones.id as id, alumnos.nombres as nombre, alumnos.ape_paterno as paterno, alumnos.ape_materno as materno, sessiones.ingreso as ingreso, sessiones.salida as salida, sessiones.id_dispositivo as dispositivo, sessiones.navegador as navegador, sessiones.ip as ip, sessiones.estado as estado from sessiones, alumnos where sessiones.alumno=alumnos.id_alu and sessiones.id_dispositivo='$dispositivo' order by sessiones.id desc limit 20";
        $result = $this->mi->query($sql);
        $lista = array();
        while ($rs = mysqli_fetch_array($result)) {
            $id = $rs['id'];
            $id_alu = $rs['nombre'] . ' ' . $rs['paterno'] . ' ' . $rs['materno'];
            $entrada = $rs['ingreso'];
            $salida = $rs['salida'];
            $dispositivo = $rs['dispositivo'];
            $navegador = $rs['navegador'];
            $ip = $rs['ip'];
            $estado = $rs['estado'];
            $ses = new Session($id, $id_alu, $entrada, $salida, $dispositivo, $navegador, $ip, $estado);
            $lista[] = $ses;
        }
        $this->desconexion();
        return $lista;
    }

    //Buscar registros según el id del alumno
    public function buscarSessionByAlumno($alumno){
        $this->conexion();
        $sql = "select sessiones.id as id, alumnos.nombres as nombre, alumnos.ape_paterno as paterno, alumnos.ape_materno as materno, sessiones.ingreso as ingreso, sessiones.salida as salida, sessiones.id_dispositivo as dispositivo, sessiones.navegador as navegador, sessiones.ip as ip, sessiones.estado as estado from sessiones, alumnos where sessiones.alumno=alumnos.id_alu and sessiones.alumno=$alumno order by sessiones.id desc limit 5";
        $result = $this->mi->query($sql);
        $lista = array();
        while ($rs = mysqli_fetch_array($result)) {
            $id = $rs['id'];
            $id_alu = $rs['nombre'] . ' ' . $rs['paterno'] . ' ' . $rs['materno'];
            $entrada = $rs['ingreso'];
            $salida = $rs['salida'];
            $dispositivo = $rs['dispositivo'];
            $navegador = $rs['navegador'];
            $ip = $rs['ip'];
            $estado = $rs['estado'];
            $ses = new Session($id, $id_alu, $entrada, $salida, $dispositivo, $navegador, $ip, $estado);
            $lista[] = $ses;
        }
        $this->desconexion();
        return $lista;
    }
}
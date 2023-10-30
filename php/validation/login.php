<?php
require '../controller.php';
$c = new Controller();
session_start();

if (isset($_POST['rut'])) {
    $rut = $_POST['rut'];
    $rut = str_replace('.', '', $rut);
    $rut = $c->escape_string($rut);
    $ano = date('Y');
    $estudiante = $c->buscarEstudianteByRUT($rut, $ano);
    if ($estudiante == null) {
        echo json_encode(array('status' => false, 'message' => 'Lo sentimos, no se encontró ningun registro con el RUT ingresado, verifique que el RUT ingresado sea correcto.'));
    } else {
        if ($estudiante->getDireccion() == 1) {
            if ($estudiante->getGenero() == 1) {
                echo json_encode(array('status' => true, 'message' => 'Bienvenido ' . $estudiante->getNombre() . ' ' . $estudiante->getApellido_parterno() . ' ' . $estudiante->getApellido_materno(), 'data' => $estudiante));
                $_SESSION['STUDENT_IDENTITY'] = $estudiante->getId();
                // Nombre de la cookie
                
                $cookieName = 'tablet_id';

                // Verificar si la cookie ya existe
                if (!isset($_COOKIE[$cookieName])) {
                    // La cookie no existe, entonces la creamos y asignamos un valor único
                    $tabletId = uniqid();
                    setcookie($cookieName, $tabletId, time() + 3600 * 24 * 365); // Cookie válida por 1 año

                    // Puedes realizar otras acciones aquí, si es necesario
                } else {
                    // La cookie ya existe, puedes obtener su valor
                    $tabletId = $_COOKIE[$cookieName];

                    // Realizar acciones basadas en la existencia de la cookie
                }                
                $ip = $_SERVER['REMOTE_ADDR'];
                $userAgent = $_SERVER['HTTP_USER_AGENT'];
                $navegador = '';
                // Ejemplos de detección de navegadores
                if (strpos($userAgent, 'Firefox') !== false) {
                    echo "Estás utilizando Firefox.";
                    $navegador = "Firefox";
                } elseif (strpos($userAgent, 'Chrome') !== false) {
                    echo "Estás utilizando Chrome.";
                    $navegador = "Chrome";
                } elseif (strpos($userAgent, 'Safari') !== false) {
                    echo "Estás utilizando Safari.";
                    $navegador = "Safari";
                } else {
                    echo "Navegador no reconocido.";
                    $navegador = "No detectado";
                }

                $c->crearsesion($estudiante->getId(),$cookieName,$navegador,$ip);

            } else {
                echo json_encode(array('status' => true, 'message' => 'Bienvenida ' . $estudiante->getNombre() . ' ' . $estudiante->getApellido_parterno() . ' ' . $estudiante->getApellido_materno(), 'data' => $estudiante));
            }
        } else {
            if ($estudiante->getGenero() == 1) {
                echo json_encode(array('status' => false, 'message' => 'Estimado ' . $estudiante->getNombre() . ' ' . $estudiante->getApellido_parterno() . ' ' . $estudiante->getApellido_materno() . ', le informamos que su matrícula se encuentra inactiva, favor de acercarse al docente a cargo de su curso para regularizar su situación. Gracias. estado: ' . $estudiante->getDireccion()));
            } else {
                echo json_encode(array('status' => false, 'message' => 'Estimada ' . $estudiante->getNombre() . ' ' . $estudiante->getApellido_parterno() . ' ' . $estudiante->getApellido_materno() . ', le informamos que su matrícula se encuentra inactiva, favor de acercarse al docente a cargo de su curso para regularizar su situación. Gracias. estado: ' . $estudiante->getDireccion()));
            }
        }
    }
} else {
    echo json_encode(array('status' => false, 'message' => 'No se ha recibido el RUT del estudiante. Verifique que el RUT ingresado sea correcto.'));
}
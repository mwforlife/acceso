<?php
session_start();
require 'php/controller.php';
$c = new Controller();

$id = $_SESSION['STUDENT_IDENTITY'];
$sesion = $c->ultimasession($id);
$c = $c->cerrarsession($sesion->getId());
session_unset();
header('Location: ../acceso');
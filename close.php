<?php
session_start();
require 'php/controller.php';
$c = new Controller();

$id = $_SESSION['STUDENT_IDENTITY'];
$c = $c->cerrarsession($id);
session_unset();
header('../acceso');
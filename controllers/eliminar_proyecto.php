<?php

require_once('../models/Administradores.php');
require_once('../models/Proyectos.php');

$ModeloAdministradores = new Administradores();
$ModeloAdministradores->validateSession();

$ModelProyectos = new Proyectos();
$id = $_GET['id'];
$imagen = $_GET['imagen'];
$ModelProyectos->delete($id, $imagen);




?>
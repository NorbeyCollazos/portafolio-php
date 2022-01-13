<?php

require_once('../../models/admin/Administradores.php');
require_once('../../models/admin/Proyectos.php');

$ModeloAdministradores = new Administradores();
$ModeloAdministradores->validateSession();

$ModelProyectos = new Proyectos();
$id = $_GET['id'];
$imagen = $_GET['imagen'];
$ModelProyectos->delete($id, $imagen);




?>
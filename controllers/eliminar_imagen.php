<?php

require_once('../models/Administradores.php');
require_once('../models/Imagenes.php');

$ModeloAdministradores = new Administradores();
$ModeloAdministradores->validateSession();

$ModelImagenes = new Imagenes();
$id = $_GET['id'];
$imagen = $_GET['imagen'];
$idproyectos = $_GET['idproyectos'];
$ModelImagenes->delete($id, $imagen, $idproyectos);




?>
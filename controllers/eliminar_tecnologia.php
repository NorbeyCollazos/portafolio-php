<?php

require_once('../models/Administradores.php');
require_once('../models/Tecnologias.php');

$ModeloAdministradores = new Administradores();
$ModeloAdministradores->validateSession();

$ModelTecnologias = new Tecnologias();
$id = $_GET['id'];
$ModelTecnologias->delete($id);


?>
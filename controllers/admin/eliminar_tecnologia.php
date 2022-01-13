<?php

require_once('../../models/admin/Administradores.php');
require_once('../../models/admin/Tecnologias.php');

$ModeloAdministradores = new Administradores();
$ModeloAdministradores->validateSession();

$ModelTecnologias = new Tecnologias();
$id = $_GET['id'];
$ModelTecnologias->delete($id);


?>
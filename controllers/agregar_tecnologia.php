<?php

require_once('../models/Tecnologias.php');

if($_POST){

    $titulo = $_POST['titulo'];
    $etiqueta = $_POST['etiqueta'];
    $prioridad = $_POST['prioridad'];

    $Modelo = new Tecnologias();
    $Modelo->add($titulo,$etiqueta,$prioridad);

}else{
    header('Location: ../views/login_admin.php');
}


?>
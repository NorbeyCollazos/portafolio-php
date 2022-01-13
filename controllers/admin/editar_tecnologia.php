<?php

require_once('../../models/admin/Tecnologias.php');

if($_POST){

    $id = $_POST['id'];
    $titulo = $_POST['titulo'];
    $etiqueta = $_POST['etiqueta'];
    $prioridad = $_POST['prioridad'];

    $Modelo = new Tecnologias();
    $Modelo->edit($id, $titulo, $etiqueta, $prioridad);

}else{
    header('Location: ../../views/admin/');
}


?>
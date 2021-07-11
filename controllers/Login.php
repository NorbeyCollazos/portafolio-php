<?php

require_once('../models/Administradores.php');

if($_POST){
    echo $usuario = $_POST['usuario'];
    echo $contrasena = $_POST['contrasena'];

    $Modelo = new Administradores();

    //$consulta = $Modelo->login($usuario, $contrasena);

    if($Modelo->login($usuario, $contrasena)){
        header("Location: ../views/panel_inicial.php");
    }else{
        header("Location: ../views/login_admin.php");
    }

}else{
    header("Location: ../views/login_admin.php"); 
}

?>
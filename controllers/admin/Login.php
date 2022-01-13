<?php

require_once('../../models/admin/Administradores.php');

if($_POST){
    echo $usuario = $_POST['usuario'];
    echo $contrasena = $_POST['contrasena'];

    $Modelo = new Administradores();

    //$consulta = $Modelo->login($usuario, $contrasena);

    if($Modelo->login($usuario, $contrasena)){
        header("Location: ../../views/admin/panel_inicial.php");
    }else{
        header("Location: ../../views/admin/");
    }

}else{
    header("Location: ../../views/admin/"); 
}

?>
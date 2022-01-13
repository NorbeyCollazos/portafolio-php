<?php
require_once('../../models/admin/Imagenes.php');

if($_POST){
    $descripcion = $_POST['descripcion'];
    $idproyectos = $_POST['idproyectos'];

    $file_name = $_FILES['imagen']['name'];
    $extension = pathinfo($_FILES['imagen']['name'], PATHINFO_EXTENSION); 
    $ext_formatos = array('png','jpg','jpeg','gif');

    //validamos que sea una extension validar
    if(!in_array(strtolower($extension), $ext_formatos))
        return;

    //validamos que el archivo no exceda el tamaño
    if($_FILES['imagen']['size'] > 33000003008000)
        return;

    //creamos la ruta donde se van almacenar
    $targeDir = "../../assets/img/proyectos/";

    @rmdir($targeDir);
    //creamos las carpetas si no existen
    if(!file_exists($targeDir)){
        @mkdir($targeDir,077,true);
    }

    //creamos un toquen
    $token = md5(uniqid(rand(), true));
    //asignamos el nombre de la imagen
    $file_name = $token.'.'.$extension;
    
    $add = $targeDir.$file_name;

    if(move_uploaded_file($_FILES['imagen']['tmp_name'], $add)){

        $Model = new Imagenes();
        $Model->add($file_name, $descripcion, $idproyectos);

    }



}else{
    header('Location: ../../views/admin/');
}


?>
<?php
require_once('../Conexion.php');

class Proyectos extends Conexion {

    public function __construct(){
        $this->db = parent::__construct();
    }

    public function add($titulo, $descripcion, $imagen, $urlgithub, $urldemo, $prioridad, $idtecnologias)
    {
        $statement = $this->db->prepare("INSERT INTO proyectos (titulo,descripcion,imagen,urlgithub,urldemo,prioridad,idtecnologias)
        VALUES (:titulo,:descripcion,:imagen,:urlgithub,:urldemo,:prioridad,:idtecnologias)");
        $statement->bindParam(':titulo',$titulo);
        $statement->bindParam(':descripcion',$descripcion);
        //$imgbinario = $this->db->quote($imagen);
        $statement->bindParam(':imagen',$imagen);
        $statement->bindParam(':urlgithub', $urlgithub);
        $statement->bindParam(':urldemo', $urldemo);
        $statement->bindParam(':prioridad', $prioridad);
        $statement->bindParam(':idtecnologias', $idtecnologias);
        if($statement->execute()){
            header("Location: ../views/panel_inicial.php?identab=proyectos");
        }else{
            header("Location: ../views/agregar_proyecto.php"); 
        }
    }

    public function get(){
        $rows = null;
        $statement = $this->db->prepare("SELECT P.idproyectos, P.titulo as titulo_proyecto, P.imagen, T.titulo as titulo_tecnologia, P.urlgithub, P.urldemo 
        FROM proyectos P 
        JOIN tecnologias T ON P.idtecnologias = T.idtecnologias
        ORDER BY P.prioridad ASC");
        $statement->execute();
        while($result = $statement->fetch()){
            $rows[] = $result;
        }
        return $rows;
    }

    public function getById($id){
        $rows = null;
        $statement = $this->db->prepare("SELECT P.titulo as titulo_proyecto, P.descripcion, P.imagen, P.urlgithub, P.urldemo, P.prioridad, T.titulo as titulo_tecnologia, T.idtecnologias 
        FROM proyectos P 
        JOIN tecnologias T ON P.idtecnologias = T.idtecnologias
        WHERE idproyectos = :id");
        $statement->bindParam(':id', $id);
        $statement->execute();
        while($result = $statement->fetch()){
            $rows[] = $result;
        }
        return $rows;
    }

    public function edit($id, $titulo, $descripcion, $imagen, $urlgithub, $urldemo, $prioridad, $idtecnologias)
    {
        $statement = $this->db->prepare("UPDATE proyectos SET titulo = :titulo, descripcion = :descripcion, imagen = :imagen, urlgithub = :urlgithub, urldemo = :urldemo, prioridad = :prioridad, idtecnologias = :idtecnologias
        WHERE idproyectos = :id");
        $statement->bindParam(':id',$id);
        $statement->bindParam(':titulo',$titulo);
        $statement->bindParam(':descripcion',$descripcion);
        $statement->bindParam(':imagen',$imagen);
        $statement->bindParam(':urlgithub', $urlgithub);
        $statement->bindParam(':urldemo', $urldemo);
        $statement->bindParam(':prioridad', $prioridad);
        $statement->bindParam(':idtecnologias', $idtecnologias);
        if($statement->execute()){
            header("Location: ../views/panel_inicial.php?identab=proyectos");
        }else{
            header("Location: ../views/panel_inicial.php?identab=proyectos"); 
        }
    }

    public function delete($id, $imagen){
        $statement = $this->db->prepare("DELETE FROM proyectos WHERE idproyectos = :id");
        $statement->bindParam(':id', $id);
        if($statement->execute()){
            unlink('../assets/img/proyectos/'.$imagen);//para eliminar la imagen del servidor
            header("Location: ../views/panel_inicial.php?identab=proyectos");
        }else{
            header("Location: ../views/panel_inicial.php?identab=proyectos");
        }

    }



}


?>
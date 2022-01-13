<?php

require_once('../../Conexion.php');

class Tecnologias extends Conexion{

    public function __construct(){
        $this->db = parent::__construct();
    }

    public function add($titulo, $etiqueta, $prioridad){
        $statement = $this->db->prepare("INSERT INTO tecnologias (titulo,etiqueta,prioridad) VALUES (:titulo, :etiqueta, :prioridad)");
        $statement->bindParam(':titulo', $titulo);
        $statement->bindParam(':etiqueta', $etiqueta);
        $statement->bindParam(':prioridad', $prioridad);
        if($statement->execute()){
            header("Location: ../../views/admin/panel_inicial.php");
        }else{
            header("Location: ../../views/admin/agregar_tecnologia.php");
        }
    }

    public function get(){
        $rows = null;
        $statement = $this->db->prepare("SELECT * FROM tecnologias ORDER BY prioridad ASC");
        $statement->execute();
        while($result = $statement->fetch()){
            $rows[] = $result;
        }
        return $rows;
    }

    public function getById($id){
        $rows = null;
        $statement = $this->db->prepare("SELECT * FROM tecnologias WHERE idtecnologias = :id");
        $statement->bindParam(':id', $id);
        $statement->execute();
        while($result = $statement->fetch()){
            $rows[] = $result;
        }
        return $rows;
    }

    public function edit($id, $titulo, $etiqueta, $prioridad){
        $statement = $this->db->prepare("UPDATE tecnologias SET titulo = :titulo, etiqueta = :etiqueta, prioridad = :prioridad
        WHERE idtecnologias = :id");
        $statement->bindParam(':id', $id);
        $statement->bindParam(':titulo', $titulo);
        $statement->bindParam(':etiqueta', $etiqueta);
        $statement->bindParam(':prioridad', $prioridad);
        if($statement->execute()){
            header("Location: ../../views/admin/panel_inicial.php");
        }else{
            header("Location: ../../views/admin/agregar_tecnologia.php");
        }
    }

    public function delete($id){
        $statement = $this->db->prepare("DELETE FROM tecnologias WHERE idtecnologias = :id");
        $statement->bindParam(':id',$id);
        if($statement->execute()){
            header("Location: ../../views/admin/panel_inicial.php");
        }else{
            header("Location: ../../views/admin/panel_inicial.php");
        }
    }

}


?>
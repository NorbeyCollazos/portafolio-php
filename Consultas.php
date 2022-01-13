<?php
require_once('Conexion.php');

class Consultas extends Conexion {
    public function __construct(){
        $this->db = parent::__construct();
    }

    public function getTecnologias(){
        $rows = null;
        $statement = $this->db->prepare("SELECT * FROM tecnologias ORDER BY prioridad ASC");
        $statement->execute();
        while($result = $statement->fetch()){
            $rows[] = $result;
        }
        return $rows;
    }

    public function getTitleTecnologia($idtecnologias){
        $statement = $this->db->prepare("SELECT T.titulo FROM proyectos P
        JOIN tecnologias T ON P.idtecnologias = T.idtecnologias
        WHERE P.idtecnologias = :idtecnologias");
        $statement->bindParam(':idtecnologias',$idtecnologias);
        $statement->execute();
        return $statement->fetchColumn();
    }


    public function getByIdTecnologia($idtecnologias){
        $rows = null;
        $statement = $this->db->prepare("SELECT * FROM proyectos 
        WHERE idtecnologias = :idtecnologias
        ORDER BY prioridad ASC");
        $statement->bindParam(':idtecnologias', $idtecnologias);
        $statement->execute();
        while($result = $statement->fetch()){
            $rows[] = $result;
        }
        return $rows;
    }

    

}

?>
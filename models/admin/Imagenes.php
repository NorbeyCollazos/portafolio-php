<?php
require_once('../../Conexion.php');

class Imagenes extends Conexion {

    public function __construct(){
        $this->db = parent::__construct();
    }

    public function add($imagen, $descripcion, $idproyectos){
        $statement = $this->db->prepare("INSERT INTO imagenes (urlimagen,descripcion,idproyectos)
        VALUES (:imagen,:descripcion,:idproyectos)");
        $statement->bindParam(':imagen',$imagen);
        $statement->bindParam(':descripcion',$descripcion);
        $statement->bindParam(':idproyectos',$idproyectos);
        if($statement->execute()){
            header("Location: ../../views/admin/editar_proyecto.php?id=$idproyectos");
        }else{
            header("Location: ../../views/admin/editar_proyecto.php?id=$idproyectos");
        }
    }

    public function get($idproyectos){
        $row = null;
        $statement = $this->db->prepare("SELECT * FROM imagenes WHERE idproyectos = :idproyectos");
        $statement->bindParam(':idproyectos',$idproyectos);
        $statement->execute();
        while($result = $statement->fetch()){
            $row[] = $result;
        }
        return $row;
    }

    public function getById($id){
        $row = null;
        $statement = $this->db->prepare("SELECT * FROM imagenes WHERE idimagenes = :id");
        $statement->bindParam(':id', $id);
        $statement->execute();
        while($result = $statement->fetch()){
            $row[] = $result;
        }
        return $row;
    }

    public function getByIdProyecto($idproyectos){
        $row = null;
        $statement = $this->db->prepare("SELECT * FROM imagenes WHERE idproyectos = :idproyectos");
        $statement->bindParam(':idproyectos', $idproyectos);
        $statement->execute();
        while($result = $statement->fetch()){
            $row[] = $result;
        }
        return $row;
    }

    public function edit($id, $imagen, $descripcion, $idproyectos){
        $statement = $this->db->prepare("UPDATE imagenes SET urlimagen = :imagen, descripcion = :descripcion
        WHERE idimagenes = :id");
        $statement->bindParam(':id',$id);
        $statement->bindParam(':imagen',$imagen);
        $statement->bindParam(':descripcion',$descripcion);
        //$statement->bindParam(':idproyectos',$idproyectos);
        if($statement->execute()){
            header("Location: ../../views/admin/editar_proyecto.php?id=$idproyectos");
        }else{
            header("Location: ../../views/admin/editar_proyecto.php?id=$idproyectos");
        }
    }

    public function delete($id, $imagen, $idproyectos){
        $statement = $this->db->prepare("DELETE FROM imagenes WHERE idimagenes = :id");
        $statement->bindParam(':id', $id);
        if($statement->execute()){
            unlink('../../assets/img/proyectos/'.$imagen);//para eliminar la imagen del servidor
            header("Location: ../../views/admin/editar_proyecto.php?id=$idproyectos");
        }else{
            header("Location: ../../views/admin/editar_proyecto.php?id=$idproyectos");
        }

    }

}

?>
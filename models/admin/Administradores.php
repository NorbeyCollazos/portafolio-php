<?php

require_once('../../Conexion.php');
session_start();

class Administradores extends Conexion{
    
    public function __construct(){
        $this->db = parent::__construct();
    }

    public function login($usuario, $contrasena){
        $statement = $this->db->prepare("SELECT idadministradores, usuario, contrasena FROM administradores WHERE usuario = :usuario AND contrasena = :contrasena");
        $statement->bindParam(':usuario',$usuario);
        $statement->bindParam(':contrasena',$contrasena);
        $statement->execute();
        if($statement->rowCount() == 1){
            $result = $statement->fetch();
            $_SESSION['ID'] = $result['idadministradores'];
            return true;
        }
        return false;

    }

    public function getId()
    {
        return $_SESSION['ID'];
    }

    //validar session
    public function validateSession()
    {
        if ($_SESSION["ID"] == null) {
            header('Location: ../../views/admin/');
        }
    }

    public function cerrarSession(){
        $_SESSION['ID'] = null;
        session_destroy();
        header('Location: ../../views/admin/');
    }

}

?>
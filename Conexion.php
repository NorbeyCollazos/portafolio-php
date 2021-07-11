<?php

class Conexion{

    protected $db;
    private $drive = "mysql";
    private $host = "localhost";
    private $dbname = "portafolioncr";
    private $usuario = "root";
    private $contrasena = "";

    public function __construct()
    {
        try {
            $db = new PDO("{$this->drive}:host={$this->host};dbname={$this->dbname}", $this->usuario, $this->contrasena);
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $db;
        } catch (PDOException $e) {
            echo "Ha surgido un error: Detalle: " . $e->getMessage();
        }
    }

}

?>
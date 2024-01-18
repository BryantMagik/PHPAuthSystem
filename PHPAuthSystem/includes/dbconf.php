<?php

class dbConnection
{
    private $dbConnection;

    private function __construct()
    {
        $this->dbConnection = new mysqli("localhost", "bryan2820", "yeC5KZMD3a7ImIDJ", "bryanbbdd");
        if ($this->dbConnection->connect_error) {
            die("Error de conexión a la base de datos: " . $this->dbConnection->connect_error);
        }
    }

    public static function getInstancia()
    {
        static $instancia = null;
        if (!$instancia) {
            $instancia = new self();
        }
        return $instancia;
    }

    public function obtenerConexion()
    {
        return $this->dbConnection;
    }

    public function __destruct()
    {
        $this->dbConnection->close();
    }
}




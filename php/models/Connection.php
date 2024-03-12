<?php
    class Connection {
        private $host = "localhost";
        private $username = "root";
        private $password = "";
        private $database = "davidar55";

        /*private $host = "localhost";
        private $username = "ueyvwrltumbx3";
        private $password = "mxekrhznfyya";
        private $database = "dbupn9cqudkdd1";*/
        
        private $connection;
    
        // Declaramos el constructor
        public function __construct() {
            $this->connect();
        }
    
        // Declaramos el metodo para generar la conexion
        private function connect() {
            $this->connection = new mysqli($this->host, $this->username, $this->password, $this->database);
    
            if ($this->connection->connect_error) {
                die("Error de conexión: " . $this->connection->connect_error);
            }
        }
    
        // Declaramos un metodo get para regresar la conexion
        public function getConnection() {
            return $this->connection;
        }
    
        // Declaramos un metodo para cerrar la conexion
        public function closeConnection() {
            $this->connection->close();
        }
    }    
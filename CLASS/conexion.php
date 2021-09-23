<?php
    class conexion{
        private $conect;

            public function_construct(){
            $connectionString = "mysql:host=".DB_HOST.";dbname=".DB_NAME.";.DB_CHARSET.";
            try {
                $this->conect = new PDO($connectionString, DB_USER, DB_PASSWORD);
                $this->conect = setAttribute(PDO::ATT_ERRMODE, PDO::ERRMODE_EXCEPTION);

            } catch (PDOException $e) {
                $this->conect = 'Error de conexión';
                echo "ERROR: ".$e->getMessage();
            }
        }

        public function conect(){
        return $this->conect;
        }
    }
?>
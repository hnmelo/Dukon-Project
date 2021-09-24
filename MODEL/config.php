<?php
    class Conectar{
        private $host = 'localhost';
        private $user = 'root';
        private $pass = '';
        private $dbName = 'dbdukon';

        //Método para conectarnos a la BD

        public function con(){
            try {
                $con = new PDO("mysql:host=".$this->host.";dbname=".$this->dbName, $this->user, $this->pass);
                $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $con->query("SET NAMES 'utf8");

                return $con;

            } catch (PDOException $e) {
                echo "ERROR: ".$e->getMessage();
            }
        }
        public static function ruta(){
            return "https://localhost/MELO/DUKON/";
        }

        public function comillas_inteligentes($valor){
        //Retirar las barras
            if (get_magic_quotes_gpc()){
                $valor = stripslashes($valor);
            }
            //Colocar comillas si no es entero
            if (!is_numeric($valor)){
                $valor = "'".mysql_real_escape_string($valor)."'";
            }
            return $valor;
        }
    }
?>
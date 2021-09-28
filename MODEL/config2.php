<?php
    class Conectar{

        public static function con(){
            $host = 'localhost';
            $user = 'root';
            $pass = '';
            $dbName = 'dbdukon';
            try {
                $con = new PDO("mysql:host=".$host.";dbname=".$dbName, $user, $pass);
                echo "conectado";
                $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $con->query("SET NAMES 'utf8'");
                return $con;

            } catch (PDOException $e) {
                echo "ERROR: ".$e->getMessage();
            } 
        }
        public static function ruta(){
            return "https://localhost/MELO/DUKON3/";
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

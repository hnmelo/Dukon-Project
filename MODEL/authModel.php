<?php
// require("config.php");

    class auth extends Conectar{

        private $pro;
		public function __construct(){
			$this->pro=array();
        }

            public function login($correoUsu, $claveUsu){

                Session_start();

                $conexion = parent::con();
                $consulta = $conexion->prepare("SELECT usu_id, usu_rolid, usu_Nomb, usu_Clave, usu_correo FROM usuario WHERE usu_correo ='$correoUsu'");
                // $result = $conexion->prepare($consulta);
                $consulta->execute();
                while($conexion=$consulta->fetch()){
                    $this->pro[]=$conexion;}

                    return $this->pro;
                // $num = mysqli_num_rows($result);

                if($this->pro > 0){
                    $row = $result->fect_assoc();
                    $pass_bd = $row['usu_Clave'];
                    $pass_c = sha1($claveUsu);

                    if($pass_bd == $pass_c){

                        $_SESSION['id'] = $row['usu_id'];
                        $_SESSION['Nombre'] = $row['usu_Nombre'];
                        $_SESSION['Correo'] = $row['usu_correo'];

                        header("Location: dashadmin.php");

                    } else {
                        echo "La contraseña no coincide";
                    }

                } else{
                    echo "No existe usuario";
                }
            }
        }
?>

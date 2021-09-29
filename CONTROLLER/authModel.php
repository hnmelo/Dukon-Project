<?php

    class auth{
        public $email;
        public $password;
        public $mensaje;
        public $nombre;

        public function login(){
            $model = new Conectar;
            $conexion = $model->con();
            $sql =  'SELECT * FROM usuario WHERE ';
            $sql .= 'usu_correo=:email AND usu_Clave=:password';
            $consulta = $conexion->prepare($sql);
            $consulta->bindparam(':email',$this->email,PDO::PARAM_STR);
            $consulta->bindparam(':password',$this->password,PDO::PARAM_STR);
            $consulta->execute();
            $total= $consulta->rowcount();

            if($total==0){
                echo "Usuario o contraseña incorrectos";
                // header("Location ../VIEW/pages/auth.php");
            }else{
                echo "funcionó";
                $fila=$consulta->fetch();
                session_start();
                $_SESSION['login']=true;
                $_SESSION['usu_id']=$fila['usu_id'];
                $_SESSION['Nombre']=$fila['usu_Nomb'];
                $_SESSION['Clave']=$fila['usu_Clave'];
                $_SESSION['Rol']=$fila['usu_rolid'];

                if($_SESSION['Rol'] == 3)
                {
                    header("Location: ../VIEW/admin/dashadmin.phtml");
                } else {
                    if($_SESSION['Rol'] == 2)
                    {
                        header("Location: ../VIEW/auxiliar/dashauxiliar.html");
                    } else{
                        header("Location: ../index.php");
                    }
                }
            }
        }

        public function signup()
        {
            $model = new Conectar;
            $conexion = $model->con();
            $sql = "INSERT INTO `usuario`(`usu_id`, `usu_rolid`, `usu_Nomb`, `usu_Clave`, `usu_tel`, `usu_correo`, `usu_dire`, `usu_ciudad`, `usu_descAdicional`)";
            $sql .= "VALUES ('null',1,'$this->nombre','$this->password','null','$this->email','null','null','null')";
            $consulta = $conexion->prepare($sql);
            $consulta->execute();

            if(!$consulta){
                echo "No se pudo realizar el registro correctamente";
            } else {
                echo "El usuario está registrado correctamente";
            }
        }
    }
?>
<?php
	require_once 'authModel.php';

    // $mensaje=null;
	if(isset($_POST['signup'])){
		$model = new auth;
        $model->nombre = htmlspecialchars($_POST['nombre']);
		$model->email = htmlspecialchars($_POST['email']);
		$model->password = sha1(htmlspecialchars($_POST['password']));
		$model->signup();
        // $mensaje = $model->mensaje;

		}
?>
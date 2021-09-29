<?php
	require_once 'authModel.php';

    $mensaje=null;
	if(isset($_POST['login'])){
		$model = new auth;
		$model->email = htmlspecialchars($_POST['email']);
		$model->password = sha1(htmlspecialchars($_POST['password']));
		$model->login();
        $mensaje = $model->mensaje;

		}
?>

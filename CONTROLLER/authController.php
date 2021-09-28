<?php

    if(!isset($_POST["ingresar"])){
        require("../MODEL/authModel.php");

        echo "hola";
		$correoUsu = htmlspecialchars($_POST['correoUsu']);
		$claveUsu = htmlspecialchars($_POST['claveUsu']);

		$pro = new auth();
		$pro->login($correoUsu, $claveUsu);

        echo "funciona, wii";
        // $pro->location = header("location: ../VIEW/admin/dashadmin.html");

		// require_once("VIEW/admin/dashadmin.php");
	}else{
		echo "no funciona:(";//require_once("VIEW/pages/error404.phtml");
	}
?>
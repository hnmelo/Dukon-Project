<?php
    require("../MODEL/authModel.php");

    if(isset($_POST["ingresar"])){
		$correoUsu = htmlspecialchars($_POST['correoUsu']);
		$claveUsu = htmlspecialchars($_POST["claveUsu"]);

		$pro = new auth();
        $pro->location = header("location: dashadmin.php");
		$datos= $pro->login($correoUsu, $claveUsu);
	
		// require_once("VIEW/admin/dashadmin.php");
	}else{
		echo "no funciona:(";//require_once("VIEW/pages/error404.phtml");
	}
?>
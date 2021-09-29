<?php
	require("MODEL/config.php");

	if(!empty($_GET["accion"]))
		$accion=$_GET["accion"];
	else
		$accion="home";
	
	if(is_file("CONTROLLER/".$accion."Controller.php"))
		require_once("CONTROLLER/".$accion."Controller.php");
	else
		if(is_file("MODEL/".$accion."Model.php"))
			require_once("CONTROLLER/".$accion."Controller.php");
		else
			require_once("CONTROLLER/errorController.php");
		
	
?>
<?php
$mysqli = new mysqli("wd1xgj89orv902x.cdposmdmuhoh.us-east-1.rds.amazonaws.com","zamorano","DwxZ9SDLtg","graduates");
	 //servidor, usuario de base de datos, contraseña del usuario, nombre de base de datos

	if(mysqli_connect_errno()){
		echo 'Conexion Fallida : ', mysqli_connect_error();
		echo "conexion fallo";
		exit();
	}

		if (!$mysqli->set_charset("utf8")) {
    printf("Error loading character set utf8: %s\n", $mysqli->error);
    exit();
} ?>

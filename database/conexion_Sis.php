<?php
	$serverName = "localhost";
	$connectionInfo = array("Database"=>"laboratorioVidalab","UID"=>"FURIA10/aias1","PWD"=>"","CharacterSet"=>"UTF-8");
	$con = sqlsrv_connect($serverName,$connectionInfo);


	if($con){
		echo "conexión exitosa"
	}else{
		echo "fallo la conexión";
	}
?>
<?php  
	include 'call_api.php';
	include("index.html");

	$idName = $_POST["idName"];
	$idLastName = $_POST["idLastName"];
	$idRoute = $_POST["idRoute"];
	$idPhone = $_POST["idPhone"];
	$idPassword = $_POST["idPassword"];

echo $idRoute;

	$json = CallAPI("POST", "http://cargodispatcher.elasticbeanstalk.com/api/cdcustomer/SingUp?name=$idName&last_name=$idLastName&telephone=$idPhone&password=$idPassword&route=$idRoute", false);

	

?>
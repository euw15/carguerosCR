<?php  

	include 'call_api.php';
	include("index.html");

	$idName = $_POST["idName"];
	$idLastName = $_POST["idLastName"];
	$idRoute = $_POST["idRoute"];
	$idPhone = $_POST["idPhone"];
	$idPassword = $_POST["idPassword"];


	$json = CallAPI("POST", "http://cargodispatcher.elasticbeanstalk.com/api/cdcustomer/SingUp?name=$idName&last_name=$idLastName&telephone=$idPhone&password=$idPassword&route=$idRoute", false);


	echo "<script language='javascript' type='text/javascript'>";
	echo "$(function (){";
    echo "document.getElementById('h3account').innerHTML = $json;";
    echo "$('#success').modal();});";
	echo "</script>";


?>
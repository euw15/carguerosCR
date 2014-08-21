<?php  

	include 'call_api.php';
    include("admin_web.html");

	$idName = $_POST["idName"];
	$idExit = $_POST["idExit"];
	$idArrival = $_POST["idArrival"];
	$idPrice = $_POST["idPrice"];
	$idDuration = $_POST["idDuration"];
	$idAmount = $_POST["idAmount"];

	
	$json = CallAPI("POST","http://cargodispatcher.elasticbeanstalk.com/api/cdroute/createRoute?name=$idName&exitPoint=$idExit&arrivalPoint=$idArrival&price=$idPrice&duration=$idDuration&maxAmount=$idAmount", false);


	$obj = json_decode($json,true);


	if(empty($obj)){

		echo  '<script type="text/javascript">
				$(function ()  {
				$("#danger").modal();  
				});
	    </script>';


	}else{

		echo  '<script type="text/javascript">
				$(function ()  {
				$("#success").modal();  
				});
	    </script>';

	}
?>
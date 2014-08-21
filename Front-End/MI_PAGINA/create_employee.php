<?php  

	include 'call_api.php';
    include("admin_web.html");

	$idName = $_POST["idName"];
	$idLastName = $_POST["idLastName"];
	$idPhone = $_POST["idPhone"];
	$idPassword = $_POST["idPassword"];
	

	$json = CallAPI("POST", "http://cargodispatcher.elasticbeanstalk.com/api/cdemployee/SingUp?name=$idName&last_name=$idLastName&telephone=$idPhone&password=$idPassword&role=1", false);


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
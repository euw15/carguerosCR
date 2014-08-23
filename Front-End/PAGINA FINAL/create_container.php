<?php  

	//include 'call_api.php';
    include("admin_web.php");

	$idMaxSize = $_POST["idMaxSize"];



	$json = CallAPI("POST","http://cargodispatcher.elasticbeanstalk.com/api/CDContainer/createContainer?weight=$idMaxSize", false);


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
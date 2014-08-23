<?php  	

	session_start();
	ob_start(); 

	include 'call_api.php';
    include("employee_login.html");

	$idEmployee = $_POST["idEmployee"];
	$idPassword = $_POST["idPassword"];

	$json = CallAPI("GET", "http://cargodispatcher.elasticbeanstalk.com/api/cdemployee/loginEmployee?password=$idPassword&idEmployee=$idEmployee", false);

	$obj = json_decode($json,true);



	if(empty($obj)){
		echo  '<script type="text/javascript">
				$(function ()  {
				$("#myError").modal();  
				});
	    </script>';

	}else{

		foreach($obj as $item){
	        $Name = $item["name"];
	        $LastName = $item["last_name"];
	    }

		$_SESSION['Name']=$Name; 
		$_SESSION['LastName']=$LastName; 

		echo '<script type="text/javascript">
			  window.location = "admin_web.php"
			  </script>';
	}

?>
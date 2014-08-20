<?php  

	include 'call_api.php';
    include("employee_login.html");

	$idEmployee = $_POST["idEmployee"];
	$idPassword = $_POST["idPassword"];

	$json = CallAPI("GET", "http://cargodispatcher.elasticbeanstalk.com/api/cdcustomer/login?password=$idPassword&account=$idEmployee", false);


	$obj = json_decode($json,true);


	if(empty($obj)){

		echo  '<script type="text/javascript">
				$(function ()  {
				$("#myError").modal();  
				});
	    </script>';

	}else{

	echo '<script type="text/javascript">
window.location = "error_usuario.html"
			</script>';
	}

?>
<?php  
	include 'call_api.php';
	include("index.html");

	$usuario = $_POST["account"];
	$password = $_POST["password"];

	echo "http://cargodispatcher.elasticbeanstalk.com/api/cdcustomer/login?password=$password&account=$usuario";

	$json = CallAPI("GET", "http://cargodispatcher.elasticbeanstalk.com/api/cdcustomer/login?password=$password&account=$usuario", false);

	//echo $json;
	$obj = json_decode($json,true);

	if(empty($obj))
	{

		echo  '<script type="text/javascript">
				$(function ()  {
				$("#myError").modal();  
				});
			</script>';
	
	}
	else
	{
		//echo '<script type="text/javascript">
//window.location = "error_usuario.html"
	//		</script>';
	}

?>
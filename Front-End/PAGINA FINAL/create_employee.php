<?php  

	//include 'call_api.php';
    include("admin_web.php");

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

	
		echo "<script language='javascript' type='text/javascript'>";
		echo "$(function (){";
	    echo "document.getElementById('h3account').innerHTML = $json;";
	    echo "$('#successCreateUser').modal();});";
		echo "</script>";

	}
?>
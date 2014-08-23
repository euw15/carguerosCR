<?php  

	//include 'call_api.php';
    include("admin_web.php");

	$idAccount = $_POST["idAccount"];
	$idType = $_POST["idType"];
	$idSize = $_POST["idSize"];
	$idValue = $_POST["idValue"];
	$idDescription = $_POST["idDescription"];
	$idWeight = $_POST["idWeight"];


	$json = CallAPI("POST", "http://cargodispatcher.elasticbeanstalk.com/api/cdPackages/createPackage?weight=$idWeight&size=$idSize&type=$idType&price=$idValue&description=$idDescription&account=$idAccount", false);


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
	    echo "document.getElementById('h4account').innerHTML = $json;";
	    echo "$('#successCreatePackage').modal();});";
		echo "</script>";

	}
?>
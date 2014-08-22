<?php  

	include 'call_api.php';

	$idAccount = $_POST['idAccount'];

	
	$json = CallAPI("GET", "http://cargodispatcher.elasticbeanstalk.com/api/cdpackages/UserPackages?account=$idAccount", false);
	$obj = json_decode($json,true);
	echo $json;

	foreach($obj as $item){

		$idPackages = $item["idPackages"];
		$price = $item["price"];
		$packageState = $item["packageState"];
		$arrivalDate = $item["arrivalDate"];
		
	//	echo '<script type="text/javascript">addRow("dataTable","Hola");</script>'; 

	}

			echo '<script type="text/javascript">
				  window.location = "huge.php"
			  </script>';	
?>
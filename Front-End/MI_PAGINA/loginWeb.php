<?php  
	session_start();
	ob_start(); 

	include 'call_api.php';
	include("index.html");

	$usuario = $_POST["account"];
	$password = $_POST["password"];

	$json = CallAPI("GET", "http://cargodispatcher.elasticbeanstalk.com/api/cdcustomer/login?password=$password&account=$usuario", false);

	$obj = json_decode($json,true);

	if(empty($obj))
	{

		echo  '<script type="text/javascript">
				$(function ()  {
				$("#myError").modal();  
				});
			</script>';
	
	}else{

		foreach($obj as $item){
	        $Name = $item["name"];
	        $LastName = $item["lastName"];
	        $Account = $item["account"];
	        $Type = $item["type"];
	        $Score = $item["score"];
	    }
		$_SESSION['Name']=$Name; 
		$_SESSION['LastName']=$LastName;
		$_SESSION['Account']=$Account;
		$_SESSION['Type']=$Type;
		$_SESSION['Score']=$Score;


		echo '<script type="text/javascript">
				  window.location = "user_page.php"
			  </script>';	
	}

?>
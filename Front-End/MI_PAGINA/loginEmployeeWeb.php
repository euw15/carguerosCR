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

	echo "<html lang='en'>
			<body>
					   <form id='openEmployeePage'  role='form' action='user_page.php' method='POST'>
			    		<!-- Password input-->
							 <input id='password' name='password' type='hidden' value=$idPassword placeholder='Password'>		 								
					  		 <input id='account' name='account' type='hidden' value=$idEmployee placeholder='Account'>   
						</form>
				
						<script type='text/javascript'>
    						document.getElementById('openEmployeePage').submit(); // SUBMIT FORM
						</script>
		</body>
		</html>";
	}

?>
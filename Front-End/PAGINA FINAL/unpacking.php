<?php  

    include("admin_web.php");

	$jsonUnpack = CallAPI("GET","http://cargodispatcher.elasticbeanstalk.com/api/cdcontainer/arrivalContainerNotNotified", false);

	$objUnpack = json_decode($jsonUnpack,true);


	if(empty($objUnpack)){

		echo  '<script type="text/javascript">
				$(function ()  {
				$("#noUnpack").modal();  
				});
	    </script>';


	}else{

		foreach($objUnpack as $item){
			$idContainer = $item["idContainer"];
			$idContainer_Manager = $item["idContainer_Manager"];
			CallAPI("PUT","http://cargodispatcher.elasticbeanstalk.com/api/CDContainer/setNotifiedContainerArrived?idContainerManager=$idContainer_Manager", false);
			echo "<script type='text/javascript'>addUnpack('$idContainer');</script>"; 	
		} 

		echo  '<script type="text/javascript">
				$(function ()  {
				$("#unpacking-modal").modal();  
				});
	   		 </script>';
	}

?>
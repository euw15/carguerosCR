<?php 
	session_start();
	ob_start(); 
	$Nombre =  $_SESSION['Name']; 
?> 


<html>
<h1>
	
<?php echo $v1; ?>

</h1>

<td><input type="text" size="50" value="<?php echo $v1; ?>"/></td>
</html>
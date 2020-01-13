<?php
	require "Connection.php";
	#campos mandados desde app
	$user_name = "0931657365";
	$user_password = "123456";
	$nombre = "0931657365";
	$ubicacion = "123456";
	$edad = 14;
	$foto = "123456";
	
	$mysql_qry = "insert into users () values (
		'$user_name','$user_password','$nombre','$ubicacion','$edad','$foto')";
	$result = mysqli_query($conn,$mysql_qry);
	if($conn->query($mysql_qry)=== TRUE){
		echo "Insertar exitoso";
	}else{
		echo "Error: ". $mysql_qry ."<br>" . $conn->error;
	}
	$conn->close();
	
?>

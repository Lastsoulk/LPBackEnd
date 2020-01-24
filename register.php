<?php
	require "Connection.php";
	#campos mandados desde app
	$user_name = $_POST["user_name"];
	$user_password = $_POST["password"];
	$nombre = $_POST["nombre"];
	$ubicacion = $_POST["ubicacion"];
	$edad = $_POST["edad"];
	$foto = $_POST["foto"];
	
	$mysql_qry = "insert into users () values (
		'$user_name','$user_password','$nombre','$ubicacion','$edad','$foto')";
	$result = mysqli_query($conn,$mysql_qry);
	if($conn->query($mysql_qry)=== TRUE){
		echo "Registro exitoso";
	}if($conn->query($mysql_qry)=== FALSE){
		echo "Error: ". $mysql_qry ."<br>" . $conn->error;
	}
	$conn->close();
	
?>

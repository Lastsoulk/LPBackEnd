<?php
	require "Connection.php";

	$user_name = $_POST["cedula"];
	$password = $_POST["password"];
	$nombre = $_POST["nombre"];
	$ubicacion = $_POST["ubicacion"];
	$edad = $_POST["edad"];
	$mysql_qry = "UPDATE users SET password = '$password', nombre = '$nombre', 
	ubicacion = '$ubicacion', edad = '$edad' WHERE Cedula = '$user_name';";
	$result = mysqli_query($conn,$mysql_qry);
	if($conn->query($mysql_qry)=== TRUE){
		echo "Cambio de datos exitoso";
	}else{
		echo "Error: ". $mysql_qry ."<br>" . $conn->error;
	}
	$conn->close();
?>

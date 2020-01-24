<?php
	require "Connection.php";
	#campos mandados desde app
	$mascota = $_POST["mascota"];
	$usuario = $_POST["usuario"];
	$fecha = $_POST["fecha"];
	$hora = $_POST["hora"];
	$ubicacion = $_POST["ubicacion"];
	
	$mysql_qry = "insert into salidas (mascota,usuario,fecha,
	hora,ubicacion) values (
		'$mascota','$usuario',$fecha,'$hora','$ubicacion')";
	$result = mysqli_query($conn,$mysql_qry);
	if($conn->query($mysql_qry)=== TRUE){
		echo "Salida planificada";
	}else{
		echo "Error: ". $mysql_qry ."<br>" . $conn->error;
	}
	$conn->close();
	
?>

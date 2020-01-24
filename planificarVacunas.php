<?php
	require "Connection.php";
	
	$veterinaria = $_POST["veterinaria"];//mandado desde app
	$vacuna = $_POST["vacuna"];
	$mascota = $_POST["mascota"];
	$doctor = $_POST["doctor"];
	$fecha = $_POST["fecha"];
	$hora = $_POST["hora"];
	
	$mysql_qry = "insert into citavacuna (idveterinaria,idvacuna,idmascota,iddoctor,fecha,hora) values (
		'$vacuna','$mascota','$doctor',$fecha,'$hora')";
	$result = mysqli_query($conn,$mysql_qry);
	if($conn->query($mysql_qry)=== TRUE){
		echo "Planificacion de vacuna realizado con exito";
	}else{
		echo "Error: ". $mysql_qry ."<br>" . $conn->error;
	}
	$conn->close();
?>

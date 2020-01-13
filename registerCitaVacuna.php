<?php
	require "Connection.php";
	#campos mandados desde app
	$idVeterinaria = 1;
	$idVacuna = 1;
	$idMascota = 1;
	$idDoctor = 1;
	$fecha = 24-01-2020;
	$hora = 13:50;
	
	$mysql_qry = "insert into citavacuna (IDVeterinaria,IDVacuna,IDMascota,
	IDDoctor,Fecha,Hora) values (
		'$idVeterinaria','$idVacuna','$idMascota','$idDoctor','$fecha','$hora')";
	$result = mysqli_query($conn,$mysql_qry);
	if($conn->query($mysql_qry)=== TRUE){
		echo "Insertar exitoso";
	}else{
		echo "Error: ". $mysql_qry ."<br>" . $conn->error;
	}
	$conn->close();
	
?>

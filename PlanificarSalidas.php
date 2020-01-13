<?php
	require "Connection.php";
	#campos mandados desde app
	$HoraInicial = time();
	$HoraFinal = time()+7;
	$Ubicacion = "Por alla";
	$Mascota = 1;
	$User = "0931657365";

	
	$mysql_qry = "insert into salidas (HoraInicial,HoraFinal,Ubicacion,
	Mascota,User) values (
		'$HoraInicial','$HoraFinal','$Ubicacion','$Mascota','$User')";
	$result = mysqli_query($conn,$mysql_qry);
	if($conn->query($mysql_qry)=== TRUE){
		echo "Insertar exitoso";
	}else{
		echo "Error: ". $mysql_qry ."<br>" . $conn->error;
	}
	$conn->close();
	
?>

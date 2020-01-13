<?php
	require "Connection.php";
	#campos mandados desde app
	$nombre = "HolaKheAze";
	$edad = 14;
	$especie = 1;
	$raza = 1;
	$genero = "Macho";
	$foto = "no hay foto :c";
	$user = "0931657365";
	
	$mysql_qry = "insert into mascota (Nombre,Edad,Especie,Raza,Genero,Foto,User) values (
		'$nombre','$edad','$especie','$raza','$genero','$foto','$user')";
	$result = mysqli_query($conn,$mysql_qry);
	if($conn->query($mysql_qry)=== TRUE){
		echo "Insertar exitoso";
	}else{
		echo "Error: ". $mysql_qry ."<br>" . $conn->error;
	}
	$conn->close();
	
?>

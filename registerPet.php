<?php
	require "Connection.php";
	#campos mandados desde app
	$nombre = "0931657365";
	$edad = 14;
	$especie = 1;
	$raza = 1;
	$genero = "Macho";
	$foto = "no hay foto :c";
	
	$mysql_qry = "insert into mascota (Nombre,Edad,Especie,Raza,Genero,Foto) values (
		'$nombre','$edad','$especie','$raza','$genero','$foto')";
	$result = mysqli_query($conn,$mysql_qry);
	if($conn->query($mysql_qry)=== TRUE){
		echo "Insertar exitoso";
	}else{
		echo "Error: ". $mysql_qry ."<br>" . $conn->error;
	}
	$conn->close();
	
?>

<?php
	require "Connection.php";
	#campos mandados desde app
	$nombre = $_POST["petname"];
	$edad = $_POST["edad"];
	$especie = $_POST["especie"];
	$raza = $_POST["raza"];
	$genero = $_POST["genero"];
	$foto = "no hay foto :c";
	$user = $_POST["user_name"];
	
	$mysql_qry = "insert into mascota (Nombre,Edad,Especie,Raza,Genero,Foto,usuario) values (
		'$nombre','$edad','$especie','$raza','$genero','$foto','$user')";
	$result = mysqli_query($conn,$mysql_qry);
	if($conn->query($mysql_qry)=== TRUE){
		echo "Insertar exitoso";
	}else{
		echo "Error: ". $mysql_qry ."<br>" . $conn->error;
	}
	$conn->close();
	
?>

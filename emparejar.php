<?php
	require "Connection.php";
	
	$mascota = $_POST["mascota"];//mandado desde app
	$especie = $_POST["especie"];
	$raza = $_POST["raza"];
	$genero = $_POST["genero"];
	
	$mysql_qry = "select distinct mascota.nombre,mascota.edad,especie.Nombre, raza.nombreraza, 
	mascota.genero, mascota.idmascota 
	from mascota join users join raza join especie 
	where mascota.idmascota != '$mascota' 
	and mascota.raza=raza.idraza and mascota.especie=especie.idtipoM and 
	mascota.especie='$especie' and mascota.raza = '$raza' and mascota.genero != '$genero';";

	$result = mysqli_query($conn,$mysql_qry);

	while ($row = mysqli_fetch_array($result)) {
		printf("%s,%s,%s,%s,%s,%s,", $row[0], $row[1],$row[2], $row[3],$row[4], $row[5]);  
	}
	$conn->close();
?>
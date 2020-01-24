<?php
	require "Connection.php";
	
	$user_name = $_POST["cedula"];
	
	$mysql_qry = "select mascota.nombre,mascota.edad,especie.Nombre, raza.nombreraza,
	mascota.genero, mascota.idmascota from mascota join users join raza join especie where 
	users.Cedula=mascota.usuario and mascota.raza=raza.idraza and mascota.especie=especie.idtipoM
and users.cedula like '$user_name'";
	$result = mysqli_query($conn,$mysql_qry);
	while ($row = mysqli_fetch_array($result)) {
		printf("%s,%s,%s,%s,%s,%s,", $row[0], $row[1],$row[2],$row[3],$row[4],$row[5]);  
}
	$conn->close();
?>

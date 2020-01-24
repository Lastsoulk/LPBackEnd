<?php
	require "Connection.php";
	
	$campoSel = $_POST["veterinaria"];//mandado desde app

    if ($myVar != "veterinaria") { //busqueda select de doctor por veterinarias
		
		$mysql_qry = "select doctor.cedula,doctor.nombre from doctor 
		join veterinaria where doctor.idveterinaria=veterinaria.idveterinaria 
		and veterinaria.idveterinaria='$campoSel';";
		$result = mysqli_query($conn,$mysql_qry);

		while ($row = mysqli_fetch_array($result)) {
			printf("%s,%s,", $row[0], $row[1]);  
		}
	}
	if ($myVar != "veterinaria") {
		$mysql_qry = "select * from $campoSel";
		$result = mysqli_query($conn,$mysql_qry);

		while ($row = mysqli_fetch_array($result)) {
			printf("%s,%s,%s,", $row[0], $row[1],$row[2]);  
		}
	}
	$conn->close();
?>

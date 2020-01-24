<?php
	require "Connection.php";
	
	$campoSel = $_POST["especie"];//mandado desde app
	$especie = $_POST["raza"];
	
	$mysql_qry = "select * from $campoSel where especiemascota = $especie";
	$result = mysqli_query($conn,$mysql_qry);

	while ($row = mysqli_fetch_array($result)) {
		printf("ID: %s  Name: %s  ", $row[0], $row[1]);  
}
	$conn->close();
?>

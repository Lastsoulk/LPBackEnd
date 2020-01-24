<?php
	require "Connection.php";
	$campo = $_POST["campo"];

	$mysql_qry = "select especie.idtipoM from especie where especie.Nombre = '$campo';";
	$result = mysqli_query($conn,$mysql_qry);
	while ($row = mysqli_fetch_array($result)) {
		printf("%s,", $row[0]);  
	}
	$conn->close();
?>

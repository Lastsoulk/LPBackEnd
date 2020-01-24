<?php
	require "Connection.php";

	$user_name = $_POST["user_name"];
	$mysql_qry = "select * from users where 
	Cedula like '$user_name'";
	$result = mysqli_query($conn,$mysql_qry);
	while ($row = mysqli_fetch_array($result)) {
		printf("%s,%s,%s,%s", $row[1], $row[2],$row[3],$row[4]);  //password, nombre, ubicacion,edad
	}
	$conn->close();
?>

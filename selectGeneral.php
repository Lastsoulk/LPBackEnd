<?php
	require "Connection.php";
	
	$campoSel = $_POST["especie"];//mandado desde app
	
	$mysql_qry = "select * from $campoSel";
	$result = mysqli_query($conn,$mysql_qry);

	while ($row = mysqli_fetch_array($result)) {
		printf("ID: %s  Name: %s  ", $row[0], $row[1]);  
}
	$conn->close();
?>

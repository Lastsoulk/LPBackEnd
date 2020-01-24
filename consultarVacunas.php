<?php
	require "Connection.php";
	
	$campoSel = $_POST["vacunas"];//mandado desde app
	
	$mysql_qry = "select * from $campoSel";
	$result = mysqli_query($conn,$mysql_qry);

	while ($row = mysqli_fetch_array($result)) {
		printf("%s,%s,%s,", $row[0], $row[1],$row[2]);  
}
	$conn->close();
?>

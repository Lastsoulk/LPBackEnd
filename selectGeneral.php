<?php
	require "Connection.php";
	
	$campoSel = "especiemascota";//mandado desde app
	
	$mysql_qry = "select * from $campoSel";
	$result = mysqli_query($conn,$mysql_qry);
	if(mysqli_num_rows($result)>0){
		while($row = mysqli_fetch_array($result)) {
			echo print_r($row). "<br>";       // Print the entire row data
		}
	}else{
		echo "Error: ". $mysql_qry ."<br>" . $conn->error;
	}
	$conn->close();
?>

<?php
	require "Connection.php";
	
	$user_name = "0931657365";
	
	$mysql_qry = "select mascota.Nombre, users.Nombre from mascota join users where 
	User like '$user_name'";
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

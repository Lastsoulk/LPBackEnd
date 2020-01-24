<?php
	require "Connection.php";
	#$user_name = "0931657365";
	#$user_password = "123456";
	$user_name = $_POST["user_name"];
	$user_password = $_POST["password"];
	$mysql_qry = "select * from users where 
	Cedula like '$user_name' and Password like '$user_password'";
	$result = mysqli_query($conn,$mysql_qry);
	if(mysqli_num_rows($result)>0){
		echo "Login success";
	}else{
		echo "Login not success";
	}
	$conn->close();
?>

<?php
	require "Connection.php";
	$user_name = "0931657365";
	$user_password = "123456";
	$mysql_qry = "select * from users where 
	Cedula like '$user_name' and Password like '$user_password'";
	$result = mysqli_query($conn,$mysql_qry);
	if(mysqli_num_rows($result)>0){
		echo "Login success, la prueba con '$user_name'y '$user_password' fue un exito";
	}else{
		echo "Login not success";
	}
	$conn->close();
?>

<?php
	$db_name = "petbook";
	$mysql_username = "root";
	$mysql_password = "123456";
	$localIP = getHostByName(getHostName());
	$server_name = "192.168.56.1";
	#echo $localIP;
	$conn = mysqli_connect($server_name,$mysql_username,$mysql_password,$db_name);
	if (!$conn) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    exit;
}


	/*if($conn){
		echo "connection success";
	}else{
		echo "connection failed";
	}
	*/
?>
	

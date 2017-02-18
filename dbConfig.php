<?php
	$hostname ="localhost";
	$username="root";
	$password="";
	$db_name="aiub";
	
	$con = mysqli_connect("localhost","root","","aiub");
	if($con){
		//echo "DB connected";
		
	}
	else{
		die("DB is no connected ".mysqli_connect_error());
	}
	?>
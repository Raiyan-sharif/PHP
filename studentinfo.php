<?php
	include "dbConfig.php";
	$query = "SELECT * FROM `student`";
	
	$result = mysqli_query($con,$query);
	$data = array();
	
	while($row=mysqli_fetch_assoc($result)){
		$data[] = $row;
	}
	echo json_encode($data);


?>
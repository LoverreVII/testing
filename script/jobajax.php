<?php 
	$con = mysqli_connect('localhost','root','','hanny');
	$data_job = mysqli_query($con,"SELECT * FROM trjob");
	foreach ($data_job as $key) {
		echo json_encode($key);
	}
 ?>
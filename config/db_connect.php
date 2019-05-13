<?php // connect to DB
	$conn = mysqli_connect('localhost', 'viktor', 'root', 'ninja_pizza');

	//check connection
	if(!$conn){
		echo 'error in connection:' . mysqli_connect_error();
	}
?>
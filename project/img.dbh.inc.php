<?php

	$servername="localhost";
	$dBUsername="root";
	$dBPassword="";
	$dBName="imgupload";
	
	$conn2=mysqli_connect($servername, $dBUsername, $dBPassword, $dBName);
	
	if (!$conn2){
		
		die("Connection failed: ". mysqli_connect_error());
	}
	?>
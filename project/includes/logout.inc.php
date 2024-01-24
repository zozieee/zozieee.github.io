<?php
	session_start();
	session_unset();	//reset variables
	session_destroy();
	
	header("Location: ../index.php?logout=success");
	exit();
		
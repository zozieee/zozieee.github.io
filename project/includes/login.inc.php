<?php

	if(isset($_POST['login-submit'])) {
		
		require 'dbh.inc.php';
		require "connect.php";
		
		$username=$_POST['username'];
		$password=$_POST['password'];

		if (empty($username)||(empty($password) )){
			header("Location: ../login.php?error=emptyFields");
			exit();
		}
		else{
			$sql="SELECT * FROM mytable WHERE username=?;";
			$stmt=mysqli_stmt_init($conn);
			if(!mysqli_stmt_prepare($stmt, $sql)){
				header("Location: ../login.php?error=sqlerror");
				exit();
			}
			else{
				mysqli_stmt_bind_param($stmt, "s", $username);
				mysqli_stmt_execute($stmt);
				$result=mysqli_stmt_get_result($stmt);
				
				if($row=mysqli_fetch_assoc($result)){
					//do hashes match?
					$pwdCheck=password_verify($password, $row['password']);
					if($pwdCheck==false){
						header("Location: ../login.php?error=wrongpwd");
						exit();
					}
					else if($pwdCheck==true){ 	//more secure than else for bools
						session_start();
						$_SESSION['username']=$row['username'];
						$_SESSION['ID']=$row['ID'];
						
						header("Location: ../index.php?login=success");
						exit();
					}
					else{
						header("Location: ../login.php?error=wrongpwd");
						exit();
					}	//non bool error handling
				}
				else{
					header("Location: ../login.php?error=nouser");
					exit();
				}
			}
		}
	}
	else{
	
		
		header("Location: ../index.php");
		exit();//ends script
	}
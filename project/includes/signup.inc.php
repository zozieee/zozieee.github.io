<?php

	if(isset($_POST['signup-submit'])) {
		
		require 'dbh.inc.php'; //? not redirecting properly after valid 'sign-up' submissions
		require 'connect.php';
		
		$username= $_POST['username'];
		$email= $_POST['mail'];
		$password= $_POST['password'];
		$passwordRepeat= $_POST['passwordRepeat'];
		
		if(empty($username)  || empty($password) || empty($passwordRepeat)) {
			//header() will run the script inside, so we can load prev page w/ info after ?
			header("Location: ../signup.php?error=emptyFields&uid=".$username."&mail=".$email);
			exit();//ends script
		}
		
		else if($password !== $passwordRepeat){
			header("Location: ../signup.php?error=passwordcheck&uid=".$username."&mail=".$email);
			exit();//ends script
		}
		
		else{
			$sql="SELECT username FROM mytable WHERE username=?";// ? is placeholder to prevent sql injection
			$stmt= mysqli_stmt_init($conn);
			
			//check for errors FIRST in php
			if(!mysqli_stmt_prepare($stmt, $sql)){
				
			header("Location: ../signup.php?error=sqlerror");
			exit();//ends script
			}
			else{
				mysqli_stmt_bind_param($stmt, "s", $username);//s is string i is integer b is bool d is double
				//s is represent my ? string from earlier
				mysqli_stmt_execute($stmt);
				//run with data bound above
				mysqli_stmt_store_result($stmt);//saves data
				$resultCheck=mysqli_stmt_num_rows($stmt);
				if ($resultCheck>0){
					header("Location: ../signup.php?error=usertaken&mail=".$email);
					exit();//ends script
				}
				
				else{
					$sql="INSERT INTO mytable (username, password) VALUES (?,?)";
					$stmt= mysqli_stmt_init($conn);
					
					if(!mysqli_stmt_prepare($stmt, $sql)){
						header("Location: ../signup.php?error=sqlerror");
						exit();//ends script
					}
					else{
						//hash pw
						$hashedPwd= password_hash($password, PASSWORD_DEFAULT); //phps updated pw encryption, bcrypt
						
						mysqli_stmt_bind_param($stmt, "ss", $username, $hashedPwd);//passing two ?s, representing two strings "ss"
						mysqli_stmt_execute($stmt);
						
						header("Location: ../login.php?signup=success");
						exit();//ends script
						
					}
				}
				
			}
			
		}
		
		mysqli_stmt_close($stmt);
		mysqli_close($conn);	
	}
		else{

        header("Location: ../login.php");
		exit();//ends script
    
	}
	
	//exiled error handling w/ email:
	
	//else if(!filter_var($email, FILTER_VALIDATE_EMAIL && !preg_match("/^[a-zA-Z0-9]*$/", $username))){
	//		header("Location: ../signup.php?error=invalidmailuid"); //correct user entries always gives this error >:( does filter_val work?
	//		exit();//ends script
	
	//else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
	//		header("Location: ../signup.php?error=invalidmail&uid=".$username);
	//		exit();//ends script
	//	}
	//	else if(!preg_match("/^[a-zA-Z0-9]*$/", $username)){
	//		header("Location: ../signup.php?error=invaliduid&mail=".$email);
	//		exit();//ends script
	//	}
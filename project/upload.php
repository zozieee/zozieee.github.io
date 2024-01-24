<!DOCTYPE html>
<html>
	<head>
		<title>Welcome!</title>
		<meta name="viewport" content="width=device-width; initial-scale=1.0">
		<meta name="keywords" content="intermediate html, learning,
		INEW-2434" />
		<meta name="description" content="An intermediate web page for
		TGG LLC" />
		<meta name="author" content="Zoe Cope" />
		<style>
			div{
				display:flex;
				flex-direction:row;
				
				
			}
		</style>
		<link rel="stylesheet" type="text/css" href="styles/style.css">
		</head>
		<body>
			<header>
				<style>
				<link rel="stylesheet" href="navbar/CSS/header.css">
			
				</style>
				<link rel="html" href="project/navbar/header.html">
				
				<?php require "header.php";?>
				<?php include_once "img.dbh.inc.php";?>
				
				</header>
				
				<div id="member">
					
					<?php
					//$file=$_POST['file'];
			
					if(isset($_SESSION['username'])) 
					{
						echo '<img src="\project\uploads\default-pfp.jpg" style="width:50px;"></img>';

						
						echo'<h1 class="welcome text" style="margin:10px;" >
					Hello '.$_SESSION['username'].'!' . '</h1>';
					
					echo '<img src="'.$_POST['file'].'" alt="pfp">';
					
						print_r($_FILES);
								
					echo '<br>Your file has been submitted for approval by Admins.';
					
								
					}
					else{
						echo '<p class="login-status"> You are logged out!</p>';
					}
					?>
				</div>
			
				
			
		</body>
		<footer>
		<div id="directory" style="background-color:#567656">
				<ul>
					<li><a href="/project/project.php">Projects</a></li>					
						<li><a href="/project/TGGForums.php">Forums</a></li>
						<li><a href="/project/About.php">About</a></li>
						<li><a href="/project/ContactTGG.php">Contact</a></li>
				</ul>					
			</div>
		

			<address>
<?php include "footer.php";?>			
			</address>
	</footer>
</html>





<!-- exiled pfp upload 

$sql="SELECT * FROM mydatabase";
					$display= msqli_query($conn2, $sql);
					
					if (mysqli_num_rows($result)>0){
						
						while($rows=mysqli_fetch_assoc($display)){
							$username=$row['username'];
							$sqlimg="SELECT * FROM profileimg WHERE username='$username'";
							
							$resultimg= msqli_query($conn2, $sqlimg);
							while($rowimg=mysqli_fetch_assoc($resultimg)){
								echo '<div>';
									if($rowimg['status']==0){
										echo "<img src='\project\images\uploads\'.$username.'.jpg'> ";
									}
									else{
										echo '<img src="\project\images\uploads\default-pfp.jpg"> ';
										//no img
										
									}
								echo '</div>';

							}

							
						}
					}


-->
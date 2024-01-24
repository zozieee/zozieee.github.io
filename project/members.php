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
					
					if(isset($_SESSION['username'])) 
					{
						echo'<h1 class="welcome text" style="margin:10px;" >
					Hello '.$_SESSION['username'].'!' . '</h1>';
					
						echo '<p>
					
								<a href="/project/TGGForums.php">Make a post</a>
								</p>
								
								<p style="background-color:#567656; margin:20px;" m>
								You have been a member since <b> <time datetime="2023-04-16 14:00">04/16/2023</time></b>
								</p>
								
								<p style="font-variant: small-caps;">
									Upload profile picture:
								</p>
								<form action="upload.php" method="POST" enctype="multiple/form-data">
									<input type="file" name="file" id="file">
									<button type="submit" name="submit">UPLOAD</button>
								</form>';
								
					}
					else{
						echo '<p class="usererror">Error: You are logged out!</p>';
						echo 'Please<a href="/project/login.php">log in</a>to access this page';

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
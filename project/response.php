<?php
	include_once "includes/connect.php";
?>


<html>
  <head>
    <title>Response saved</title>
	<link rel="stylesheet" type="text/css" href="styles/style.css">
  </head>
  <header>
				<style>
				<link rel="stylesheet" href="navbar/CSS/header.css">
			
				</style>
				<link rel="html" href="project/navbar/header.html">
				
				
				<?php require "header.php";?>			

			
				</header>
  <body>
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
						echo 'Please <a href="/project/login.php">log in</a> to access this page';

					}
					?>
    
	
   
  </body>
  <footer>
		
		<div id="directory">
				<ul>
					<li><a href="/project/project.php">Projects</a></li>					
						<li><a href="/project/TGGForums.php">Forums</a></li>
						<li><a href="/project/About.php">About</a></li>
						<li><a href="/project/ContactTGG.php">Contact</a></li>
				</ul>					
			</div>
		
		
		<div>
			<address>
				<?php include "footer.php";?>			
				</address>
			</div>
	</footer>
</html>
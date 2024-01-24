<html>
  <head>
    <title>TGG Login page</title>
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
		
		  <h1>Login</h1>
		  
		
					
					<?php 
					if(isset($_GET["error"])){
						
						echo '<p class="usererror">Error:';
						
						if($_GET["error"]=="emptyFields"){
							echo ' Please fill in ALL fields!</p>';
						}
						else if($_GET["error"]=="nouser"){
							echo ' User not found.</p>';
						}
						else if($_GET["error"]=="sqlerror"){
							echo ' Credentials do not match</p>';
						}
						else if($_GET["error"]=="wrongpwd"){
							echo ' Incorrect Password</p>';
						}
						else if($_GET["error"]){
							echo ' Please try again.</p>';
						}
						
						
					}
					else if(isset($_GET["login"])){
					if ($_GET["login"]=="success"){
						echo '<p class="signupsuccess" style="color:#364a36;">Login Successful!</p>';
					}}
				
				?>
		  
		  <p> Enter your username and password: </p>
		

		<form action="includes/login.inc.php" method="post"> 
		  Username: <input type="text" name="username"><br>
		  Password: <input type="password" name="password"><br>
		  <button type="submit" name="login-submit">Submit</button>
		</form>
	</body>
	<footer>
		<div id="directory" style="background-color:#202c20">
				<ul>
					<li><a href="/project/project.php">Projects</a></li>					
						<li><a href="/project/TGGForums.php">Forums</a></li>
						<li><a href="/project/About.php">About</a></li>
						<li><a href="/project/ContactTGG.php">Contact</a></li>
				</ul>					
			</div>
			<?php include "footer.php";?>	
	</footer>
</html>
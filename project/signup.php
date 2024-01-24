<DOCTYPE html>
<html>
	<head>
	<title>Tiny Goat LLC Sign up</title>
	</head>
	<style>
			a{
				color: #c5d5c5;
			}
			input{
				color: #c5d5c5;
			}
			p.usererror{
				color:#ff0000;
				background-color:#660000;
				border-style: outset;
				font-weight: bold;
			}
			<!-- 
				necessary to override styling
				p.usererror{} is in styles.css doc, but necessary here 
				or inline to style error messages
			-->
			</style>
	<body>
		<header>
				<style>
				<link rel="stylesheet" href="navbar/CSS/header.css">
				</style>
				<link rel="html" href="project/navbar/header.html">
				
				<?php require "header.php";?>
		</header>
		<link rel="stylesheet" type="text/css" href="styles/style.css">
		<main>
			
		
		
			<section class="section-default">
				<h1>Signup</h1>
				
				
				<?php 
					if(isset($_GET["error"])){
						
						echo '<p class="usererror">';
						
						if($_GET["error"]=="emptyFields"){
							echo 'Error: Please fill in ALL fields!</p>';
						}
						else if($_GET["error"]=="passwordcheck"){
							echo 'Error: Passwords do not match!</p>';
						}
						else if($_GET["error"]=="sqlerror"){
							echo 'Error: Not found in Database!</p>';
						}
						else if($_GET["error"]=="usertaken"){
							echo 'Error: That username is already taken!</p>';
						}
						
					}
					else if(isset($_GET["signup"])){
					if ($_GET["signup"]=="success"){
						echo '<p class="signupsuccess" style="color:#364a36;">Signup Successful!</p>';
					}}
				
				?>
				
				
				<form action="includes/signup.inc.php" method="post">
					<input type="text" style="background-color:#202c20" name="username" placeholder="Username"><br>
					<input type="text" style="background-color:#202c20" name="mail" placeholder="E-mail"><br>
					<input type="password" style="background-color:#202c20" name="password" placeholder="Password"><br>
					<input type="password"  style="background-color:#202c20"name="passwordRepeat" placeholder="Repeat Password"><br>
					<button type="submit"  name="signup-submit">Signup</button>
				</form>
				
			</section>
		</main>
				
		
	</body>
	<footer >
				
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


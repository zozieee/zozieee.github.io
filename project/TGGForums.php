<!DOCTYPE html>
<html>
	<head>
		<title>User Post: Welcome</title>
		<meta name="viewport" content="width=device-width; initial-scale=1.0">
		<meta name="keywords" content="intermediate html, learning,
		INEW-2434" />
		<meta name="description" content="An intermediate web page for
		TGG LLC" />
		<meta name="author" content="Zoe Cope" />
		<style>
			*{
				color: #c5d5c5;
			}
			p{
				width:80%;
				
				color: #c5d5c5;
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
				</header>
				
				<div id="recent posts" style="background-color:#567656">
					<h1 style="background-color:#9CB39C; color:#364A36;">Recent Posts </h1>
					
					<?php
					if(isset($_SESSION['username'])) 
					{
						echo 'This is the Tiny Goat Gamming community Forum! <br>';
					}
					else{
					echo '<p>Please <a href="/project/login.php">log in</a> before submitting a post/comment ~</p>';
					}
					?>
					
						<ul>
							<li><a href="TGGForumsPost1.php">Welcome</a></li>
							<li><a href="TGGForumsPost2.php">Post 2</a></li>
							<li><a href="TGGForumsPost3.php">Post 3</a></li>
						</ul>		
				</div>
				
				<div id="mrp" style="background-color:#567656"><!- mrp=most recent post->
					
					<p>
					
&#128016;
&#128016;
&#128016;
     
					</p>
					
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
<!DOCTYPE html>
<html>
	<head>
		<title>Forums</title>
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
				
				<div id="post2" style="background-color:#567656">
					<h1 style="background-color:#9CB39C; color:#364A36;">This is POST 2</h1>
					<p>
						an example post:
						When will this update be released?					
					</p>
					
					<p style="background-color:#364A36;">
					<?php
					if(isset($_SESSION['username'])) 
					{
						echo 'Comment Section:';
						echo '<br> (-UNDER DEVELOPMENT-)';
						
						echo '<form action="#" method="POST" enctype="multiple/form-data"> 
							 <textarea name="post" style="width:600px; height:200px;"  placeholder="Type your comment here..."></textarea> 
							 <br><button type="submit" name="submit">comment</button>
						</form> ';
						
						if(isset($_SESSION['#'])) 
					{
						echo ' '.$_POST['post'].' ';
						
						//want to listen for submit pushed for textarea, display $_POST variable for now
						//make db for forums/pfp?
					}}
					else{
					echo 'Please <a href="/project/login.php">log in</a> before submitting a post/comment ~';
					}
					?>
					</p>
					<h2 >Recent Posts:</h2>
						<ul>
							<li><a href="TGGForumsPost1.php">Welcome</a></li>
							<li><a href="TGGForumsPost2.php">Post 2</a></li>
							<li><a href="TGGForumsPost3.php">Post 3</a></li>
						</ul>		
					
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
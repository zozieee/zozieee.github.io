


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
				
				<div id="post1" style="background-color:#567656">
					<h1 style="color:#364A36">Welcome!</h1>
					<p>
						This is a space for community questions and collaboration! 
				<br>
						<a href="/project/ContactTGG.php">Please feel free to contact the team directly :)</a><br><br>
						<img class="jump" style="width:40%" src="images/goat-jump.gif">
					</p>
					
					<p style="background-color:#364A36;">
					

					<?php
					if(isset($_SESSION['username'])) 
					{
						echo 'Comment Section:';
						echo '<br> (-UNDER DEVELOPMENT-)';
						
					//	echo '<form action="#" method="POST" enctype="multiple/form-data"> 
					//		 <textarea name="post" style="width:600px; height:200px;"  placeholder="Type your comment here..."></textarea> 
					//		 <br><button type="submit" name="submit">comment</button>
					//	</form> ';
						
						
						//embedded form allows comments to be emailed to admin
						echo '<script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/embed/v2.js"></script>
								<script>
								  hbspt.forms.create({
									region: "na1",
									portalId: "39655257",
									formId: "b30271f6-5c16-4e6e-a576-d582f17e19ef"
								  });
								</script>';
						
						if(isset($_SESSION['#'])) 
					{
						echo '<p>'.$_POST['post'].'</p>';
						
						//want to listen for submit pushed for textarea, display $_POST variable for now
						//make db for forums/pfp?
					}}
					else{
					echo 'Please <a href="/project/login.php">log in</a> before submitting a post/comment ~';
					}
					?>
					</p>
					<h2>Recent Posts:</h2>
						<ul>
							<li><a href="TGGForumsPost1.php">Welcome</a></li>
							<li><a href="TGGForumsPost2.php">Post 2</a></li>
							<li><a href="TGGForumsPost3.php">Post 3</a></li>
						</ul>		
					
				</div>
				
				<div id="mrp" style="background-color:#4b684b"><!- mrp=most recent post->
					
					<p>
						link to post, display from page created when user submitted post
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
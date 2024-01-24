<!DOCTYPE html>
<html>
	<head>
		<title>About</title>
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
				
				</header>
				
				<div id="About TGG" style="background-color:#567656; color:#364A36;" >
					<h1 style="background-color:#ADC1AD">We are Tiny Goat Gaming:</h1>
					
					<p>We mod, teach, and grow with our community.<br><br>
					
					<br>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
					</p>
				</div>
					
				<div id="Meet the team" class="right" style="background-color:#567656">
					<h1 style="background-color:#ADC1AD; color:#364A36;">Meet the Team:</h1>
						<h2>Gregory M.</h2>
							<img class="greg" src="images/greg.png" style="border-radius: 50%;">
						 <ul>
							<li>Owner</li>
							<li>Console developer</li>
							</ul>
							
						<h2>Clay "debugman"</h2>
							<img class="debugman" src="images/debugman.png" style="border-radius: 50%;">
						 <ul>
							<li>Mod development Lead</li>
							<li>Motion</li>
							<li>Whiteboxing</li>
							</ul>
							
						<h2>Vinny M.</h2>
							<img class="vinny" src="images/vin.png" style="border-radius:60%;">
						 Art director
					
						<h2>Zoe C.</h2>
						
							<img class="zoe" src="images/zoe.png" style="border-radius: 60%;">
					
						<ul>
							<li>Web developer</li>
							<li>Social media</li>
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
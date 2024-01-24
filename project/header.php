<?php session_start(); ?>

<html>
<head>
<script src="C:\xampp\htdocs\project\script.js" defer></script>
<!-- 
	how to add listener for hamburger menu toggle?
	when active should hide display header as 
	flex-direction:column, click again to hide menu
-->
</head>
				<a class="left" style="float:left;">
				<a class="logo" href="/project/index.php"><img class="logo" src="images/cuteGoat.png"  ></a>
				
				<?php
			
					if(isset($_SESSION['username'])) 
					{
						echo'<a class="welcome text" href="/project/members.php"style="margin:10px;">
							Welcome '.$_SESSION['username'].'!'.'<br><br></a>';
						echo '<a class="logout button" href="/project/includes/logout.inc.php">
							<button>Logout</button></a>';
						echo '<p class="login-status> 
							You are logged in!</p>';
					}
					else{
						echo '<a class="login button" href="/project/login.php">
						<button>Login</button></a>
						<a class="signup" href="/project/signup.php">
						<button>Signup</button></a>';
					}
				?>
				</a>
				
				<nav class="navbar">
					<a href='#' class="toggle-button">
						<span class="bar"></span>
						<span class="bar"></span>
						<span class="bar"></span>
					</a>
				
					<ul class="nav_links">
						<li><a href="/project/project.php">Projects</a></li>					
						<li><a href="/project/TGGForums.php">Forums</a></li>
						<li><a href="/project/About.php">About</a></li>
						<li><a href="/project/ContactTGG.php">Contact</a></li>
						
					</ul>
				</nav>
				<script>
					const toggleButton=document.getEelementsByClassName('toggle-button')[0]
					const navbarLinks = document.getEelementsByClassName('nav_links')[0]
					
					toggleButton.addEventListener('click', ()=>{
						navbarLinks.classList.toggle('active')	
					})
				</script>
</html>
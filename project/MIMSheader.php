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
				<a class="logo" href="/project/index.php"><img class="logo" src="images/Kindnessmatters.png"  ></a>
				
				
				</a>
				
				<nav class="navbar">
					<a href='#' class="toggle-button">
						<span class="bar"></span>
						<span class="bar"></span>
						<span class="bar"></span>
					</a>
				
					<ul class="nav_links">
						<li><a href="https://www.academicexcellencematters.com/">Home</a></li>
						<li><a href="https://www.academicexcellencematters.com/team-3">Symbols</a></li>
						<li><a href="https://www.academicexcellencematters.com/office-starbucks">Office</a></li>
						<li><a href="https://www.academicexcellencematters.com/quantum-computing">Quantum</a></li>
						
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
<!DOCTYPE html>
<html>
	<head>
		<title>Zoe HQ</title>
		<meta name="viewport" content="width=device-width; initial-scale=1.0">
		<meta name="keywords" content="intermediate html, learning,
		INEW-2434" />
		<meta name="description" content="An intermediate web page for
		INEW-2434" />
		<meta name="author" content="Zoe Cope" />
		<style>
			a:link {color: #6b946b;}
				a:visited {color: #e4d1d1;}
				a:hover {color: #7FBD32;}
				a:active {color: #6b946b;}
			body{
				background-color:#364a36;
				 color: #c5d5c5;
				 font-style:center;
				 font-size:large;
				 font-family:"Georgia", serif;
				 }			
			h1{				
				font-style:center;
				color: #364a36;
				background-color:#9fa9a3;
				font-variant:small-caps;
				text-align:center;
				}			
			div{
				border-width:40px;
				border-style:none;
				margin:15px;
				min-width: 150px;
				max-width: 600px;
				font-style:center;
				float:left;
				}
			p {
				text-indent:20px;
				text-align:justify;
				}
			footer {
				font-size:smaller;
				}
				
			video {
				  width: 100%;
				  height: auto;
				}
			@media(max-width: 700px) {
					#link1{color:green;}
				}// devices smaller 700px get green text//used "embed video" option from source on Youtube
		
		
		</style>
	</head>
	
	<body>
		<header>
			<h1> Responsive Design Assignment </h1>
		</header>		  
			<div id="directory">
				<ul>
					<li><a href="#link1">Paragraph</a></li>
					<li><a href="#link2">Pic</a></li>
					<li><a href="#link3">song</a></li>
				</ul>					
			</div>
			
			<div id="paragraph">
			<a name="link1">
				<p>
					Hello, my name is Zoe! I am a Sophmore at San Antonio College studying computer programming. 
					</p>
				<p>
					Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
					</p>
			</div>
			
			<div id="pic">
			<a name="link2">
				<p>
				<style>
					max-width:300px;
				</style>
				<img src="https://i.kym-cdn.com/photos/images/original/001/275/715/010.png" max-height="300px">
				</p>
			</div>	
			
			<div id="song">
			<a name="link3">
				<p>
				<style>
					max-width:800px;
					padding:40px;
				</style>
				
				
				
				<iframe width="560" height="315" src="https://www.youtube.com/embed/Yw6u6YkTgQ4" title="YouTube video player" frameborder="0" 
					allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
					allowfullscreen></iframe>
				</p>
			</div>	
			
		<footer>
		
			<div>
			<address>
				Article by <a href="mailto:zcope@student.alamo.edu">Zoe Cope</a>.<br> Texas (yeehaw)<br>USA<br>&copy; 2022 Zoe Cope
			</address>
			</div>
		</footer>
	</body>
</html>
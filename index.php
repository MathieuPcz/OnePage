<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Mathieu Paczesny | Developpeur Web</title>
		<link rel="stylesheet" href="style.css">
	</head>
	<body>
		<div id="header">
			<div id="title">
				<h2>Mathieu <div class="colorTitle">P</div>a<div class="colorTitle">cZ</div>esny</h2>
			</div>
			<nav>
				<ul>
					<li><a  href="#home">Accueil</a></li>
					<li><a  href="#about">Infos</a></li>
					<li><a  href="#services">Services</a></li>
					<li><a  href="#skill">Compétences</a></li>
					<li><a  href="#project">Projets</a></li>
					<li><a  href="#contact">Contact</a></li>
				</ul>
			</nav>
		</div>
		<div id="home"></div>
		<div id="about"></div>
		<div id="services"></div>
		<div id="skill"></div>
		<div id="project"></div>
		<div id="contact"></div>
	<script type="text/javascript" src="jquery.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$("a").click(function(e) {
			    e.preventDefault();
			    $("a").removeClass("activeMenu");
			    $(this).addClass("activeMenu");
			});
		});
	</script>
	</body>
</html>


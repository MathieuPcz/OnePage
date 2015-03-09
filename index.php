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
					<li><a  class="home" href="#home">Accueil</a></li>
					<li><a class="otherHome"  href="#about">Infos</a></li>
					<li><a class="otherHome"  href="#services">Services</a></li>
					<li><a class="otherHome"  href="#skill">Compétences</a></li>
					<li><a class="otherHome"  href="#project">Projets</a></li>
					<li><a class="otherHome"  href="#contact">Contact</a></li>
				</ul>
			</nav>
		</div>
		<div id="downScrow"><a href="#about"><img src="images/flechebas.png" alt="Clic ici"></a></div>
		<div id="home">
			<div id="defilText">
				<strong>Vous avez des projets ? des idées ?</strong>
				<strong>Créatif de créer un site web à votre image</strong>
			</div>
		</div>
		<div id="about"></div>
		<div id="services"></div>
		<div id="skill"></div>
		<div id="project"></div>
		<div id="contact"></div>
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/jquery.localscroll-1.2.7-min.js"></script>
	<script type="text/javascript" src="js/jquery.scrollTo-1.4.3.1-min.js"></script>
	<script type="text/javascript" src="js/jquery.parallax-1.1.3.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			/*mise en place du paralax*/
			$.localScroll();		
    		  $('#home').parallax("50%", 0.2); 
    		  $('#about').parallax("50%", 0.2); 
    		  $('#services').parallax("50%", 0.2);
    		  $('#skill').parallax("50%", 0.2);

			/*repete defilement haut/bas de la fleche*/ 
			function bis(){
				 $("#downScrow").animate({marginTop:450},'slow')
			 				.animate({marginTop:500},'slow', bis);
				};
			bis();

			/*lancement du menu une fois #home passé*/

			$('.otherHome').click(function(){
				$('#header').css('visibility','visible');
			})
				
			$('.home').click(function(){
				$('#header').css('visibility','hidden');
			})
				
			


			/*Zoom image de fond #home*/
			function repeatZoom(){

			var largeurEcran = $(window).width();
			var zoomImage = largeurEcran + 100;
			$('#home').animate({width:zoomImage},5000)
					  .animate({width:largeurEcran},5000, repeatZoom);
			};
			repeatZoom();
			/*fixe color sur menu selectionné*/
			$("li a").click(function(e) {
			    e.preventDefault();
			    $("li a").removeClass("activeMenu");
			    $(this).addClass("activeMenu");
			});

			/*clic fleche -> menu visible*/
			$('#downScrow').click(function(){
				$('#header').css('visibility','visible');
			})
		});
	</script>
	</body>
</html>


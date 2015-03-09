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
					<li><a class="otherHome"  href="#about" id="infos">Infos</a></li>
					<li><a class="otherHome"  href="#services">Services</a></li>
					<li><a class="otherHome"  href="#skill">Compétences</a></li>
					<li><a class="otherHome"  href="#project">Projets</a></li>
					<li><a class="otherHome"  href="#contact">Contact</a></li>
				</ul>
			</nav>
		</div>
		<a href="#about"><div id="downScrow"><img src="images/flechebas.png" alt="Clic ici"></div></a>
		<div id="zoomHome">
			<div id="defilText">
				<ul>
					<li>Vous avez des projets ? des idées ?</li>
					<li>Je vous offre ma créativité et mes compétences</li>
					<li>Pour un site web à votre image</li>
				</ul>
			</div>
			<div id="home"></div>
		</div>
		<div id="about">
			<div id="cercleProfil">
				<div id="imgProfil">
					<img src="images/profil.jpg" alt="Image de profil" id="profil">
				</div>
			</div>
			<h2>A propos</h2>
			<p>La créativité autorise chacun à commettre des erreurs. L'art c'est de savoir lesquelles garder.</p>
		</div>
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
			/*defilement image profil*/
			
			function defilProfil(){
				var largeurImage = $(window).width()*0.2;
				 $("#profil").animate({width:largeurImage},5000).delay(2000)
				 			 .animate({width:480},5000,defilProfil).delay(2000);
				};

				defilProfil();
			
			/*mise en place du paralax*/
			$.localScroll();		
    		  $('#home').parallax("50%", 0.2); 
    		  $('#about').parallax("50%", 0.2); 
    		  $('#services').parallax("50%", 0.2);
    		  $('#skill').parallax("50%", 0.2);

			/*repete defilement haut/bas de la fleche*/ 
			function bis(){
				var largeurImage = $(window).width()*0.36;
				var largeurImageBas = ($(window).width()*0.36)+(largeurImage*0.05);
				 $("#downScrow").animate({marginTop:largeurImage},'slow')
			 				.animate({marginTop:largeurImageBas},'slow', bis);
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
			$('#home').animate({width:zoomImage},5000).delay(1000)
					  .animate({width:largeurEcran},5000, repeatZoom).delay(1000);
			};
			repeatZoom();
			/*fixe color sur menu selectionné*/
			$("li a").click(function(e) {
			    e.preventDefault();
			    $("li a").removeClass("activeMenu");
			    $(this).addClass("activeMenu");
			});

			/*defilement text*/
			$('#defilText').fadeOut(0).fadeIn(2000);
			$(function(){
      setInterval(function(){
         $("#defilText ul").animate({marginTop:-50},1500,function(){
            $(this).css({marginTop:0}).find("li:last").after($(this).find("li:first"));
         })
      }, 4000);
   });

			/*clic fleche -> menu visible*/
			$('#downScrow').click(function(){
				$('#header').css('visibility','visible');
				$('#infos').addClass("activeMenu");
			})
		});
	</script>
	</body>
</html>


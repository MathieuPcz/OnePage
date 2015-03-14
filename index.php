<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Mathieu Paczesny | Developpeur Web</title>
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="css/home.css">
		<link rel="stylesheet" href="css/about.css">
		<link rel="stylesheet" href="css/services.css">
		<link rel="stylesheet" href="css/skill.css">
	</head>
	<body>
		<div id="chargement"><span id="chargement-infos"></span></div>
		<div id="content">
			<div id="header">
				<div id="title">
					<h2>Mathieu <div class="colorTitle">P</div>a<div class="colorTitle">cZ</div>esny</h2>
				</div>
				<nav>
					<ul>
						<li><a  class="home" href="#home">Accueil</a></li>
						<li><a class="otherHome"  href="#about" id="infos">A Propos</a></li>
						<li><a class="otherHome"  href="#services">Services</a></li>
						<li><a class="otherHome"  href="#skill" id="comp">Compétences</a></li>
						<li><a class="otherHome"  href="#project">Projets</a></li>
						<li><a class="otherHome"  href="#contact">Contact</a></li>
					</ul>
				</nav>
			</div>
			<a href="#about"><div id="downScrow"><img src="images/flechebas.png" alt="Clic ici"></div></a>
			<div id="zoomHome">
				<h2>Mathieu <div class="colorTitle">P</div>a<div class="colorTitle">cZ</div>esny</h2>
				<div id="defilText">
					<ul>
						<li>Vous avez des projets ? des idées ?</li>
						<li>Je vous offre ma créativité et mes compétences</li>
						<li>Pour un site web à votre image</li>
					</ul>
				</div>
				<p>Web Designer | Web developpeur</p>
				<div id="home"></div>
			</div>
			<div id="triangleBleu"></div>
			<div id="container">
				<div id="about">
					<div id="cercleProfil">
						<div id="imgProfil">
							<img src="images/profil.jpg" alt="Image de profil" id="profil">
						</div>
					</div>
					<div id="textAbout">
						<hr><h1>A propos</h1>
						<cite><p>La créativité autorise chacun à commettre des erreurs. L'art c'est de savoir lesquelles garder.</p></cite>
						<h2>Parlons un peu de moi</h2>
						<p>Developpeur Web depuis un an, j'apporte ma créativité et mes compétence. Je vous accompagne jusqu'à la production de votre projet. Créatif et passionné, mes compétences vous permettront de réaliser un site web dynamique, et protègé. m'éforcant de rester à la page des tendances du webdesign ainsi que du webdevelopment, je suis à l'écoute des besoins et j'aime apporter mes idées au sein d'un projet pour qu'elles répondent au mieux à vos attentes.</p>
						<h2>Mon parcour</h2>
						<p>Ma passion pour le web ne m'est pas apparut au début de mes études. J'ai commencé par un baccalauréat technologique dans le domaine de l'électrotechnique. J'ai ensuite continué dans cette vois par un bts puis une licence professionnel dans les énergies. C'est seulement pendant cette license que cette passion est arrivée. J'ai commencé par apprendre les rouages d'un site web et ces secrets via le site <a href="http://openclassrooms.com/" target="_blank">d'OpenClassRooms</a>. Après un an d'apprentissage en autodidacte je décide de reprendre mes études dans les métiers du multimédia et de l'internet.</p>
					</div>
					
				</div>
				<div id="services">
					<hr><h1>Services</h1>

					<div id="img">
						<strong>WEBDEVELOPER FRONT-END ET BACK-END, J'OFFRE MES SERVICES POUR LA CRÉATION DE SITES WEB ET DE TRAVAUX D'INFOGRAPHIE.</strong>
						<div class="textLogo">
							<img src="images/infoLogo.png" alt="logo Infographie">
							<h2>Infographie</h2>
							<p>Création d'un univers graphique à votre image.</p>
						</div>
						<div class="textLogo">
							<img src="images/webLogo.png" alt="logo Web">
							<h2>Site Web</h2>
							<p>Intégration et développement de votre site web. Du site vitrine au grand projet.</p>
						</div>
						<div class="textLogo">
							<img src="images/commLogo.png" alt="logo Communication">
							<h2>Communication</h2>
							<p>Communication visuel à travers la publicité papier ou numérique grâce aux réseaux sociaux.</p>
						</div>
					</div>
				</div>
				<div class="triangleInvers"></div>
				<div id="skill">
					<hr><h1>Compétences</h1>
					<cite> L’autorité d’un seul homme compétent, qui donne de bonnes raisons et des preuves certaines, vaut mieux que le consentement unanime de ceux qui n’y comprennent rien.<p>	Galilée</p></cite>
					<h2>Intégration Web</h2>
					<div id="imgIntegration">
						<img src="images/html.png" alt="html" id="html">
						<img src="images/css.png" alt="css" id="css">
						<img src="images/jquery.png" alt="jquery" id="jquery">
						<img src="images/bootstrap.png" alt="bootstrap" id="bootstrap">
						<div class="progress"><div class="barreProgress" id="barreInt"></div></div>
					</div>
					<h2>Developpement Web</h2>
					<div id="imgDev">
						<img src="images/php.png" alt="php" id="php">
						<img src="images/symfony.png" alt="symfony" id="symfony">
						<img src="images/wordpress.png" alt="wordpress" id="wordpress">
						<img src="images/git.png" alt="git" id="git">
						<div class="progress"><div class="barreProgress" id="barreDev"></div></div>
					</div>
					<h2>Infographie/communication</h2>
					<div id="imgInfographie">
						<img src="images/photoshop.png" alt="photoshop" id="photoshop">
						<img src="images/illustrator.png" alt="illustrator" id="ai">
						<img src="images/aftereffect.png" alt="afterEffect" id="ae">
						<div class="progress"><div class="barreProgress" id="barreInfo"></div></div>	
					</div>
				</div>
				<div id="project"></div>
				<div id="contact"></div>
			</div>
		</div>
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/jquery.localscroll-1.2.7-min.js"></script>
	<script type="text/javascript" src="js/jquery.scrollTo-1.4.3.1-min.js"></script>
	<script type="text/javascript" src="js/loader.js"></script>
	<script type="text/javascript" src="js/barreLoad.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$.pageLoader();
		
		
		/*defilement image profil*/
		
		function defilProfil(){
			var largeurImage = $(window).width()*0.3;
			 $("#profil").animate({width:largeurImage},5000).delay(2000)
			 			 .animate({width:480},5000,defilProfil).delay(2000);
			};

			defilProfil();
		
		/*mise en place du scroll*/
		$.localScroll();		

		/*repete defilement haut/bas de la fleche*/ 
		function bis(){
			var largeurImage = $('#zoomHome').height()*0.70;
			var largeurImageBas = ($('#zoomHome').height()*0.70)+(largeurImage*0.05);
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

	/*	defilement integration text*/
			$('#integration').fadeOut(0).fadeIn(2000);
		$(function(){
	      setInterval(function(){
	         $("#integration ul").animate({marginTop:-50},1500,function(){
	            $(this).css({marginTop:0}).find("li:last").after($(this).find("li:first"));
	         })
	      }, 4000);
	   });

		/*clic fleche -> menu visible*/
		$('#downScrow').click(function(){
			$('#header').css('visibility','visible');
			 $("li a").removeClass("activeMenu");
			$('#infos').addClass("activeMenu");
		})

		
	


	});
	</script>

	</body>
</html>


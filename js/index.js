$(document).ready(function(){
			$.pageLoader();
		
		
		
		
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

		/*menu #project*/
		$('#Wal').css('display','none');
		$('#event').css('display','none');
		$('#christanarlk').css('display','none');

		$('#OnePage').addClass('activeMenuProject');

		$('#OnePage').click(function(){
			$('#project li').removeClass('activeMenuProject');
			$('#OnePage').addClass('activeMenuProject');
			$('#Wal').fadeOut();
			$('#event').fadeOut();
			$('#christanarlk').fadeOut();
			$('#onePage').fadeIn(800);
		});
		$('#WeAreLgends').click(function(){
			$('#project li').removeClass('activeMenuProject');
			$('#WeAreLgends').addClass('activeMenuProject');
			$('#onePage').fadeOut();
			$('#event').fadeOut();
			$('#christanarlk').fadeOut();
			$('#Wal').fadeIn(800);
		});
		$('#HashtagEvent').click(function(){
			$('#project li').removeClass('activeMenuProject');
			$('#HashtagEvent').addClass('activeMenuProject');
			$('#Wal').fadeOut();
			$('#onePage').fadeOut();
			$('#christanarlk').fadeOut();
			$('#event').fadeIn(800);
		});
		$('#christana').click(function(){
			$('#project li').removeClass('activeMenuProject');
			$('#christana').addClass('activeMenuProject');
			$('#Wal').fadeOut();
			$('#event').fadeOut();
			$('#onePage').fadeOut();
			$('#christanarlk').fadeIn(800);
		});
		
			/*gestion de la hauteur de fenetre*/
			var heightWindow = $(window).height()+50;
			$('#home').css('height',heightWindow);
			$('#zoomHome').css('height',heightWindow);

			/*gestion largeur de fenetre*/
			var widthWindow = $(window).width();
			if(widthWindow>900){
				$('#petitmenu').css('display','none');
			}

			if(widthWindow<900){

			$('#petitmenu').click(function(){
				$('#header nav').css('display','block');
			})
			
			$('#header nav').click(function(){
				$('#header nav').css('display','none');	
			})
		}

		/*charge barres skill*/
		var largeurbarre = $(window).width()*0.8;
	$('#imgIntegration img').removeClass('activeSkill');
	$('#imgDev img').removeClass('activeSkill');
	$('#imgInfographie img').removeClass('activeSkill');
	$('#html').addClass('activeSkill');
	$('#php').addClass('activeSkill');
	$('#photoshop').addClass('activeSkill');
	$('#barreInt').css('width',largeurbarre*0.8).html('80%');
	$('#barreDev').css('width',largeurbarre*0.75).html('75%');
	$('#barreInfo').css('width',largeurbarre*0.3).html('30%');
	});
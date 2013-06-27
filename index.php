<!doctype html>
<html lang="fr">
<head>
<meta charset="UTF-8" />
<title>Back to the wild</title>
<meta name = "keywords" content = "" />
<meta name = "description" content = "" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="css/style.css" rel="stylesheet" type="text/css">
</head>
<body>
	<div class="wrap">
		<header>
				<a href="#" id="menu" >Menu</a>
			<div class="subMenu" >
				<a href="#" id="home" class="subNavBtn">Home</a> 
		 		<a href="#" id="places" class="subNavBtn">Lieux</a> 
				<a href="#" id="signUp" class="subNavBtn">Inscription</a>
				<a href="#" id="concept" class="subNavBtn">Concept</a>
				<a href="#" id="contact" class="subNavBtn">Contact</a>
				<p>Retrouvez-nous sur</p>
				<a href="https://www.facebook.com/BackToTheWild.TV"><i class="icon-facebook"></i></a>
				<a href="https://twitter.com/bttw_tv"><i class="icon-twitter"></i></a>
				<a href="http://instagram.com/bttw_tv"><i class="icon-instagramm"></i></a>
				<a href="http://pinterest.com/bttwtv"><i class="icon-pinterest"></i></a>
			</div>
			<a href="#" id="close" >Fermer</a> 
			<div class="headerContent">
    			<h1>Back to the wild</h1>
    			<h2 class="slanted">Partez en homme</h2>
    			<h3 class="slanted">Revenez en heros !</h3>
    			<a href="">Regarder la video</a>
			</div>
			<div class="container home">
    		    <video width="100%" height="" autoplay loop>
				  <source src="video/H264720p.mp4" type="video/mp4">
				  <source src="video/H264720p.ogv" type="video/ogg">
				Your browser does not support the video tag.
				</video> 
			</div>
		</header>
		<div class="section places">
		    <h2>Parcours des candidats</h2>
		    <ul>
		    	<li><a href="" class="alaska">Alaska</a><a href="" class="more">Voir l'album sur Pinterest</a></li>
		    	<li><a href="" class="argentine">Argentine</a><a href="" class="more">Voir l'album sur Pinterest</a></li>
		    	<li><a href="" class="lybie">Lybie</a><a href="" class="more">Voir l'album sur Pinterest</a></li>
		    	<li><a href="" class="malaisie">Malaisie</a><a href="" class="more">Voir l'album sur Pinterest</a></li>
		    	<li><a href="" class="mongolie">Mongolie</a><a href="" class="more">Voir l'album sur Pinterest</a></li>
		    </ul>
		    <p class="scroll">Scroll</p>
		</div>
		<div class="section signUp">
		    <h2>Prouvez-nous votre valeur et</h2>
		    <h3>tentez de devenir le prochain heros !</h3>
		    <form action="index.php#signUp" method="post" class="sign">
		        <input type="text" placeholder="Nom*" />
		        <input type="text" placeholder="Email*" />
		        <textarea name="" rows="10" placeholder="Pourquoi pensez-vous être le prochain héros de l'émission ?*"></textarea>
		        <input type="submit" value="Envoyer" class="submit"/>
		    </form>
		     <p class="scroll">Scroll</p>
		</div>
		<div class="section concept clearfix">
		    <h2>Concept de l'emission</h2>
		    <div class="imgLeft">
		    	<img src="images/concept.jpg" alt="" height="429" width="416"/>
		    </div>
		    <div class="txtRight">
		        <p>Back To The Wild vous permet de vous retrouver seul face à la nature.Les plus motivés seront sélectionnés pour participer à cette aventure unique.</p>
                <p>Différents parcours proposés, dans différents pays, différents climats, et de différentes difficultés.</p>
                <p>Vous serez parachuté en pleine nature avec pour seule aide un gps, une ration de survie et devrez rallié un point le plus rapidement possible.</p>
                <p>Survie et dépassement de soit sont les maîtres mots de cette expérience hors du commun.</p>
                <p class="signature">L'equipe Back To the wild</p>
            </div>
		</div>
		<p class="scroll">Scroll</p>
		<footer>
    		<div class="section contact clearfix">
    		    <h2>Plus d'informations</h2>
    		    <div class="leftInfo">
    		    	<ul>
    		    		<li><a href="" class="contactLink">contact@backtothewild.fr</a></li>
    		    		<li><a href="" class="twLink">@Backtothewild</a></li>
    		    		<li><a href="" class="fbLink">fb.com/Backtothewild</a></li>
    	    		</ul>
        		</div>
	    		<form action="index.php#contact" method="post" class="contactForm">
	    			<input type="text" placeholder="Nom*"  class="contactName"/>
	    			<input type="text" placeholder="Email*" class="contactMail"/>
	    			<textarea name="" rows="10" placeholder="Votre message"></textarea>
	    			<input type="submit" value="Envoyer" class="submit"/>
	    		</form>
    		</div>
    	    <p>© Back to the wild <?php echo date("Y"); ?> - Tous droits réservés</p>
    	    <a href="">Plan du site</a>
		</footer>
	</div>
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
	<script type="text/javascript" 	src="js/modernizr.custom.js"></script>
	<script type="text/javascript" 	src="js/jquery.smint.js"></script>
    <script>
       	$(document).ready( function() {
		    $('.subMenu').smint({
		    	'scrollSpeed' : 1000
		    });

			$('#menu').on("click", function(){
				console.log('click');
				$('.subMenu').show();
				$('#close').show();
			});
			$('#close').on("click", function(){
				console.log('click');
				$('.subMenu').hide();
				$('#close').hide();
			});
			$('.subNavBtn').on("click", function(){
				$('.subNavBtn').removeClass('active');
				$(this).addClass('active');
			});
		});
	</script>
</body>
</html>
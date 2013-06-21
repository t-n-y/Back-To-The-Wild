<!doctype html>
<html lang="fr">
<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Back to the wild</title>
	<link rel="stylesheet" href="css/style.css">
	<script type="text/javascript" 	src="js/jquery.smint.js"></script>
	<script type="text/javascript">
	

$(document).ready( function() {
    $('.subMenu').smint({
    	'scrollSpeed' : 1000
    });
});


</script>
</head>
<body>
	<header>
		<div class="subMenu" >
		 	<div class="inner">
		 		<a href="#" id="sTop" class="subNavBtn">Home</a> 
				<a href="#" id="s1" class="subNavBtn">Section 1</a>
				<a href="#" id="s2" class="subNavBtn">Section 2</a>
				<a href="#" id="s3" class="subNavBtn">Section 3</a>
				<a href="#" id="s4" class="subNavBtn">Section 4</a>
				<a href="#" id="s5" class="subNavBtn end">Section 5</a>
			</div>
		</div>
		<nav>
			<h1><img src="http://placekitten.com/g/200/300" width="200" height="200" title="" alt=""></h1>
		  	<ul id="navMenu">
		  		<li><a href="#places">Lieux</a></li>
		  		<li><a href="#signUp">Inscription</a></li>
		  		<li><a href="#concept">Concept</a></li>
		  		<li><a href="#contact">Contact</a></li>
		  	</ul>
		  	<!-- <div id="navForm">
		    <h1><img src="http://placekitten.com/g/200/300" width="200" height="200" title="" alt=""></h1>
		   	<form>
		           <select id="menu" onchange="go()">
		             <option>--Select a page--</option>
		             <option value="#contact">Accueil</option>
		             <option value="#adventure">L'aventure</option>
		             <option value="#places">Lieux et Inscription</option>
		             <option value="#about">A propos</option>
		             <option value="#contact">Contact</option>
		           </select>
		       </form>
		   </div> -->
		   <ul>
		   		<li>Retrouvez-nous sur</li>
		   		<li>fb</li>
		   		<li>tw</li>
		   		<li>insta</li>
		   		<li>pint</li>
		   	</ul>
		</nav>
		<div class="container">
		    <div class="vendor">
		       <iframe src="http://player.vimeo.com/video/34127945" id="video"></iframe>
		    </div>
		</div>
	</header>
	<article id="places">
	    <h2>Parcours des candidats</h2>
	    <section>Alaska</section>
	    <section>Argentine</section>
	    <section>Lybie</section>
	    <section>Malaisie</section>
	    <section>Mongolie</section>
	</article>
	<article id="signUp">
	    <h2>Prouvenez-nous votre valeure et tentez de devenir le prochain héros !</h2>
	    <form action="index.php#signUp" method="post">
		    <input type="text" placeholder="Nom" value="">
	    	<input type="text" placeholder="Email"  value="">
	    	<textarea rows="5" cols="15" placeholder="Pourquoi bla bla" ></textarea>
	    	<input type="submit" value="Envoyer">
		    </form>
	</article>
	<article id="concept" class="clearfix sTop">
	    <h2>Concept de l’émission</h2>
	    <p>Back To The Wild vous permet de vous retrouver seul face à la nature.
Les plus motivés seront sélectionnés pour participer à cette aventure unique.

Différents parcours proposés, dans différents pays, 
diffèrents climats, et de différentes difficultés.

Vous serez parachuté en pleine nature avec pour seule aide un gps, 
une ration de survie et devrez rallié un point le plus rapidement possible.

Survie et dépassement de soit sont les maîtres mots 
de cette expérience hors du commun.</p>
	</article>
	<article id="contact">
	    <h2>Besoin de plus d'informations ?</h2>
	    <ul class="social">
	    	<li>contact@backtothewild.fr</li>
	    	<li>@Backtothewild</li>
	    	<li>fb.com/Backtothewild</li>
	    </ul>
	    <form action="index.php#contact" method="post">
	    	<input type="text" placeholder="Nom" name="contact[name]" value="">
	    	<input type="text" placeholder="Email" name="contact[mail]" value="">
	    	<textarea rows="5" cols="15" placeholder="Message" name ="contact[message]"></textarea>
	    	<input type="submit" value="Envoyer">
	    </form>
	</article>
	<footer>
		<p>c Back to the wild <?php echo date("Y"); ?> - Tous droits réservés</p>
		<a href="">Plan du site</a>
	</footer>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
    <script src="js/jquery.fitvids.js"></script>
    <script>
        // Basic FitVids Test
        $(".container").fitVids();
        
        //redirection for the select menu
        function go(){
            window.location=document.getElementById("menu").value;
        }
    </script>
</body>
</html>
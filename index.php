<!doctype html>
<html lang="fr">
<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Back to the wild</title>
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<nav>
    	<ul id="navMenu">
    		<li><a href="#video">Accueil</a></li>
    		<li><a href="#adventure">L'aventure</a></li>
    		<li><a href="#galerie">Galerie</a></li>
    		<li><h1>Image du milieu</h1></li>
    		<li><a href="#places">Lieux et Inscription</a></li>
    		<li><a href="#about">A propos</a></li>
    		<li><a href="#contact">Contact</a></li>
    	</ul>
    	<div id="navForm">
    	    <img src="" title="">
        	<form>
                <select id="menu" onchange="go()">
                  <option>--Select a page--</option>
                  <option value="#contact">Accueil</option>
                  <option value="#adventure">L'aventure</option>
                  <option value="#galerie">Galerie</option>
                  <option value="#places">Lieux et Inscription</option>
                  <option value="#about">A propos</option>
                  <option value="#contact">Contact</option>
                </select>
            </form>
        </div>
    </nav>
    <div class="container">
        <div class="vendor">
            <iframe src="http://player.vimeo.com/video/34127945" frameborder="0" id="video"></iframe>
        </div>
    </div>
	<article id="adventure" style="height:1000px;">
	    <h2>L'aventure</h2>
	    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium reprehenderit suscipit quos facilis ipsum at dolorem consequatur 
	    quasi esse non nulla nihil voluptate neque totam aut sapiente id molestiae autem?</p>
	    <!-- pour le responsive, fair passer les texte en dessou des autres et supprimer les marges -->
	    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste magnam commodi rem tempora sequi. Optio reprehenderit perspiciatis 
	    in est quia dolores autem fuga alias sit officiis dolorum ad molestiae recusandae.</p>
	</article>
	<article id="galerie">
	    <h2>Galerie</h2>
	</article>
	<article id="places">
	    <h2>Lieux & Inscription</h2>
	    map + formulaire
	</article>
	<article id="about">
	    <h2>A propos</h2>
	    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium reprehenderit suscipit quos facilis ipsum at dolorem consequatur 
	    quasi esse non nulla nihil voluptate neque totam aut sapiente id molestiae autem?</p>
	    <!-- pour le responsive, fair passer les texte en dessou des autres et supprimer les marges -->
	    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste magnam commodi rem tempora sequi. Optio reprehenderit perspiciatis 
	    in est quia dolores autem fuga alias sit officiis dolorum ad molestiae recusandae.</p>
	</article>
	<article id="contact">
	    <h2>Contact</h2>
	    formulaire
	</article>
	<footer>
	    <ul>
	    	<li><a href="">Sitemap</a></li>
	    	<li><a href="">Contact</a></li>
	    	<li><a href="">A propos</a></li>
	    </ul>
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
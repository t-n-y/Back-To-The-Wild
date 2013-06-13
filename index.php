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
    		<li><h1><img src="http://placekitten.com/g/200/300" width="200" height="200" title="" alt=""></h1></li>
    		<li><a href="#places">Lieux et Inscription</a></li>
    		<li><a href="#about">A propos</a></li>
    		<li><a href="#contact">Contact</a></li>
    	</ul>
    	<div id="navForm">
    	    <h1><img src="http://placekitten.com/g/200/300" width="200" height="200" title="" alt=""></h1>
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
            <iframe src="http://player.vimeo.com/video/34127945" id="video"></iframe>
        </div>
    </div>
	<article id="adventure" style="height:1000px;">
	    <h2>L'aventure</h2>
	    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium reprehenderit suscipit quos facilis ipsum at dolorem consequatur 
	    quasi esse non nulla nihil voluptate neque totam aut sapiente id molestiae autem?</p>
	    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste magnam commodi rem tempora sequi. Optio reprehenderit perspiciatis 
	    in est quia dolores autem fuga alias sit officiis dolorum ad molestiae recusandae.</p>
	</article>
	<article id="galerie">
	    <h2>Galerie</h2>
	</article>
	<article id="places">
	    <h2>Lieux & Inscription</h2>
	    <!-- google map iframe -->
	    <iframe width="425" height="350" src="https://maps.google.com/?ie=UTF8&amp;t=m&amp;ll=34.01055,-118.171692&amp;spn=0.199214,0.291824&amp;z=11&amp;output=embed"></iframe>
	    <br><a href="https://maps.google.com/?ie=UTF8&amp;t=m&amp;ll=34.01055,-118.171692&amp;spn=0.199214,0.291824&amp;z=11&amp;source=embed" style="color:#0000FF;text-align:left">Voir le plan sur Google maps</a>
	    <form action="index.php" method="post">
	    	<input type="email" placeholder="Email">
	    	<input type="submit" value="Je m'inscris">
	    </form>
	</article>
	<article id="about">
	    <h2>A propos</h2>
	    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium reprehenderit suscipit quos facilis ipsum at dolorem consequatur 
	    quasi esse non nulla nihil voluptate neque totam aut sapiente id molestiae autem?</p>
	    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste magnam commodi rem tempora sequi. Optio reprehenderit perspiciatis 
	    in est quia dolores autem fuga alias sit officiis dolorum ad molestiae recusandae.</p>
	</article>
	<article id="contact">
	    <h2>Contact</h2>
	    <form action="index.php" method="post">
	    	<input type="text" placeholder="Nom">
	    	<input type="email" placeholder="Email">
	    	<textarea rows="5" cols="15" placeholder="Message"></textarea>
	    	<input type="submit" value="Envoyer">
	    </form>
	</article>
	<footer>
	    <ul>
	    	<li><a href="">Sitemap</a></li>
	    	<li><a href="">Mentions légales</a></li>
	    	<li><a href="">Réglement</a></li>
	    	<li>copyright bla bla</li>
	    </ul>
	</footer>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
    <script src="js/jquery.fitvids.js"></script>
    <script src="js/base.js"></script>
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
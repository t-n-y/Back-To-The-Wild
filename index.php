<?php
$data = array (
		'name' => '',
		'mail' => '',
		'message' => '');
$errorMsg = array (
		'name' => '', 
		'mail' => '', 
		'message' => '');
$confirmMail='';
$to = "contact@detente-noir.com";
$subject = "Nouveau message";
$mailheaders = "Reply-To: ".$data['mail'];
if (isset($_POST['contact']))
{
	$data=$_POST['contact'];
	$cleanData=array_map('strip_tags', $data);
	$error=false;
	if (empty($data['name']))
	{
		$error=true;
		$errorMsg['name']='Remplir le nom';
	}
	if (empty($data['mail']))
	{
		$error=true;
		$errorMsg['mail']='Remplir l\'email';
	}
	if (empty($data['message']))
	{
		$error=true;
		$errorMsg['message']='Ecrire un message';
	}
	if (!$error)
	{
		$msg="Message de ".$cleanData['firstname']." ".$cleanData['name']."\n Adresse e-mail : ".$cleanData['email']."\n Message :".$cleanData['message'];
		//mail($to, $subject, $msg);
		$confirmMail = '<h3>Message envoyé !</h3>';
	}
}
?>
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
    		<li><a href="#places">Lieux et Inscription</a></li>
    		<li><h1><img src="http://placekitten.com/g/200/300" width="200" height="200" title="" alt=""></h1></li>
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
                  <option value="#places">Lieux et Inscription</option>
                  <option value="#about">A propos</option>
                  <option value="#contact">Contact</option>
                </select>
            </form>
        </div>
        <div id="social">
        	<ul>
        		<li><a href="">a</a></li>
        		<li><a href="">b</a></li>
        		<li><a href="">c</a></li>
        		<li><a href="">d</a></li>
        	</ul>
        </div>
    </nav>
    <div class="container">
        <div class="vendor">
            <iframe src="http://player.vimeo.com/video/34127945" id="video"></iframe>
        </div>
    </div>
	<article id="adventure">
	    <h2>L'aventure</h2>
	    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium reprehenderit suscipit quos facilis ipsum at dolorem consequatur 
	    quasi esse non nulla nihil voluptate neque totam aut sapiente id molestiae autem?</p>
	    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste magnam commodi rem tempora sequi. Optio reprehenderit perspiciatis 
	    in est quia dolores autem fuga alias sit officiis dolorum ad molestiae recusandae.</p>
	</article>
	<article id="places" class="clearfix">
	    <h2>Lieux & Inscription</h2>
	    <!-- google map iframe -->
	    <section id="gMap">
		    <iframe width="425" height="350" src="https://maps.google.com/?ie=UTF8&amp;t=m&amp;ll=34.01055,-118.171692&amp;spn=0.199214,0.291824&amp;z=11&amp;output=embed"></iframe>
		    <br><a href="https://maps.google.com/?ie=UTF8&amp;t=m&amp;ll=34.01055,-118.171692&amp;spn=0.199214,0.291824&amp;z=11&amp;source=embed" style="color:#0000FF;text-align:left">Voir le plan sur Google maps</a>
	    </section>
	    <section id="mapForm">
	    	<h3>Vivez l'aventure</h3>
		    <form action="index.php" method="post">
		    	<input type="email" placeholder="Email">
		    	<input type="submit" value="Je m'inscris">
		    </form>
	    </section>
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
	    <?php echo $confirmMail;?>
	    <form action="index.php#contact" method="post">
	    	<?php echo $errorMsg['name'];?>
	    	<input type="text" placeholder="Nom" name="contact[name]" value="<?php echo $data['name'];?>" required>
	    	<?php echo $errorMsg['mail'];?>
	    	<input type="email" placeholder="Email" name="contact[mail]" value="<?php  echo $data['mail'];?>">
	    	<?php echo $errorMsg['message'];?>
	    	<textarea rows="5" cols="15" placeholder="Message" name ="contact[message]" required><?php echo $data['message'];?></textarea>
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
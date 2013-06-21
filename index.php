<<<<<<< HEAD
=======
<?php
$data = array (
		'name' => '',
		'mail' => '',
		'message' => '');
$dataRegister = '';
$errorRegister = null;
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
	if (empty($data['mail']) || (!filter_var($_POST['contact']['mail'], FILTER_VALIDATE_EMAIL)))
	{
		$error=true;
		$errorMsg['mail']='Remplir une adresse email valide';
	}
	if (empty($data['message']))
	{
		$error=true;
		$errorMsg['message']='Ecrire un message';
	}
	if (!$error)
	{
		$msg="Message de ".$cleanData['name']."\n Adresse e-mail : ".$cleanData['mail']."\n Message :".$cleanData['message'];
		//mail($to, $subject, $msg);
		$confirmMail = '<h3>Message envoyé !</h3>';
	}
}
if (isset($_POST['register'])){
    
    if(filter_var($_POST['register'], FILTER_VALIDATE_EMAIL)){
        $errorRegister = null;
    }
    else {
        $errorRegister = 'Remplir une adresse email valide';
        $dataRegister = $_POST['register'];
    }
}
?>
>>>>>>> a493d0d82c872791aed66d436328a8e9fcb9bef1
<!doctype html>
<html lang="fr">
<head>
<meta charset="UTF-8" />
<title>Back to the wild</title>
<meta name = "keywords" content = "" />
<meta name = "description" content = "" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="css/style.css" rel="stylesheet" type="text/css">
<link href="css/demo.css" rel="stylesheet" type="text/css">

</head>
<body>
<<<<<<< HEAD
	<div class="wrap">
		<header>
			<div class="subMenu" >
				<a href="#" id="home" class="subNavBtn">Home</a> 
		 		<a href="#" id="places" class="subNavBtn">Lieux</a> 
				<a href="#" id="signUp" class="subNavBtn">Inscription</a>
				<a href="#" id="concept" class="subNavBtn">Concept</a>
				<a href="#" id="contact" class="subNavBtn">Contact</a>
			</div>
			<div class="container home">
		    <div class="vendor">
		       <iframe src="http://player.vimeo.com/video/34127945" id="video"></iframe>
		    </div>
			</div>
		</header>
		<div class="section places" style="height:1000px;">
		bhusdjfopmskdfihiuh
		</div>
		<div class="section signUp" style="height:1000px;">
		</div>
		<div class="section concept" style="height:1000px;">
		</div>
		<div class="section contact" style="height:1000px;">
		</div>
	</div>
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
	<script type="text/javascript" 	src="js/jquery.smint.js"></script>
	 <script src="js/jquery.fitvids.js"></script>
    <script>
        // Basic FitVids Test
        $(".container").fitVids();
=======
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
                  <option value="#contact" data-link="home">Accueil</option>
                  <option value="#adventure" data-link="adventure">L'aventure</option>
                  <option value="#places" data-link="places">Lieux et Inscription</option>
                  <option value="#about" data-link="about">A propos</option>
                  <option value="#contact" data-link="contact">Contact</option>
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
	    	<?php echo $errorRegister;?>
		    <form action="index.php#mapForm" method="post">
		    	<input type="text" placeholder="Email" name="register" value="<?php  echo $dataRegister;?>">
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
	    	<input type="text" placeholder="Nom" name="contact[name]" value="<?php echo $data['name'];?>">
	    	<?php echo $errorMsg['mail'];?>
	    	<input type="text" placeholder="Email" name="contact[mail]" value="<?php  echo $data['mail'];?>">
	    	<?php echo $errorMsg['message'];?>
	    	<textarea rows="5" cols="15" placeholder="Message" name ="contact[message]"><?php echo $data['message'];?></textarea>
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
    <script src="js/modernizr.custom.js"></script>
    <script>
        //redirection for the select menu
        function go(){
            // window.location=document.getElementById("menu").value;
            var id = document.getElementById("menu").value;
            scrollTo(id);
            return false;
            function scrollTo(target){
            	if($(target).length>=1){
            		height = $(target).offset().top;
            	}
            	$('html,body').animate({scrollTop: height}, 1200);
            	return false;
            }
        }
>>>>>>> a493d0d82c872791aed66d436328a8e9fcb9bef1
    </script>
	<script type="text/javascript">
		$(document).ready( function() {
		    $('.subMenu').smint({
		    	'scrollSpeed' : 1000
		    });
		});
	</script>
</body>
</html>
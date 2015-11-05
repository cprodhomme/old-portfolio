<?php
//ini_set('display_errors', 1);

if ($_POST) {
    if(!empty($_POST['email']) && !empty($_POST['message']) && !empty($_POST['name']) ) {
        $to      = 'prodhomme.clement@hotmail.fr';
        $subject = 'Contact - clementprodhomme.com - '.$_POST['name'];
        $message = $_POST['message'].' - email : '.$_POST['email'];
        $headers ='From: '.$_POST['email']."\n";
        $headers .='Reply-To: '.$_POST['email']."\n";
        $headers .='Content-Type: text/plain; charset="iso-8859-1"'."\n";
        $headers .='Content-Transfer-Encoding: 8bit';
        $headers .= 'MIME-Version: 1.0' . "\r\n";

        mail($to, $subject, $message);
        $email = null;
        $subject = null;
        $message = null;

        $error = null;
        $success = 'Email envoyé avec succès !';
    } else {
        $email = $_POST['email'];
        $name = $_POST['name'];
        $message = $_POST['message'];
        $error = 'Veuillez remplir tous les champs';
        $success = null;
    }
} else {
    $email = null;
    $name = null;
    $message = null;
    $success = null;
    $error = null;
}

?>
<!doctype html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Clément Prod'homme - Portfolio</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Load CSS -->
	<link href="css/style.css" rel="stylesheet" type="text/css" />
	<!-- Load Icon Font -->
	<link href="css/webfont.css" rel="stylesheet" type="text/css" />
	<!-- Load jQuery library -->
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
	<!-- Load jCarousel js -->
	<script type="text/javascript" src="js/jquery.jcarousel.js"></script>
	<!-- Load MixItUup js -->
	<script type="text/javascript" src="js/jquery.mixitup.js"></script>
	<!-- Load js -->
	<script type="text/javascript" src="js/custom.js"></script>

	<meta property="og:image" content="http://clementprodhomme.com/img/og-image.jpg"/>

	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-50448476-1', 'auto');
	  ga('send', 'pageview');

	</script>
</head>
<!-- Start Body -->
<body>
	<!-- Start Menu -->
	<div class="menubar" data-scroll="true">
		<a href="/" class="logo">Clément Prod'homme</a>
		<ul class="mainmenu">
			<li class="active"><a href="#home">Home</a></li>
			<li><a href="#about">A Propos</a></li>
			<li><a href="#services">Services</a></li>
			<li><a href="#skills">Compétences</a></li>
			<li><a href="#portfolio">Portfolio</a></li>
			<li><a href="#contact">Contact</a></li>
		</ul>
	</div>
	<!-- End Menu -->
	
	<!-- Start Home -->
	<a class="scroll" id="home"></a>
	<div class="home hero">
		<div class="overlay"></div>
		<div class="herowrapper">
			<h1>Je suis un développeur <b class="rotate color">Full-Stack,Front-End,Back-End</b>.</h1>
			<p>Je recherche un stage de fin d'études de 6 mois à partir de Janvier.</p>
		</div>
		<a href="javascript:void(0);" class="scrolldown">
			<h3>Scroll</h3>
			<div data-icon="&#xe017;" class="icon"></div>
		</a>
	</div>
	<!-- End Home -->

	<!-- Start BlockQuote -->
	<div class="blockquote main">
		<blockquote>Il n'y a que <b>10</b> types de personnes dans le monde : Ceux qui comprennent le <b>binaire</b>, et les autres.</blockquote>
	</div>
	<!-- End BlockQuote -->

	<!-- Start Section Divider -->
	<div class="section divider">
		<h2>A propos</h2>
		<a class="scroll" id="about"></a>
	</div>
	<!-- End Section Divider -->

	<!-- Start Content -->
	<div class="content">

		<!-- Start Main Paragraph -->
		<!--<p class="main dark-gray">Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.</p>-->
		<!-- Start Main Paragraph -->

		<!-- Start Person Block -->
		<div class="person">
			<div class="image quotefade">
				<img src="img/clement.jpg">
				<!--<div class="quotehover">
					<h5>“You have to do something you’ve never done 
					to have something you’ve never had.”</h5>
					<h6>Elizabeth Franklin</h6>
				</div>-->
			</div>
			<div class="info">
				<h2>Clément Prod'homme</h2>
				<!--<h4 class="light-gray">CEO</h4>-->
				<p>Geek à temps partiel ! Passionné par Internet, les films, les séries, comics ...</p>
				<a href="https://fr.linkedin.com/pub/clément-prod-homme/84/3bb/135" class="socialicon linkedin" target="_blank"></a>
				<a href="https://twitter.com/cle_61" class="socialicon twitter" target="_blank"></a>
			</div>
		</div>
		<!-- Clear :) -->
		<div class="clear"></div>
		<!-- End Person Block -->

	</div>
	<!-- End Content -->


	<!-- Start Section Divider -->
	<div class="section divider">
		<h2 id="servicestitle">Mes Services</h2>
		<a class="scroll" id="services"></a>
	</div>
	<!-- End Section Divider -->

	<!-- Start Content -->
	<div class="content">

		<!-- Start Main Paragraph -->
		<p class="main dark-gray" id="services">Survol les élèments pour en découvrir plus.</p>
		<!-- Start Main Paragraph -->

		<div class="servicesitem">
			<div class="front">
				<div data-icon="&#xe063;" class="icon"></div>
				<p>Réalisation de Site Internet de A à Z</p>
			</div>
			<div class="back">
				<h3>Application Web</h3>
			</div>
		</div>

		<div class="servicesitem">
			<div class="front">
				<div data-icon="&#xe087;" class="icon"></div>
				<p>Site Internet responsive : Ordinateur, Tablette, Mobile</p>
			</div>
			<div class="back">
				<h3>Responsive</h3>
			</div>
		</div>

		<div class="servicesitem">
			<div class="front">
				<div data-icon="&#xe051;" class="icon"></div>
				<p>Création d'Application mobile (IOS & Android), Application hybride (Titanium).</p>
			</div>
			<div class="back">
				<h3>App. Mobile</h3>
			</div>
		</div>

		<div class="servicesitem">
			<div class="front">
				<div data-icon="&#xe082;" class="icon"></div>
				<p>Gestion d'un Projet Web pour une réussite complète.</p>
			</div>
			<div class="back">
				<h3>Management</h3>
			</div>
		</div>

		<!-- Clear :) -->
		<div class="clear"></div>
	</div>
	<!-- End Content -->

	<!-- Start Section Divider -->
	<div class="section divider">
		<h2 id="servicestitle">Mes compétences</h2>
		<a class="scroll" id="skills"></a>
	</div>
	<!-- End Section Divider -->

	<!-- Start Content -->
	<div class="content">

		<!-- Start Main Paragraph -->
		<p id="testimonials" class="main dark-gray">Découvrez mes compétences</p>
		<!-- Start Main Paragraph -->

		<div class="logos">
			<img src="img/logos/ruby-on-rails-logo.png" data-text="Ruby On Rails <3" >
			<img src="img/logos/php-elephant.jpg" data-text="PHP 5" >
			<img src="img/logos/html5-logo.png" data-text="HTML5 / CSS3" >
			<img src="img/logos/javascript-logo.png" data-text="Javascript / Jquery">
			<img src="img/logos/mysql-logo.png" data-text="MySQL">
		</div>
		<div class="logos">
			<img src="img/logos/bootstrap-logo.png" data-text="Bootstrap" >
			<img src="img/logos/materialize-logo.jpg" data-text="MaterializeCSS" >
			<img src="img/logos/sass-logo.jpg" data-text="Sass" >
			<img src="img/logos/grunt-logo.png" data-text="GruntJS" >
			<img src="img/logos/angularjs-logo.png" data-text="AngularJS" >
		</div>
		<div class="logos">
			<img src="img/logos/titanium-logo.png" data-text="Titanium (Appcelerator)" >
			<img src="img/logos/swift-logo.jpg" data-text="Swift (Application Ios)">
			<img src="img/logos/git-logo.png" data-text="Git" >
			<img src="img/logos/illustrator-logo.png" data-text="Illustrator" >
			<img src="img/logos/photoshop-logo.jpg" data-text="Photoshop" >
		</div>

		<!-- Clear :) -->
		<div class="clear"></div>
	</div>
	<!-- End Content -->

	<!-- Start Section Divider -->
	<div class="section divider">
		<h2 id="servicestitle">Portfolio</h2>
		<a class="scroll" id="portfolio"></a>
	</div>
	<!-- End Section Divider -->

	<!-- Start Content -->

	<!-- Start Main Paragraph -->
	<p class="main dark-gray">Ceci est juste quelques uns de mes projets...</p>
	<!-- Start Main Paragraph -->

	<!--<ul class="portfoliofilter">
		<li class="filter active" data-filter="design branding illustration">All</li>
	    <li class="filter" data-filter="design">Design</li>
	    <li class="filter" data-filter="branding">Branding</li>
	    <li class="filter" data-filter="illustration">Illustration</li>
	</ul>-->

	<div class="clear"></div>

	<ul class="portfolio">
		<li class="item design">
			<div class="portfolioitem">
				<img src="img/portfolio/digit-ice-small.jpg">
				<div class="portfoliohover">
					<div class="info">
						<h1>+</h1>
						<h5>Digit'Ice</h5>
						<h6>Intégration</h6>
					</div>
				</div>
			</div>
		</li>

		<li class="item design">
			<div class="portfolioitem">
				<img src="img/portfolio/video-small.jpg">
				<div class="portfoliohover">
					<div class="info">
						<h1>+</h1>
						<h5>Lecteur Vidéo HTML5</h5>
						<h6>Développement</h6>
					</div>
				</div>
			</div>
		</li>

		<li class="item design">
			<div class="portfolioitem">
				<img src="img/portfolio/creations-je-small.jpg">
				<div class="portfoliohover">
					<div class="info">
						<h1>+</h1>
						<h5>Créations J&E</h5>
						<h6>intégration<b class="light-gray"> / </b>Boutique</h6>
					</div>
				</div>
			</div>
		</li>

		<li class="item branding">
			<div class="portfolioitem">
				<img src="img/portfolio/climateriaux.jpg">
				<div class="portfoliohover">
					<div class="info">
						<h1>+</h1>
						<h5>Climatériaux</h5>
						<h6>Intégration<b class="light-gray"> / </b>Développement</h6>
					</div>
				</div>
			</div>
		</li>
	</ul>

	<!-- Clear :) -->
	<div class="clear"></div>
	<!-- End Content -->
	
	<!-- Start Section Divider -->
	<div class="section divider">
		<h2 id="servicestitle">Contact</h2>
		<a class="scroll" id="contact"></a>
	</div>
	<!-- End Section Divider -->

	<!-- Start Content -->
	<div class="content contact">

		<!-- Start Main Paragraph -->
		<p class="main dark-gray">Ecrivez moi !</p>
		<?php if($error != null) { echo '<p>'.$error.'</p>'; } else { echo '<p>'.$success.'</p>'; }?><p></p>
		<!-- Start Main Paragraph -->
		<form name="contactform" method="post" action="index.php">
			<label>Nom</label><br>
			<input type="text" name="name" value="" class="form" <?php if (!empty($name)) { echo 'value="'.htmlspecialchars($name).'"'; } ?>><br>
			
			<label>Email</label><br>
			<input type="text" name="email" value="" class="form" <?php if (!empty($email)) { echo 'value="'.htmlspecialchars($email).'"'; } ?>><br>
			
			<label>Message</label><br>
			<textarea rows="3" name="message" class="form"><?php if (!empty($message)) { echo htmlspecialchars($message); } ?></textarea>

			<input type="submit" value="Envoyer">
		</form>


		<!-- Clear :) -->
		<div class="clear"></div>
	</div>
	<!-- End Content -->
	
	<footer class="footer">
		<a href="http://ninetofive.me"><h6>© Copyright 2014</h6></a>
	</footer>

</body>
<!-- End Body -->
</html>
<?php
	session_start();
    if(isset($_SESSION['prenom'])){
        $user = $_SESSION['prenom'];
    } else {
		header('Location: ../../index.php');
	}
?>
<html>
	<head>
		<title>Mon journal interactif - compte</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="../../assets/css/main.css" />
		<link rel="stylesheet" href="../../assets/css/animate.css" />
		<link rel="shortcut icon" href="../../images/logo/logo.png">
		 <script src="https://rawgit.com/sitepoint-editors/jsqrcode/master/src/qr_packed.js"></script>
		 <script src="../../assets/js/jquery.min.js"></script>
		<noscript><link rel="stylesheet" href="../../assets/css/noscript.css" /></noscript>
	</head>
	<body class="landing">

		<!-- Page Wrapper -->
			<div id="page-wrapper-2">

				<!-- Header 
					<header id="header" class="alt">
						<h1><a href="index.html">Spectral</a></h1>
						<nav id="nav">
							<ul>
								<li class="special">
									<a href="#menu" class="menuToggle"><span>Menu</span></a>
									<div id="menu">
										<ul>
											<li><a href="index.html">Home</a></li>
											<li><a href="generic.html">Generic</a></li>
											<li><a href="elements.html">Elements</a></li>
											<li><a href="#">Sign Up</a></li>
											<li><a href="#">Log In</a></li>
										</ul>
									</div>
								</li>
							</ul>
						</nav>
					</header> -->
					<div class='journal'>
						<div class='page-gauche'>
							<div class='haut'>
								<a target="_blank" id="audio-son" href="sources-sons.tkt"> <img style='cursor:pointer;' class="img-logo-pages" src="../../images/volume.png" /></a>
								<p style='font-size: 25px;
    margin-top: 30px;
    margin-bottom: 20px;'>Maltraitance d'enfants adoptés</p>
							</div>
							<div class='bas'>
							<a class='img-lien'  href='https://www.ladepeche.fr/article/2014/11/28/2000969-lyon-adoptes-depuis-deux-mois-enfants-etaient-maltraites-parents.html' target='_blank'><img class="img-page" src="../../images/carte/4-final.jpg" /></a>
							<p class='article-j' >Un homme de 38 ans a été interpellé par la police ce mercredi dans le VIIe arrondissement de Lyon. Lui et sa femme sont accusés d’avoir maltraité leurs deux enfants adoptés depuis deux mois.
							
							 </p>
	<hr style="margin:10px;">
							 <a href="carte4-final.php"> <u>Accéder aux explications </u></a><br/>
							 <a href="../account-entier.php"> <u>Voir mon journal</u> </a>
							</div>
						</div>
					</div>
			</div>


<audio allow="autoplay" src="../../assets/sons/pages/page4.mp3" id="audio10" style="display: none;"> </audio>
	
		<!-- Scripts -->
			<script>
			$( "#audio-son" ).on( "click", function() {
				$('#audio10')[0].play();
			});

			
			
			</script>	
		
			
			<script src="../../assets/js/qrCodeScanner.js"></script>

	</body>
</html>
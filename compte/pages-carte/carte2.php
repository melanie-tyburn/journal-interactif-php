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
    margin-bottom: 20px;'>Donald Trump à l'hôpital</p>
							</div>
							<div class='bas'>
							<a class='img-lien' href='https://www.estrepublicain.fr/sante/2020/10/02/coronavirus-donald-trump-se-met-en-quarantaine' target='_blank'><img class="img-page" src="../../images/carte/2-final.jpg" /></a>
							<p class='article-j' >Coup de tonnerre aux États-Unis, en octobre 2020 : Donald Trump, testé positif au Covid-19, a été admis à l’hôpital vendredi dans un vent de panique et d'inquiétude générale. 
							Le 45e président des Etats-Unis affirme, par le biais de son médecin Sean Conley, qu'il "continue à souffrir de fatigue mais a le moral". </p>
							<hr style="margin:10px;">
							 <a href="carte2-final.php"> <u>Accéder aux explications </u></a><br/>
							 <a href="../account-entier.php"> <u>Voir mon journal</u> </a>
						
							</div>
						</div>
						
					</div>
			</div>

<audio allow="autoplay" src="../../assets/sons/pages/page2.mp3" id="audio10" style="display: none;"> </audio>
	
		<!-- Scripts -->
			<script>
			
			$( "#audio-son" ).on( "click", function() {
				$('#audio10')[0].play();
			});
			
			
			
			
			</script>
		
			
			<script src="../../assets/js/qrCodeScanner.js"></script>

	</body>
</html>
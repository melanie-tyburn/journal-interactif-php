<?php
include('../../bdd/connexion-bdd.php');
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
								<p class="explications"> 
<u class="titre-ex">Image du journal papier </u><br/>
La <b><i style="color:lightblue;">peur</i></b> peur se manifester suite au message implicite que pourrait renvoyer l'image, à savoir un homme tué dans des conditions tragiques par les forces de l'ordre.<br/>
<u class="titre-ex">Image du journal numérique </u><br/>
Le <b><i style="color:lightgreen;">dégoût</i></b> peut se manifester lorsque l'on apprend que certaines personnes justifient cet acte en évoquant le passé de la victime.<br/>
</p>
						</div>
						
					</div>
			</div>
			<?php
			$idpage = 8;
			$emotion = $_POST["emotion"];
			//inserer emotion bdd
			mysqli_query($db,"UPDATE joueurcarte SET emotion='".$emotion."' WHERE pseudoJoueur='moncompte1' AND idCarte='".$idpage."';");
			//debloquer page
			mysqli_query($db,"UPDATE joueurcarte SET estDebloque='OUI' WHERE pseudoJoueur='moncompte1' AND idCarte='".$idpage."';");
			 ?>

	
		<audio allow="autoplay" src="../../assets/sons/pages/page8.mp3" id="audio10" style="display: none;"> </audio>
	
		<!-- Scripts -->
			<script>
			$( "#audio-son" ).on( "click", function() {
				$('#audio10')[0].play();
			});
			
			setTimeout(function() {
			$('.scan').css('display','block');
			},2000);
			setTimeout(function() {
			$('.scan2').css('display','block');
			},2500);

			
			
			</script>
		
			
			<script src="../../assets/js/qrCodeScanner.js"></script>

	</body>
</html>
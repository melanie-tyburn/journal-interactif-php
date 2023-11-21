<?php
	session_start();
    if(isset($_SESSION['prenom'])){
        $user = $_SESSION['prenom'];
    } else {
		header('Location: ../index.php');
	}
?>
<html>
	<head>
		<title>Mon journal interactif - compte</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="../assets/css/main.css" />
		<link rel="stylesheet" href="../assets/css/animate.css" />
		<link rel="shortcut icon" href="../images/logo/logo.png">
		<script type="text/javascript" src="../turnjs4/extras/jquery.min.1.7.js"></script>
		<script type="text/javascript" src="../turnjs4/extras/modernizr.2.5.3.min.js"></script>
		 <script src="https://rawgit.com/sitepoint-editors/jsqrcode/master/src/qr_packed.js"></script>
		 <script src="../assets/js/jquery.min.js"></script>
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="landing is-preload">
	<div id="page-wrapper-3">
	<div id="banner">
		<div class="flipbook-viewport">
			<div class="container">
				<div class="flipbook">
				<?php include('../bdd/connexion-bdd.php');
									$requete = "SELECT * FROM joueurcarte where 
												  pseudoJoueur = 'moncompte1' and estDebloque = 'OUI'";
											$exec_requete = mysqli_query($db,$requete);
											
											while( $reponse      = mysqli_fetch_array($exec_requete)) {
												echo '
												<div>
												<div class="image-id"> ';
												echo '<a href="pages-carte/carte'.$reponse['idCarte'].'-final.php"><img class="carte" src="../images/debloquees/'.$reponse['idCarte'].'.png" /></a>';
												
												echo '</div></div>';
											}
				?>


				</div>
			</div>
		</div>
	</div>
	</div>


<script type="text/javascript">

function loadApp() {

	// Create the flipbook

	$('.flipbook').turn({
			// Width

			width:360,
			
			// Height

			height:300,
			

			// Elevation

			elevation: 50,
			
			// Enable gradients

			gradients: true,
			
			// Auto center this flipbook

			autoCenter: true

	});
}

// Load the HTML4 version if there's not CSS transform

yepnope({
	test : Modernizr.csstransforms,
	yep: ['../turnjs4/lib/turn.js'],
	nope: ['../turnjs4/lib/turn.html4.min.js'],
	both: ['../turnjs4/css/basic.css'],
	complete: loadApp
});

</script>

			<audio allow="autoplay" src="../assets/sons/keyboard.mp3" id="audio1" style="display: none;"> </audio>
			<audio allow="autoplay" src="../assets/sons/enter.mp3" id="audio2" style="display: none;"> </audio>

		 
					<script>
			//$('#audio1')[0].play();
			setTimeout(function() {
			
			//$('#audio2')[0].play();
			},1000);
			setTimeout(function() {
				//$('#audio2')[0].play();
			},4000);
			
			</script>
		
			
			<script src="../assets/js/qrCodeScanner.js"></script>
			<script src="../assets/js/jquery.scrollex.min.js"></script>
			<script src="../assets/js/jquery.scrolly.min.js"></script>
			<script src="../assets/js/browser.min.js"></script>
			<script src="../assets/js/breakpoints.min.js"></script>
			<script src="../assets/js/util.js"></script>
			<script src="../assets/js/main.js"></script>

	</body>
</html>
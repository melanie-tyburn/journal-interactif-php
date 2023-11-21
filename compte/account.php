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
		 <script src="https://rawgit.com/sitepoint-editors/jsqrcode/master/src/qr_packed.js"></script>
		 	<script src="../assets/js/jquery.min.js"></script>
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
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
								<img class="img-logo-pages" src="../images/logo/logo.png" />
								<p style='font-size: 30px;margin: 30px auto;'>Journal de <?php echo $_SESSION['prenom'] ?></p>
								<p class='date' style='margin-bottom:30px;'> <?php echo date("d.m.y"); ?> </p>
							</div>
							<div class='bas'>
								<p class='text-bas'> Scannez une page pour accéder à son contenu caché : </p>
								
								<!-- Espace scan carte html et JS  -->
								
								<form action="account-np.php" method="POST" id="form-num-carte-qr">
									<a id="btn-scan-qr">
										<img src="../images/qrcode.png">
									<a/>
									<canvas hidden="" id="qr-canvas"></canvas>
									<div id="qr-result" hidden="">
										<input id="num-carte-qr" style="display:none;" name="numcarte" type="text" value=''>
										<p class='resultat'>Page détectée : <span id="outputData"></span></p>										
									</div>
									<br/>
									<input class="" type="submit" id='ok' value='Accéder !' >
								</form>
			
			<?php
				
								
			?>						
								
								
								
							</div>
						</div>
					</div>

			</div>

			

		<!-- Scripts -->
					<script>

			
			</script>
		
		
			<script src="../assets/js/qrCodeScanner.js"></script>

	</body>
</html>
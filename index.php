<html>
	<head>
		<title>Mon journal interactif - accueil</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<link rel="shortcut icon" href="images/logo/logo.png">
		<script src="assets/js/jquery.min.js"></script>
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body style="display:none;"class="landing is-preload">

		<!-- Page Wrapper -->
			<div id="page-wrapper">

				
				<!-- Banner -->
					<section id="banner">
					 <ul class="align">
					  <li>
						<figure class='book'>

						  <!-- Front -->

						  <ul class='hardcover_front'>
							<li>
							  <div class="coverDesign blue">
								<div>
									<img class="img-logo" src="images/logo/logo.png" />
								</div>
								<p class="title">Mon Journal <br/>Interactif</p>
							  </div>
							</li>
							<li></li>
						  </ul>

						  <!-- Pages -->

						  <ul class='page'>
							<li></li>
							<li>
							  							<div id="container-form">
								
								<form action="bdd/verification-login.php" method="POST">			
									<label><b>Prénom</b></label>
									<input type="text" placeholder="Entrer votre prénom" name="prenom" required>
									
									<label><b>Nom d'utilisateur</b></label>
									<input type="text" placeholder="Entrer le nom d'utilisateur" name="username" required>

									<label><b>Mot de passe</b></label>
									<input type="password" placeholder="Entrer le mot de passe" name="password" required>
									<input class="button primary" type="submit" id='submit' value='Se connecter' >
									<?php
									if(isset($_GET['erreur'])){
										$err = $_GET['erreur'];
										if($err==1 || $err==2) {
											echo "<p style='color:orange'>Utilisateur ou mot de passe incorrect</p>";
										} else if ($err==3) {
											echo "<p style='color:orange'>Prénom trop long</p>";
										}
									}
									?>
								</form>
							</div>
							</li>
							<li></li>
							<li></li>
							<li></li>
						  </ul>

						  <!-- Back -->

						  <ul class='hardcover_back'>
							<li></li>
							<li></li>
						  </ul>
						  <ul class='book_spine'>
							<li></li>
							<li></li>
						  </ul>

						</figure>
					  </li>
					</ul>
							
					</section>	

			<audio allow="autoplay" src="assets/sons/turn-pages.wav" id="audio1" style="display: none;"> </audio>
			</div>

		<!-- Scripts -->
		<script>
			$( document ).ready(function() {
				if($(window).width() > 420) {
					alert('Veuillez vous connecter avec un smartphone pour continuer à naviguer.');
				} else {
					$('body').css('display','block');
				}
			});
		
			$( ".book" ).hover(function() {
				$('#audio1')[0].play();
			});
			setTimeout(function() {
			$('body').css('background-color','#7c7c7d');
			},1);
			
		</script>
		
			
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>
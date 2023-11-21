<html>
	<head>
		<title>Devine mon émotion - inscription</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<link rel="shortcut icon" href="images/logo/logo.png">
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="landing">

		<!-- Page Wrapper -->
			<div id="page-wrapper">

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

				<!-- Banner -->
					<section id="banner" class="banner-pages">
					<div>
						<a href="index.php"> <img class="img-logo-pages" src="images/logo/logo.png" /> </a>
					</div>
						<div class="inner centre-page">
							<h2>Inscription</h2>
							<div id="container-form">
								<!-- zone de connexion -->
								<form action="bdd/verification-inscription.php" method="POST">
									
									<label><b>Nom d'utilisateur</b></label>
									<input type="text" placeholder="Entrer le nom d'utilisateur" name="username" required>
									<label><b>Adresse e-mail</b></label>
									<input type="email" placeholder="Entrer l'adresse e-mail" name="mail" required>
									<label><b>Mot de passe</b></label>
									<input type="password" placeholder="Entrer le mot de passe" name="password" required>
									<label><b>Confirmer le mot de passe</b></label>
									<input type="password" placeholder="Confirmer le mot de passe" name="password-c" required>
									<input class="button primary" type="submit" id='submit' value='Créer le compte' >
									<?php
									if(isset($_GET['erreur'])){
										$err = $_GET['erreur'];
										if($err==3) {
											echo "<p style='color:red'>L'un des champs n'est pas défini !</p>";
											$err='';
										}
										if($err==4) {
											echo "<p style='color:red'>Le nom d'utilisateur est supérieur à 15 caractères !</p>";
											$err='';
										}
										if($err==5) {
											echo "<p style='color:red'>La confirmation du mot de passe ne correspond pas !</p>";
											$err='';
										}
										if($err==6) {
											echo "<p style='color:red'>Le pseudo est déjà pris !</p>";
											$err='';
										}
										if($err==7) {
											echo "<p style='color:red'>L'adresse mail est déjà prise !</p>";
											$err='';
										}
										if($err==8) {
											echo "<p style='color:red'>Le mot de passe doit contenir au moins 6 caractères !</p>";
											$err='';
										}
										if($err==9) {
											echo "<p style='color:red'>Une erreur s'est produite, veuillez réessayer. </p>";
											$err='';
										}
									}
									?>
								</form>
							</div>
						</div>
					</section>

				<!-- Footer -->
					<footer id="footer">
						<ul class="liens-utiles">
							<a href="faq.html"> Foire Aux Questions</a>
							<a href="regles.html"> Règles du jeu</a>
							<a href="confidentialite.html"> Politique de confidentialité</a>
							<a href="contact.html"> Contact</a>
						</ul>
						<ul class="copyright">
							<li>Mélanie Tyburn - Devine mon émotion 2020-2021&copy; Tous droits réservés.</li>
						</ul>
					</footer>

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>
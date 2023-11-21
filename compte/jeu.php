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
		<title>Devine mon émotion - scanner la carte</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="../assets/css/main.css" />
		<link rel="shortcut icon" href="../images/logo/logo.png">
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
		<script src="../assets/js/jquery.min.js"></script>
		 <script src="https://rawgit.com/sitepoint-editors/jsqrcode/master/src/qr_packed.js"></script>
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
						<a href="account.php"> <img class="img-logo-pages" src="../images/logo/logo.png" /> </a>
					</div>
						<div class="inner centre-page">
							<h2>Bonjour <?php echo $_SESSION['username'] ?> !</h2>
							
							<div id="container-form">
								<a href="account.php" class="button primary">Mon compte</a>						
							</div>
							<hr class="thin-hr"/>
							<div id="container-form">
							
								<div id="container" style="margin-bottom:20px;">
								<form action="jeu.php" method="POST" id="form-num-carte-qr">
									<label><b>Scannez le QR code de la carte :</b></label>
									<a id="btn-scan-qr">
										<img src="../images/qrcode.png">
									<a/>
									<canvas hidden="" id="qr-canvas"></canvas>
									<div id="qr-result" hidden="">
									
										<span id="outputData"></span>
										
										<input id="num-carte-qr" style="display:none;" name="numcarte" type="text" value=''>
										
									</div>
									<br/>
									<input class="button primary" type="submit" id='ok' value='OK' >
								</form>
								</div>
								
									

								

							<div style="color:#ffa301;margin-top:10px;cursor:pointer;" class="scan-ou-select-id"> Cliquez ici si vous ne pouvez pas scanner </div>

							
								<form action="jeu.php" method="POST" id="form-num-carte" style="display:none;">
									
									<label><b>Choisissez le numéro de la carte :</b></label>
									<select class="numcarteselect" name="numcarte" id="numcarte-select" required>
										<option value="">-- Choisissez une option --</option>
										<?php
											$requ = "SELECT * FROM joueurcarte where 
														  pseudoJoueur = '".$_SESSION['username']."' and estDebloque = 'NON'";
													$exec_requ = mysqli_query($db,$requ);
													
													while( $repons      = mysqli_fetch_array($exec_requ)) {
														echo '<br/><option value="'.$repons['idCarte'].'"> '.$repons['idCarte'].'</option>';
													}
											?>
											<option value="">-- Choisissez une option --</option>
									</select>
									<input class="button primary" type="submit" id='ok' value='OK' >
								</form>
								
								<div style="color:#ffa301;margin-top:10px;cursor:pointer;display:none;" class="go-to-scan"> Cliquez ici pour scanner la carte </div>
								
								
								
							<script>
								$( ".scan-ou-select-id" ).on( "click", function() {
									$( "#container" ).css('display','none');
									$( "#form-num-carte" ).css('display','block');
									$( ".scan-ou-select-id" ).css('display','none');
									$( "#form-num-carte-qr" ).css('display','none');
									$( ".go-to-scan" ).css('display','block');
								});
								
								$( ".go-to-scan" ).on( "click", function() {
									$( "#container" ).css('display','block');
									$( "#form-num-carte" ).css('display','none');
									$( "#form-num-carte-qr" ).css('display','block');
									$( ".scan-ou-select-id" ).css('display','block');
									$( ".go-to-scan" ).css('display','none');
								});
							</script>
								
								
								
								

								<form action="jeu.php" method="POST" id="form-choix-reponse" style="display: none;">
									
									<label><b>Choisissez la bonne émotion de la carte n°<?php echo $_POST['numcarte'];?></b></label>
									<input style="display:none;" name="nc" type="text" value=<?php echo $_POST['numcarte'];?> >
									<input class="button primary" name="rep" id="peur" type="submit" value='peur' >
									<input class="button primary" name="rep" id="colere" type="submit" value='colère' >
									<input class="button primary" name="rep" id="tristesse" type="submit" value='tristesse' >
									<input class="button primary" name="rep" id="degout" type="submit" value='dégoût' >
									<input class="button primary" name="rep" id="joie" type="submit" value='joie' >
									<input class="button primary" name="rep" id="surprise" type="submit" value='surprise' >
									
								</form>
								
								<?php
									if(isset($_POST['numcarte']) && $_POST['numcarte'] != ''){
										$carte = $_POST['numcarte'];
										$requete2 = "SELECT count(*) FROM joueurcarte where idCarte = '".$carte."'AND pseudoJoueur = '".$_SESSION['username']."' AND estDebloque = 'OUI'";
										$exec_requete2 = mysqli_query($db,$requete2);
										$reponse2      = mysqli_fetch_array($exec_requete2);
										$count2 = $reponse2['count(*)'];
										if($count2!=0) {
										    echo "<hr class='thin-hr'/><p style='color:red'>Cette carte a déjà été scannée, il faut recommencer.</p>"; 
										} else {
										
											echo'<script> $("#form-num-carte").hide(); $( "#form-num-carte-qr" ).hide(); $( ".scan-ou-select-id" ).hide();$( ".go-to-scan" ).hide();$("#container").hide(); $("#form-choix-reponse").show();</script>';
										}
									}	
									if(isset($_POST['rep'])){
										 $requete = "SELECT * FROM carte where id = '".$_POST['nc']."'";
										 $exec_requete = mysqli_query($db,$requete);
										 $reponse      = mysqli_fetch_array($exec_requete);
										 if($_POST['rep'] != $reponse['emotion']) {
											echo "<hr class='thin-hr'/><p style='color:red'>Vous n'avez pas choisi la bonne réponse, il faut recommencer.</p>"; 
										 } else {
											 unset($_POST['rep']);
											 echo('<script> $("select").load(" select > *"); </script>');
											  echo('<script> $("#container").css("display","none"); </script>');
											   echo('<script> $(".scan-ou-select-id").css("display","none"); $( "#form-num-carte-qr" ).hide();</script>');
											 echo "<p class='bonne-reponse'style='color:green;margin-bottom:10px;'>Bonne réponse ! Vous pouvez :</p>
											 <div id='continuer-jeu' class='button primary'style='background-color:#ff8800;'> Continuer le jeu </div>
											 <a id='voir-realite' style='background-color:green;'href='pages-carte/carte".$_POST['nc'].".php ' target='_blank;' class='button primary'>Voir la réalité</a>	"; 
											 mysqli_query($db,"UPDATE joueurcarte SET estDebloque='OUI' WHERE pseudoJoueur='".$_SESSION['username']."' AND idCarte='".$_POST['nc']."';");
									}	}
								?>
								
								<script>
								$( "#continuer-jeu" ).on( "click", function() {
									$( "#container" ).css('display','block');
									$( ".scan-ou-select-id" ).css('display','block');
									$( ".bonne-reponse" ).css('display','none');
									$( "#continuer-jeu" ).css('display','none');
									$( "#voir-realite" ).css('display','none');
									$( "#form-num-carte-qr" ).css('display','block');
								});
							</script>

							</div>
							<hr class="thin-hr"/>
							<a href="../bdd/deconnexion.php" class="button primary">Déconnexion</a>
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
			<script src="../assets/js/qrCodeScanner.js"></script>
			<script src="../assets/js/jquery.scrollex.min.js"></script>
			<script src="../assets/js/jquery.scrolly.min.js"></script>
			<script src="../assets/js/browser.min.js"></script>
			<script src="../assets/js/breakpoints.min.js"></script>
			<script src="../assets/js/util.js"></script>
			<script src="../assets/js/main.js"></script>
			

	</body>
</html>
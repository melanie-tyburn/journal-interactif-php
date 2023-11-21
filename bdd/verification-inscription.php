<?php include('connexion-bdd.php');

if(isset($_POST['username'], $_POST['mail'], $_POST['password'], $_POST['password-c'])){
    if(empty($_POST['username']) || empty($_POST['mail']) || empty($_POST['password']) || empty($_POST['password-c'])){ //l'un des champs est vide, on arrête l'exécution du script et on affiche un message d'erreur
        header('Location: ../create-acc.php?erreur=3');
    } elseif(strlen($_POST['username'])>15){ //le pseudo est trop long, il dépasse 15 caractères
        header('Location: ../create-acc.php?erreur=4');
	} elseif($_POST['password'] != $_POST['password-c']){ //les champs password et password-c ne correspondent pas
        header('Location: ../create-acc.php?erreur=5');
	} elseif(mysqli_num_rows(mysqli_query($db,"SELECT * FROM joueur WHERE pseudo='".$_POST['username']."'"))==1){//on vérifie que ce pseudo n'est pas déjà utilisé
        header('Location: ../create-acc.php?erreur=6');
	} elseif(mysqli_num_rows(mysqli_query($db,"SELECT * FROM joueur WHERE mail='".$_POST['mail']."'"))==1){//pareil pour le mail
        header('Location: ../create-acc.php?erreur=7');
	} elseif(strlen($_POST['password'])<6){ //le champ password est trop court
        header('Location: ../create-acc.php?erreur=8');
	} else {
    //toutes les vérifications sont faites, on passe à l'enregistrement dans la base de données:
		if(!mysqli_query($db,"INSERT INTO joueur SET pseudo='".$_POST['username']."', mail='".$_POST['mail']."', mdp='".$_POST['password']."';") || 
		!mysqli_query($db,"INSERT INTO joueurcarte SET pseudoJoueur='".$_POST['username']."', idCarte=0, estDebloque='NON';") ||
		!mysqli_query($db,"INSERT INTO joueurcarte SET pseudoJoueur='".$_POST['username']."', idCarte=1, estDebloque='NON';") ||
		!mysqli_query($db,"INSERT INTO joueurcarte SET pseudoJoueur='".$_POST['username']."', idCarte=2, estDebloque='NON';") ||
		!mysqli_query($db,"INSERT INTO joueurcarte SET pseudoJoueur='".$_POST['username']."', idCarte=3, estDebloque='NON';") ||
		!mysqli_query($db,"INSERT INTO joueurcarte SET pseudoJoueur='".$_POST['username']."', idCarte=4, estDebloque='NON';") ||
		!mysqli_query($db,"INSERT INTO joueurcarte SET pseudoJoueur='".$_POST['username']."', idCarte=5, estDebloque='NON';") ||
		!mysqli_query($db,"INSERT INTO joueurcarte SET pseudoJoueur='".$_POST['username']."', idCarte=6, estDebloque='NON';") ||
		!mysqli_query($db,"INSERT INTO joueurcarte SET pseudoJoueur='".$_POST['username']."', idCarte=7, estDebloque='NON';") ||
		!mysqli_query($db,"INSERT INTO joueurcarte SET pseudoJoueur='".$_POST['username']."', idCarte=8, estDebloque='NON';") ||
		!mysqli_query($db,"INSERT INTO joueurcarte SET pseudoJoueur='".$_POST['username']."', idCarte=9, estDebloque='NON';") ||
		!mysqli_query($db,"INSERT INTO joueurcarte SET pseudoJoueur='".$_POST['username']."', idCarte=10, estDebloque='NON';")){
			header('Location: ../create-acc.php?erreur=9');
		} else {
			session_start();
			$_SESSION['username'] = $username;
			header('Location: ../compte/account.php');
		}
	}
}
mysqli_close($db); // fermer la connexion
?>
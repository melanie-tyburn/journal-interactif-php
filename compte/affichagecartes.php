<?php include('../bdd/connexion-bdd.php');
$requete = "SELECT * FROM joueurcarte where 
              pseudoJoueur = 'moncompte1' and estDebloque = 'OUI'";
        $exec_requete = mysqli_query($db,$requete);
		
		while( $reponse      = mysqli_fetch_array($exec_requete)) {
			echo '<div class="image-id"> ';
			echo '<a target="_blank" href="pages-carte/carte'.$reponse['idCarte'].'.php"><img class="carte" src="../images/cartes/'.$reponse['idCarte'].'.png" /></a>';
			echo('<div class="numcarte"> #'.$reponse['idCarte'].'</div>');
			echo '</div>';
		}
?>
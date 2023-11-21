<?php include('../bdd/connexion-bdd.php');
$requete = "SELECT count(*) FROM joueurcarte where 
              pseudoJoueur = 'moncompte1' and estDebloque = 'OUI'";
        $exec_requete = mysqli_query($db,$requete);
        $reponse      = mysqli_fetch_array($exec_requete);
        echo($reponse['count(*)']);
?>
<?php include('connexion-bdd.php');

if(isset($_POST['username']) && isset($_POST['password']) && isset($_POST['prenom']))
{
	
// on applique les deux fonctions mysqli_real_escape_string et htmlspecialchars
    // pour éliminer toute attaque de type injection SQL et XSS
    $username = mysqli_real_escape_string($db,htmlspecialchars($_POST['username'])); 
    $password = mysqli_real_escape_string($db,htmlspecialchars($_POST['password']));
	$prenom = mysqli_real_escape_string($db,htmlspecialchars($_POST['prenom']));
    
    if($username !== "" && $password !== "" && $prenom !== "")
    {
        $requete = "SELECT count(*) FROM joueur where 
              pseudo = '".$username."' and mdp = '".$password."' ";
        $exec_requete = mysqli_query($db,$requete);
        $reponse      = mysqli_fetch_array($exec_requete);
        $count = $reponse['count(*)'];
        if(strlen($prenom) > 8) // nom d'utilisateur et mot de passe corrects
        {
			header('Location: ../index.php?erreur=3'); // prenom trop long
			
        }
        else if (strlen($prenom) <= 8 && $count!=0)
        {
           session_start();
           $_SESSION['prenom'] = $prenom;
           header('Location: ../compte/account.php');
        }
		else 
		{
			header('Location: ../index.php?erreur=1'); // utilisateur ou mot de passe incorrect
		}
    }
    else
    {
       header('Location: ../index.php?erreur=2'); // utilisateur ou mot de passe vide
    }
}
else
{
   header('Location: ../index.php');
}
mysqli_close($db); // fermer la connexion
?>
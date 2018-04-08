<?php 
/** si l'utilisateur à cliquer sur le bouton inscription*/

include '../post/connectdatabase.php';
/*vérification champs vides*/
/*si le champ email ou le champ mot de passe est vide:*/
	if (empty($_POST['useremail']) || empty($_POST['usermotdepasse'])) {
		/*renvoyé vers la page inscription pour recommencer l'inscription*/
		header("Location:../inscription/inscription.php?champs=vides");
		exit();
	}
	elseif 
	(isset($_POST['EnvoyerInscription'])&& isset($_POST['useremail']) && isset($_POST['usermotdepasse'])) {
		/*sécurité mot de passe*/
		$hashmotdepasse = password_hash($_POST['usermotdepasse'], PASSWORD_DEFAULT);
		$recup = "INSERT INTO utilisateurs (user_email, user_motdepasse) VALUES (?,?)";
		$resultats = $conn->prepare($recup);
		$resultats->bind_param("ss", $_POST['useremail'], $hashmotdepasse);
		$resultats->execute();

		header("Location:../index.php");
		exit();

}

<?php
session_start();

if (isset($_POST['connexion'])) {
	include '../post/connectdatabase.php';

	/*mise en place des inputs dans des variables*/

	$email = mysqli_real_escape_string($conn,$_POST['email'] );
	$motdepasse = mysqli_real_escape_string($conn,$_POST['motdepasse'] );

	/*vérification champs vides*/

	if (empty($_POST['email']) || empty($_POST['motdepasse'])) {
		/*renvoyé vers la page inscription pour recommencer la connexion*/
		header("Location: ../index.php?champs=vides");
		exit();
} else{
	/*recuperation des inputs*/
	$recup = "SELECT * FROM utilisateurs WHERE user_email = '$email'";
	$resultat = mysqli_query($conn,$recup);
	/*si aucune donnée trouvées*/
	$resultatverification = mysqli_num_rows($resultat);
	if ($resultatverification < 1) {
		header("Location: ../inscription/inscription.php?données=introuvables");
		exit();
	}else{
		/*si données détectés*/
		if ($row = mysqli_fetch_assoc($resultat)) {
			/*dehashage du mot de passe pour le comparer avec le mot de passe saisie par l'utilisateur*/
			$hashmotdepassevérification = password_verify($motdepasse, $row['user_motdepasse']);
			if ($hashmotdepassevérification == false) {
				header("Location: ../index.php?motdepasse=incorrect");
				exit();
			} elseif ($hashmotdepassevérification == true) {
				/* connexion de l'utilisateur*/
				$_SESSION['id_user'] =$row['user_id'];
				$_SESSION['email_user'] =$row['user_email'];
				header("Location:../index.php?connexion=reussie");
				exit();
			}
		}
	}
}
}
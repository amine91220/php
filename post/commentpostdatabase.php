<?php
/*envoyer le message vers la base de donnée*/
function ecrirecommentaire($conn) {
	if (isset($_POST['PosterCommentaire'])) {
		$uid = $_POST['uid'];
		$commentaire = $_POST['commentaire'];
		$basededonnée = "INSERT INTO commentaire (uid, commentaire) VALUES ('$uid', '$commentaire')";
		$resultat = mysqli_query($conn, $basededonnée);
	}
}
/*récupérer le commentaire depuis la base de donnée*/
function recuperercommentaire($conn) {
	$basededonnée = "SELECT * FROM commentaire";
	$resultat = $conn->query($basededonnée);
	/*permettre l'affichage de chaque commentaires*/
	while ($row = $resultat->fetch_assoc()) {
	echo "<div class='zone-commentaire'><p>";
		echo $row['uid']." &nbsp";
		echo $row['heure']."<br>";
		echo nl2br($row['commentaire']);
	if (isset($_SESSION['id_user'])) {
		echo "</p>
		<form class='supprimer' method='POST' action='".supprimercommentaire($conn)."'>
			<input type='hidden' name='id_utilisateur' value= '".$row['id_utilisateur']."'>
			<button name='supprimercommentaire' type='submit'>Supprimer</button>
		</form>
	</div>";
	}else{
		echo "</p>
		<form class='supprimer' method='POST' action='".supprimercommentaire($conn)."'>
			<input type='hidden' name='id_utilisateur' value= '".$row['id_utilisateur']."'>
			<button name='supprimercommentaire' type='submit' disabled>Supprimer</button>
		</form>
	</div>";
	}
	}

}
/*suppression commentaire*/
function supprimercommentaire($conn){
	if (isset($_POST['supprimercommentaire'])) {
		$id_utilisateur = $_POST['id_utilisateur'];

		$basededonnée = "DELETE FROM commentaire WHERE id_utilisateur= '$id_utilisateur'";
		$result = $conn->query($basededonnée);
	}
}

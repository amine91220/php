<?php 
	date_default_timezone_set('Europe/Paris');
	include 'post/connectdatabase.php';
	include 'post/commentpostdatabase.php';
	include_once 'main/header.php';
	
	
 ?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="Styles/Commentaire.css">
<meta charset="utf-8">
	<title>PAGE COMMENTAIRES</title>
</head>
<body>
	<br>
<?php
/*zone post commentaire*/
	if (isset($_SESSION['id_user'])) {
		echo "<form class='commentaire' method='POST' action='".ecrirecommentaire($conn)."'>
		<input type='hidden' name='uid'>
		<input type='hidden' name='heure' value='".date("d/m/y H:i:s")."'>
		<textarea name='commentaire'></textarea><br>
		<button name='PosterCommentaire' type='submit'> Poster</button>
		<br>
		<br>
		<p>Fil d'actualité:<p>
	</form>";
	}
/*zone affichage commentaire*/
recuperercommentaire($conn);
?>
</body>
</html>
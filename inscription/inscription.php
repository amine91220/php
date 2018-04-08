<?php
	include '../post/connectdatabase.php';
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="../Styles/inscription.css">
<meta charset="utf-8">
	<title>Page Inscription</title>
</head>
<body>
<form class="signup-form" action="inscription.inc.php" method="POST">
				<input type="email" name="useremail" placeholder="Email">
				<input type="password" name="usermotdepasse" placeholder="Password">
				<button type="submit" name="EnvoyerInscription">s'inscrire</button>
			</form>
</body>
</html>
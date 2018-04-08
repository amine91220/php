<?php
	session_start();
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="Styles/header.css"></head>
	<title></title>

<body>

	<header>
		<nav>
			<div class="main-wrapper">
				<div class="nav-login">
					<?php
						if (isset($_SESSION['id_user'])) {
							echo '<form action="connexion/deconnexion.php" method="POST">
						<button type="submit" name="deconnexion">deconnexion</button>
					</form>';
						} else{
							echo '
					<form action=connexion/connexion.php method="POST">
						<input type="email" name="email" placeholder="email">
						<input type="password" name="motdepasse" placeholder="mot de passe">
						<button type="submit" name="connexion">connexion</button>
						</form>
						<form action=inscription/inscription.php method="POST">
						<button type="submit" name="inscription">inscription</button>
						</form>';
					}	
					?>
				</div>
			</div>
		</nav>
	</header>
</body>
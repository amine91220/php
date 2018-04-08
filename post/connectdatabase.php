<?php

$conn = mysqli_connect(/*serveur*/'localhost',/*utilisateur*/ 'root', '',/*nom de la base de donnée*/ 'post' );

if (/*si il n'y a pas de connexion avec la base de donnée :*/!$conn) {
	die("connexion impossible:".msqli_connect_error());
}
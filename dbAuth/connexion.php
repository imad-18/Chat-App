<?php
$host = 'localhost';
$db_user = 'root'; // Remplacer avec votre nom d'utilisateur de la base de données
$db_pass = ''; // Remplacer avec votre mot de passe de la base de données
$db_name = 'messagerie';
// Connexion à la base de données
$link = mysqli_connect($host, $db_user, $db_pass, $db_name);
// Vérification de la connexion
if (!$link) {
    die("Échec de la connexion: " . mysqli_connect_error());
}

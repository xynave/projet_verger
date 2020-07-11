<?php
session_start(); // On démarre la session AVANT toute chose
$bdd = new PDO('mysql:host=localhost;dbname=leveraged;charset=utf8', 'root', '',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
// Quelques variables de session dans $_SESSION
$_SESSION['type'] = 'Invité';
$_SESSION['nom'] = 'l\'invité';
$annonces = $bdd->query('SELECT * FROM annonces');
?>
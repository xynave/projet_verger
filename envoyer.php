<?php
if (isset($_POST) && isset($_POST['nom'])  && isset($_POST['firstname'])  && isset($_POST['email'])  && isset($_POST['message'])  && isset($_POST['objet'])) {
    extract($_POST);
    if (!empty($nom) && !empty($firstname) && !empty($email) && !empty($message) && !empty($objet)) {
        $destinataire = "loic.chaligne@gmail.com";
        $msg = "Nom: $nom \n
        Prénom: $firstname \n
        Message: $message ";
        $entete = "From: $nom \n Reply-To: $email ";
        mail($destinataire, $objet, $msg, $entete);
        header("Location: contact.php");
        exit();
    } else {

        header("Location: contact.php");

        exit();
    }
}

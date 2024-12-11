<?php
if(session_status() == PHP_SESSION_NONE) {
    session_start();
}

// Vérification de la connexion de l'utilisateur
if(!isset($_SESSION['username']) === true) {
    echo "Bienvenue, " .$_SESSION['username']. "dans votre session!.";
}
Else {
    echo "Veuillez vous connecter pour pouvoir acceder à votre espace.";
}

?>
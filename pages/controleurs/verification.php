<?php
session_start();

if(isset($_POST['username']) && isset($_POST['password'])) {

    //connexion a la base de données
    $servername = 'mysql-zoo-arcadia-2025.alwaysdata.net';
    $username = '383336';
    $password =  '@Admin2025';
    $dbname = 'zoo-arcadia-2025_zoo';
    $db = mysqli_connect($servername, $username, $password, $dbname)
    or die('Pas de connexion a la database');

    // on applique les 2 fonctions mysqli-real-escape-string & htmlspecialchars
    // pour éliminer toute attaque de type injection sql & xxs
    $username = mysqli_real_escape_string($db, htmlspecialchars($_POST['username']));
    $password = mysqli_real_escape_string($db, htmlspecialchars($_POST['password']));

    if($username !== "" && $password !== "") {
        //$requete = "SELECT id FROM users WHERE username = '$username' and password = '$password'";
        $requete = "SELECT count(*) FROM users WHERE username = ".$username." and password = ".$password."";
        $exec_requete = mysqli_query($db, $requete);
        $reponse = mysqli_fetch_array($exec_requete);
        $count = $reponse['count(*)'];
        if($count != 0) { // nom d'utilisateur et mot de passe correctes
            $_SESSION['username'] = $username;
            header('location : "/"');
    }
        else {
            header('location : /connexion?erreur=1'); // utilisateur ou mot de passe incorrect
        }
}
    else {
    header('location : /connexion?erreur=2'); // utilisateur ou mot de passe vide
    }
}
else {
    header('location : /connexion');
}

mysqli_close($db); // ferme la connexion

?>
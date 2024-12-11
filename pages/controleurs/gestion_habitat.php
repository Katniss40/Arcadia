<?php
//include 'session_check.php';
//session_start();

// Connexion a la base de données
$servername = 'mysql-zoo-arcadia-2025.alwaysdata.net';
$username = '383336';
$password =  '@Admin2025';
$dbname = 'zoo-arcadia-2025_zoo';

// créer la connexion
$conn = new mysqli($servername, $username, $password, $dbname);

// Vérifier la connexion
if($conn->connect_error) {
    die("erreur de connexion: " .$conn->connect_error);
} 
//echo "Connexion réussi!";
header('Location: /pages/gestion_habitat.php');
    exit();

// Récuperer les données du formulaire
                       
$nom = $_POST['nom'];
$name_old = $_POST['name_old'];
$name_new = $_POST['name_new'];
$action = $_POST['action'];


// insere les données dans la base de données
$sql = " INSERT INTO habitats(nom, name_old, name_new, action) VALUES ('$nom', '$action', '$name_old', '$name_new')";


if($conn->query($sql) === TRUE) {
    echo "Entrée enregistrée avec succés";
} else {
     echo "Erreur : " .$sql."<br>" .$conn->error;
}

// fermer la connexion
$conn->close();
?>




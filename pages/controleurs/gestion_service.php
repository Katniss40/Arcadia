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
header('Location: /pages/gestion_service.php');
    exit();
//echo "Connexion réussi!";

// Récuperer les données du formulaire

$service = $_POST['service'];                        
$habitat = $_POST['habitat'];
$action = $_POST['action'];


// insere les données dans la base de données
$sql = " INSERT INTO services(service, habitat, action) VALUES ('$service', '$habitat', '$action')";


if($conn->query($sql) === TRUE) {
    echo "Entrée enregistrée avec succés";
} else {
     echo "Erreur : " .$sql."<br>" .$conn->error;
}

// fermer la connexion
$conn->close();
?>

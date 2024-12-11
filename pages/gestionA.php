<?php
include 'session_check.php';
session_start();

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
echo "Connexion réussi!";

// Récuperer les données du formulaire

$id = $_POST['id'];
$nom = $_POST['nom'];                        
$espece = $_POST['espece'];
$age = $_POST['age'];
$habitat = $_POST['habitat'];
$poids = $_POST['poids'];
$typeN = $_POST['typeN'];                       
$repas = $_POST['repas'];
$quantite = $_POST['quantite'];
$unite = $_POST['unite'];
$commentaires = $_POST['commentaires'];
$remarques = $_POST['remarques'];

// insere les données dans la base de données
$sql = " INSERT INTO animal(id, nom, espece, age, habitat, poids, typeN, repas, quantite, unite, commentaires) VALUES ('$id', '$nom', '$espece', '$age', '$habitat', '$poids', '$typeN', '$repas', '$quantite', '$unite', '$commentaires', '$remarques')";


if($conn->query($sql) === TRUE) {
    echo "Entrée enrigistrée avec succés";
} else {
     echo "Erreur : " .$sql."<br>" .$conn->error;
}

// fermer la connexion
$conn->close();
?>
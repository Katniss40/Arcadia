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
echo "Connexion réussi!";

// Récuperer les données du formulaire


$role = $_POST['role'];                        
$name = $_POST['name'];
$username = $_POST['username'];
$mdp = $_POST['mdp'];
$poste = $_POST['poste'];
$email = $_POST['email'];                       
$statut = $_POST['statut'];
$habitat = $_POST['habitat'];


// insere les données dans la base de données
$sql = "INSERT INTO users(role, name, username, mdp, poste, email, statut, habitat) VALUES ('$role', '$name', '$username', '$mdp', '$poste', '$email', '$statut', '$habitat')";


if($conn->query($sql) === TRUE) {
    //echo "Entrée enregistrée avec succés";
    header('Location: /pages/gestion_employe.php');
    exit();
} else {
     echo "Erreur : " .$sql."<br>" .$conn->error;
}

// fermer la connexion
$conn->close();
?>




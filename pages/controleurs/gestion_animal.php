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

$nom = $_POST['nom'];
$habitat = $_POST['habitat'];                        
$espece = $_POST['espece'];
$age = $_POST['age'];
$poids = $_POST['poids'];
$typeN = $_POST['typeN'];                       
$repas = $_POST['repas'];
$quantite = $_POST['quantite'];
$commentaires = $_POST['commentaires'];
$remarques = $_POST['remarques'];

// insere les données dans la base de données
$sql = " INSERT INTO animaux(nom, habitat, espece, age, poids, typeN, repas, quantite, commentaires, remarques) VALUES ('$nom', '$habitat', '$espece', '$age', '$poids', '$typeN', '$repas', '$quantite', '$commentaires', '$remarques')";


if($conn->query($sql) === TRUE) {
    //echo "Entrée enregistrée avec succés"
    header('Location: /pages/gestion_animal.php');
    exit();
    ;
} else {
     echo "Erreur : " .$sql."<br>" .$conn->error;
}

// fermer la connexion
$conn->close();
?>




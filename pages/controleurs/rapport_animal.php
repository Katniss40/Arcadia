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
$id = $_GET["id"];
$nom = $_POST['nom'];                       
$espece = $_POST['visite'];
$typeN = $_POST['typeN'];                      
$repas = $_POST['remarques'];
$commentaires = $_POST['commentaires'];


// insere les données dans la base de données
$sql = " UPDATE animaux(id, nom, visite, typeN,commentaires, remarques) VALUES ('$id', '$nom', '$visite', '$typeN', '$commentaires', '$remarques')";


if($conn->query($sql) === TRUE) {
    echo "Entrée enregistrée avec succés";
} else {
     echo "Erreur : " .$sql."<br>" .$conn->error;
}

// fermer la connexion
$conn->close();
?>




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

$id = $_POST['id'];
$role = $_POST['role'];                        
$name = $_POST['name'];
$username = $_POST['username'];
$password = $_POST['password'];
$poste = $_POST['poste'];
$email = $_POST['email'];                       
$satut = $_POST['satut'];
$habitat = $_POST['habitat'];


// insere les données dans la base de données
$sql = " INSERT INTO _users(id, role, name, username, password, poste, email, satut, habitat) VALUES ('$id', '$role', '$name', '$username', '$password', '$poste', '$email', '$satut', '$habitat')";


if($conn->query($sql) === TRUE) {
    echo "Entrée enrigistrée avec succés";
} else {
     echo "Erreur : " .$sql."<br>" .$conn->error;
}

// fermer la connexion
$conn->close();
?>




<?php

// Connexion version 2
//session_start();
//include("db_connexion.php");


    
// Connexion a la base de données
$servername = 'mysql-zoo-arcadia-2025.alwaysdata.net';
$username = '383336';
$password =  '@Admin2025';
$dbname = 'zoo-arcadia-2025_zoo';

$conn = new mysqli($servername, $username, $password, $dbname);

// Vérifier la connexion
if($conn->connect_error) {
    die("erreur de connexion: " .$conn->connect_error);
} 
echo "Connexion réussi! Bienvenue dans votre espace.";

// On applique 2 fonctions mysqli_real_escape_string et htmlspecialchars
// pour eliminer toute attaque de type injection sql et xss
$username = mysqli_real_escape_string($conn, htmlspecialchars($_POST['username']));
$password = mysqli_real_escape_string($conn, htmlspecialchars($_POST['password']));

if($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = filter_input(INPUT_POST,"username", FILTER_SANITIZE_SPECIAL_CHARS);
    $password = filter_input(INPUT_POST,"password", FILTER_SANITIZE_SPECIAL_CHARS);


    if($username && $password ) {
        $stmt = $conn->prepare("SELECT * FROM users WHERE username = ? AND password = ?");
        if ($stmt === false) {
            die("Erreur de préparation de la requete : " .$conn->error);
        }

        $stmt->bind_param("ss", $username, $password);
        $stmt->execute();
        $result = $stmt->get_result();
        $user = $result->fetch_assoc();
        $stmt->close();

        if($user) {
            $_SESSION['username'] = $user['username'];
            $_SESSION['role'] = $user['role'];
            $_SESSION['habitat'] = $user['habitat'];

            if ($user['role'] === 'admin') {
                header('Location: /pages/admin.php');
                exit();
            } elseif  ($user['role'] === 'veterinaire') {
                header('Location:/pages/sante.php');
                exit();
            } elseif ( $user['role'] === 'employe') {
                header('Location:/pages/employe.php'); 
                exit();
            } else {
                echo'Rôle inconnu.';
                $conn->close(); // fermer la connexion
            } 
        } else {
            
            echo "Login et/ou mot de passe inconnu";
            header('Location:/');
        }
    } else {
        echo "Veuillez remplir tous les champs";
    }
}


?>
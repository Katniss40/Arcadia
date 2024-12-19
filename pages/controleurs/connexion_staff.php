<?php

include("db_connexion.php");

$conn = new mysqli("mysql-zoo-arcadia-2025.alwaysdata.net", "383336", "@Admin2025", "zoo-arcadia-2025_zoo");
    if ($conn->connect_error) {
    die("Échec de la connexion : " . $conn->connect_error);
    }

if(isset($_POST["email"]) && isset($_POST["password"])) {
    //if($email && $password ) {
        $stmt = $conn->prepare("SELECT * FROM users WHERE email = ? AND password = ?");
        if ($stmt === false) {
            die("Erreur de connexion : " .$conn->error);
        }
            $stmt->bind_param("ss", $email, $password);
            $stmt->execute();
            $result = $stmt->get_result();
            $users = $result->fetch_assoc();
            $stmt->close();
        if ($email === false) {
        // si aucun utilisateur ne correspond au login entré, on affiche une erreur 
            echo'Identifications invalides, veuillez vous rapprocher de la direction pour récuperer vos identifiants';
        } else {
        // On verifie le password
        if ($password === false) {
            echo 'Mot de passe invalide, veuillez vous rapprocher de la direction pour récuperer vos identifiants';
        }
        }
       
        class user 
        {
            private string $id;
            private string $email;
            private string $password;
            // Tableau de rôles
            private array $roles = [];

            public function getId(): string
            {
                return $this->id;
            }
            public function addRole(string $role): void
            {
                $this->roles[] = $role;
            }
            public function getRoles(): array
            {
                return $this->roles;
            }
        }

            header('Location: /pages/admin.php');
            exit();
        } 

?>

<!--<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
</head>
<body>
    <form action="connexion_staff.php" method="POST">
        <label for="username">Nom d'utilisateur :</label>
        <input type="text" id="username" name="username" required>
        <label for="password">Mot de passe :</label>
        <input type="password" id="password" name="password" required>
        <button type="submit">Se connecter</button>
    </form>
    
</body>
</html>-->
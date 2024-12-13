<?php
session_start();

include 'db_connexion.php';


if($conn->connect_error) {
    die("erreur de connexion: " .$conn->connect_error);
}
echo "Connexion réussi!";

if(isset($_get['id'])) {
    //$id = filter_input(INPUT_GET, 'id', FILTER-SANITIZE-INT);
    $id = $_get['id'];
    
    $stmt = $conn->prepare("DELETE FROM animaux WHERE id=?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $stmt->close();
}

header("location: /gestionA");
exit();

//$conn->close();
?>
<?php
//session_start();
//include 'db_connexion.php';

if($conn->connect_error) {
    die("erreur de connexion: " .$conn->connect_error);
}
echo "Connexion réussi!";

if (isset($_get['id'])) {
    $id = filter_input(INPUT_GET,'id', FILTER_SANITIZE_NUMBER_INT);

    $stmt = $conn->prepare("DELETE * FROM animaux WHERE id = ?");
    $stmt->bind_param("i", $id);

    if ($stmt->execute()) {
        header('Location: /pages/gestion_animal.php? message = success');
    }else {
        header('Location: /? message = error');
    }

    $stmt->close();
}else {
    header('Location: /pages/gestion_animal.php');
}

$db->close();

?>
$_get['id'];
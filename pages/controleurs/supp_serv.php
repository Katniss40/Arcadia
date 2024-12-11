<?php
//session_start();
//include 'db_connexion.php';

if($conn->connect_error) {
    die("erreur de connexion: " .$conn->connect_error);
}
echo "Connexion réussi!";

if (isset($_get['id'])) {
    $id = $_get['id'];

    $stmt = $conn->prepare("DELETE * FROM service WHERE id = ?");
    $stmt->bind_param("i", $id);

    if ($stmt->execute()) {
        header('Location: gestion_service.php? message = success');
    }else {
        header('Location: gestion_service.php? message = error');
    }

    $stmt->close();
}else {
    header('Location: gestion_service.php');
}

$db->close();

?>

<?php
//session_start();
//include 'db_connexion.php';

if($conn->connect_error) {
    die("erreur de connexion: " .$conn->connect_error);
}
echo "Connexion réussi!";

if (isset($_get['id'])) {
    $id = filter_input(INPUT_GET,'id', FILTER_SANITIZE_NUMBER_INT);

    $stmt = $conn->prepare("DELETE * FROM employe WHERE id = ?");
    $stmt->bind_param("i", $id);

    if ($stmt->execute()) {
        header('Location: /pages/gestion_employe.php? message = success');
    }else {
        header('Location: index.php? message = error');
    }

    $stmt->close();
}else {
    header('Location: /pages/gestion_employe.php');
}

$db->close();

?>

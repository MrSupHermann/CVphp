<?php

include 'connect_db.php';

try {
$request = $pdo->query("SELECT keypass_user, mail_user FROM users WHERE id_users = $_SESSION[id]");
$data = $request->fetch();
}
catch(PDOException $e)  {
    echo 'Base de données non disponible';
}
?>
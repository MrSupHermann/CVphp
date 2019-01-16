<?php
try {
$request = $pdo->query("SELECT * FROM users WHERE id_users = $_SESSION[id]");
$data = $request->fetch();
$request2 = $pdo->query("SELECT * FROM trainings WHERE users_id_users = $_SESSION[id]");
$request3 = $pdo->query("SELECT * FROM exp_pro WHERE users_id_users = $_SESSION[id]");
$request4 = $pdo->query("SELECT * FROM skills WHERE users_id_users = $_SESSION[id]");
$request5 = $pdo->query("SELECT * FROM realisations WHERE users_id_users = $_SESSION[id]");
$request6 = $pdo->query("SELECT * FROM activities WHERE users_id_users = $_SESSION[id]");
}
catch(PDOException $e)  {
    echo 'Base de données non disponible';
}
?>
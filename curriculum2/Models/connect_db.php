<?php
try {
    $pdo = new PDO('mysql:host=localhost;dbname=curriculum','root','');
    $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
}

catch(PDOException $e)  {
    echo 'Base de données non disponible';
}
?>
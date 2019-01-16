<?php
session_start();

include '../../Models/connect_db.php';
include '../../Models/session_mdl.php';

$delete = $pdo->exec("DELETE FROM skills WHERE users_id_users = $id ORDER BY id_skill DESC LIMIT 1");

header('Location:../../Views/creationcv.php');
?>
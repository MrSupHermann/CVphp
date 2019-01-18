<?php
session_start();
include '../../Models/session_mdl.php';
include '../../Models/connect_db.php';
include '../../Models/logs_mdl.php';

$update_info = "UPDATE users SET keypass_user = '".$pass_user."', mail_user = '".$mail_user."' WHERE id_users = $_SESSION[id]";
$bdd = $pdo->exec($update_info);

header('Location:../../Views/menu.php');
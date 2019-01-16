<?php
session_start();

include '../../Models/connect_db.php';
include '../../Models/session_mdl.php';

$update_pers= "UPDATE users SET name_user = NULL, lastname_user = NULL, address_user = NULL, phone_user = NULL, date_birth_user = NULL, obj_career_user = NULL, cv_title_user = NULL, handicap_user = NULL WHERE id_users = '".$_SESSION['id']."'";
$bdd = $pdo->exec($update_pers);

header('Location:../../Views/creationcv.php');
?>
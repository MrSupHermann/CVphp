<?php
session_start();
include '../Models/session_mdl.php';
include '../Models/connect_db.php';

$delete = $pdo->exec("DELETE FROM trainings WHERE users_id_users = '$id'");
$delete2 = $pdo->exec("DELETE FROM skills WHERE users_id_users = '$id'");
$delete2 = $pdo->exec("DELETE FROM realisations WHERE users_id_users = '$id'");
$delete2 = $pdo->exec("DELETE FROM exp_pro WHERE users_id_users = '$id'");
$delete2 = $pdo->exec("DELETE FROM activities WHERE users_id_users = '$id'");
$update_pers= "UPDATE users SET name_user = NULL, lastname_user = NULL, address_user = NULL, phone_user = NULL, date_birth_user = NULL, obj_career_user = NULL, cv_title_user = NULL, handicap_user = NULL WHERE id_users = '".$_SESSION['id']."'";
$bdd = $pdo->exec($update_pers);

header('Location:../Views/menu.php');
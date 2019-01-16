<?php
session_start();
include '../../Models/session_mdl.php';
include '../../Models/personal_mdl.php';
include '../../Models/connect_db.php';

$update= "UPDATE users SET name_user = '".$name."', lastname_user = '".$lastname."', address_user = '".$adress."', phone_user = '".$phone_number."', date_birth_user = '".$birthdate."', obj_career_user = '".$career_obj."', cv_title_user = '".$cv_title."', handicap_user = '".$particularity."' WHERE id_users = '".$_SESSION['id']."'";
$bdd = $pdo->exec($update);

header('Location:../../Views/creationcv.php');
?>
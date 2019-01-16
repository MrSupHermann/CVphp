<?php
session_start();
include '../../Models/session_mdl.php';
include '../../Models/skills_mdl.php';
include '../../Models/connect_db.php';


if(isset($_POST['ins_skill'])){
    $insert3 = "INSERT INTO skills(title_skill, desc_skill, users_id_users) VALUES ('".$skill_name."', '".$skill_description."', '".$id."');";
    $bdd3 = $pdo->exec($insert3);
}
else if(isset($_POST['upd_skill'])){
    $update3= "UPDATE skills SET title_skill = '".$skill_name."', desc_skill = '".$skill_description."' WHERE users_id_users = $_SESSION[id] ORDER BY id_skill DESC LIMIT 1";
    $bdd = $pdo->exec($update3);
}


header('Location:../../Views/creationcv.php');
?>
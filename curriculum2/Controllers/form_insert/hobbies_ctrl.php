<?php
session_start();
include '../../Models/session_mdl.php';
include '../../Models/hobbies_mdl.php';
include '../../Models/connect_db.php';


if(isset($_POST['ins_hob'])){
    $insert5 = "INSERT INTO activities(title_act, desc_act, users_id_users) VALUES ('".$hobby."', '".$hobby_description."', '".$id."');";
    $bdd5 = $pdo->exec($insert5);
}
else if(isset($_POST['upd_hob'])){
    $update5= "UPDATE activities SET title_act = '".$hobby."', desc_act = '".$hobby_description."' WHERE users_id_users = $_SESSION[id] ORDER BY id_act DESC LIMIT 1";
    $bdd = $pdo->exec($update5);
}


header('Location:../../Views/creationcv.php');

?>
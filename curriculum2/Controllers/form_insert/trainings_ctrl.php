<?php
session_start();
include '../../Models/session_mdl.php';
include '../../Models/trainings_mdl.php';
include '../../Models/connect_db.php';


if(isset($_POST['ins_train'])){
    $insert1 = "INSERT INTO trainings(start_date_train, end_date_train, school_train, location_train, title_train, dipl_name_train, users_id_users) VALUES ('".$start_train."', '".$end_train."', '".$organism_name."', '".$location_organism_name."', '".$title."', '".$diploma."', '".$id."');";
    $bdd1 = $pdo->exec($insert1);
}
else if(isset($_POST['upd_train'])){
    $update1= "UPDATE trainings SET start_date_train = '".$start_train."' , end_date_train = '".$end_train."', school_train = '".$organism_name."', location_train = '".$location_organism_name."', title_train = '".$title."', dipl_name_train = '".$diploma."' WHERE users_id_users = $_SESSION[id] ORDER BY id_train DESC LIMIT 1";
    $bdd = $pdo->exec($update1);
}

header('Location:../../Views/creationcv.php');
?>
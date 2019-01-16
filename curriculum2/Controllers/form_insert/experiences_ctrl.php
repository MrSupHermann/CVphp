<?php
session_start();
include '../../Models/session_mdl.php';
include '../../Models/experiences_mdl.php';
include '../../Models/connect_db.php';

if(isset($_POST['ins_exp'])){
    $insert2 = "INSERT INTO exp_pro(start_date_exp, end_date_exp, firm_name_exp, location_exp, job_exp, mission_exp, type_contract_exp, users_id_users) VALUES ('".$start_xp."', '".$end_xp."', '".$enterprise_name."', '".$location_name."', '".$work."', '".$mission."', '".$contract_type."', '".$id."');";
    $bdd2 = $pdo->exec($insert2);
}
else if(isset($_POST['upd_exp'])){
    $update2= "UPDATE exp_pro SET start_date_exp = '".$start_xp."', end_date_exp = '".$end_xp."', firm_name_exp = '".$enterprise_name."', location_exp = '".$location_name."', job_exp = '".$work."', mission_exp = '".$mission."', type_contract_exp = '".$contract_type."' WHERE users_id_users = $id ORDER BY id_exp DESC LIMIT 1";
    $bdd = $pdo->exec($update2);
}

header('Location:../../Views/creationcv.php');

?>
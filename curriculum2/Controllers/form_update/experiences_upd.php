<?php
session_start();
include '../../Models/session_mdl.php';
include '../../Models/connect_db.php';
include '../../Models/experiences_mdl.php';

$update2= "UPDATE exp_pro SET start_date_exp = '".$start_xp."', end_date_exp = '".$end_xp."', firm_name_exp = '".$enterprise_name."', location_exp = '".$location_name."', job_exp = '".$work."', mission_exp = '".$mission."', type_contract_exp = '".$contract_type."' WHERE users_id_users = $id ORDER BY id_exp DESC LIMIT 1";
$bdd = $pdo->exec($update2);

//https://forum.alsacreations.com/topic-20-63335-1-Gerer-2-boutons-Submit-dans-un-formulaire.html

header('Location:../../Views/creationcv.php');
?>
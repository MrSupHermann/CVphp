<?php
session_start();
include '../../Models/session_mdl.php';
include '../../Models/realisations_mdl.php';
include '../../Models/connect_db.php';

$insert4 = "INSERT INTO realisations(title_rea, desc_rea, start_date_rea, end_date_rea, users_id_users) VALUES ('".$realisation_name."', '".$realisation_description."', '".$start_realisation."', '".$end_realisation."', '".$id."');";
$bdd4 = $pdo->exec($insert4);

header('Location:../../Views/creationcv.php');

?>
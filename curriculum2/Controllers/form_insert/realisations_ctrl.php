<?php
session_start();
include '../../Models/session_mdl.php';
include '../../Models/realisations_mdl.php';
include '../../Models/connect_db.php';


if(isset($_POST['ins_rea'])){
    $insert4 = "INSERT INTO realisations(title_rea, desc_rea, start_date_rea, end_date_rea, users_id_users) VALUES ('".$realisation_name."', '".$realisation_description."', '".$start_realisation."', '".$end_realisation."', '".$id."');";
    $bdd4 = $pdo->exec($insert4);
}
else if(isset($_POST['upd_rea'])){
    $update4= "UPDATE realisations SET title_rea = '".$realisation_name."', desc_rea = '".$realisation_description."', start_date_rea = '".$start_realisation."', end_date_rea = '".$end_realisation."' WHERE users_id_users = $_SESSION[id] ORDER BY id_rea DESC LIMIT 1";
    $bdd = $pdo->exec($update4);
}


header('Location:../../Views/creationcv.php');

?>
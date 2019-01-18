<?php

include '../Models/connect_db.php';//inclusion du modèle de connection
include '../Models/logs_conn_mdl.php';

$reqs = $pdo->prepare("SELECT id_users, mail_user, keypass_user FROM users WHERE mail_user = :mail_user");
$reqs->execute(array(':mail_user' => $mail_user));
$key = $reqs->fetch(); 
$var = password_verify($pass_user, $key['keypass_user']);

if(!empty($mail_user) || !empty($pass_user)){//Si les input mail/mdp ne sont pas vides
    if($var){
        session_start();//alors on ouvre une session
        $_SESSION['id'] = $key['id_users'];//on déclare les variables et les valeurs de session
        $_SESSION['mail_user'] = $key['mail_user'];
        header('Location:../Views/menu.php');//puis on renvoie l'utilisateur vers une autre page
    }
    else {
        $msgwrong='Mauvais Email ou mot de passe';//sinon on prépare un message de mauvais identifiants
        header('Location:../index.php?msgwrong="'.$msgwrong.'"');//et on renvoie l'utilisateur sur la page d'accueil
    }
}
else{
    $msgempty='Veuillez renseigner tous les champs';// sinon on prépare un message de champs vides
    header('Location:../index.php?msgempty="'.$msgempty.'"');//et on renvoie l'utilisateur sur la page d'accueil
}
?>
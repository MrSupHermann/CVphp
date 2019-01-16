<?php
$mail_user = addslashes(htmlspecialchars($_POST['mail']));
$pass_user = addslashes(htmlspecialchars($_POST['pass']));
//déclaration des variables utilisateur
include '../Models/connect_db.php';//inclusion du modèle de connection

$reqs = $pdo->prepare("SELECT id_users, mail_user, keypass_user FROM users WHERE mail_user = :mail_user AND keypass_user = :pass_user");
$reqs->execute(array(':mail_user' => $mail_user, ':pass_user' => $pass_user));

if(!empty($mail_user) || !empty($pass_user)){//Si les input mail/mdp ne sont pas vides
    if($reqs->rowCount() > 0){//alors on cherche une entrée déjà existante dans la BDD et s'il y en a une
        session_start();//alors on ouvre une session
        $reqsession = $reqs->fetch();
        $_SESSION['id'] = $reqsession['id_users'];//on déclare les variables et les valeurs de session
        $_SESSION['mail_user'] = $reqsession['mail_user'];
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
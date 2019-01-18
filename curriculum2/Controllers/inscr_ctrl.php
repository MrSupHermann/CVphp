<?php

include '../Models/connect_db.php';//inclusion du modèle de connection
include '../Models/logs_mdl.php';


$req = $pdo->prepare("SELECT mail_user FROM users WHERE mail_user=:mail_user");
$req->execute(array(':mail_user'=>$mail_user));

if(!empty($mail_user) || !empty($pass_user)){//Si les input mail/mdp ne sont pas vides
    if ($req->rowCount() > 0){//alors on cherche une entrée mail déjà existante dans la BDD et s'il y en a une
        $message='Email indisponible';//alors on prépare un message d'erreur
        header('Location:../index.php?message="'.$message.'"');//et on renvoie l'utilisateur vers la page d'accueil
    }
    else {
        $reqs = "INSERT INTO users(mail_user, keypass_user) VALUES ('".$mail_user."' , '".$pass_user."');";//sinon on insère les informations rentrées dans la base de données
        $bdd = $pdo->exec($reqs);
        $requete = $pdo->prepare("SELECT id_users, mail_user, keypass_user FROM users WHERE mail_user = :mail_user AND keypass_user = :pass_user");// puis on récupère ces informations
        $requete->execute(array(':mail_user' => $mail_user, ':pass_user' => $pass_user));

        session_start();//on commence une nouvelle session
        $reqsession = $requete->fetch();
        $_SESSION['id'] = $reqsession['id_users'];//avec les informations fraichement récupérées
        $_SESSION['mail_user'] = $reqsession['mail_user'];
        header('Location:../Views/menu.php');//et on renvoie l'utilisateur vers une autre page
    }
}
else{
    $msgempty2='Veuillez renseigner tous les champs';//sinon on prépare un message de champs vides
    header('Location:../index.php?msgempty2="'.$msgempty2.'"');//et on renvoie l'utilisateur vers la page d'accueil
}

?>
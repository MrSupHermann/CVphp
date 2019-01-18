<?php

$mail_user = htmlspecialchars($_POST['mail']);
$pass_user = password_hash($_POST['pass'], PASSWORD_DEFAULT);
?>
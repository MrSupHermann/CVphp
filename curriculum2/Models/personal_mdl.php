<?php

$name = addslashes(htmlspecialchars($_POST['name']));
$lastname = addslashes(htmlspecialchars($_POST['lastname']));
$adress = addslashes(htmlspecialchars($_POST['adress']));
$phone_number = htmlspecialchars($_POST['phone_number']);
$birthdate = $_POST['birthdate'];
$career_obj = addslashes(htmlspecialchars($_POST['career_obj']));
$cv_title = addslashes(htmlspecialchars($_POST['cv_title']));
$particularity = addslashes(htmlspecialchars($_POST['particularity']));

?>
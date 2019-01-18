<?php
session_start();

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Menus</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
    <a href="creationcv.php"><button class="btn btn-success">Créer / Modifier votre CV</button></a>
    <a href="finalview.php"><button class="btn btn-primary">Voir votre CV</button></a>
    <a href="deletecv.php"><button class="btn btn-danger">Supprimer votre CV</button></a>
    <a href="logs.php"><button class="btn btn-warning">Modifier vos informations de connexion</button></a>
</body>
</html>
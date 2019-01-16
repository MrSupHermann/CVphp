<?php
session_start();

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <a href="creationcv.php"><button>Créer / Modifier votre CV</button></a>
    <a href="finalview.php"><button>Voir votre CV</button></a><!--Ne pas oublier de mettre l'url du lien-->
    <a href="deletecv.php"><button>Supprimer votre CV</button></a>
    <a href="logs.php"><button>Modifier vos informations de connexion</button></a><!--Ne pas oublier de faire nouvelle view, nouveau controleur-->
</body>
</html>
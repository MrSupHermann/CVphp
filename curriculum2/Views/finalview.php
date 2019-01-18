<?php
session_start();
include '../Models/connect_db.php';
include '../Models/select_mdl.php';
?>

<!doctype html>
<html lang="en">
    <head>
        <title>Title</title>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" type="text/css" href="../Styles/finalcv.css">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    </head>
    <body>
        <div class="d-flex" id="global">
            <div id="mainpanel">
                <h1>
                    <?php 
                        echo $data['name_user'], " ", $data['lastname_user'], '<br>';
                        echo $data['cv_title_user'], '<br>';
                    ?>
                </h1>
                    <h4>Diplômes et Formations</h4>
                    <?php
                        while($data2 = $request2->fetch()){
                            echo  $data2['title_train'], " - " ;
                            echo  $data2['school_train'], " - ";
                            echo  $data2['location_train'], " / ";
                            echo "Du ", $data2['start_date_train'], " ";
                            echo "au ", $data2['end_date_train'], '<br>';
                            echo $data2['dipl_name_train'], '<br>', '<br>';
                        }
                    ?>
                    <h4>Expériences professionnelles</h4>
                    <?php
                        while($data3 = $request3->fetch()){
                            echo $data3['job_exp'], " - ";
                            echo $data3['firm_name_exp'], " - ";
                            echo $data3['location_exp'], " - " ;
                            echo $data3['type_contract_exp'], " / ";
                            echo "Du ", $data3['start_date_exp'], " ";
                            echo "au ", $data3['end_date_exp'], '<br>';
                            echo $data3['mission_exp'], '<br>', '<br>';
                            
                        }
                    ?>
                    <h4>Réalisations</h4>
                    <?php
                        while($data5 = $request5->fetch()){
                            echo $data5['title_rea'], '<br>';
                            echo $data5['desc_rea'], '<br>';
                            echo "Du ", $data5['start_date_rea'], " ";
                            echo "au ", $data5['end_date_rea'], '<br>', '<br>';
                        }
                    ?>
            </div>
            <div id="secondpanel">    
                <h4>Informations personnelles</h4>
                <?php
                    echo $data['mail_user'], '<br>';
                    echo $data['address_user'], '<br>';
                    echo "Né(e) le: ", $data['date_birth_user'], '<br>';
                    echo "N°: ", $data['phone_user'], '<br>';
                    echo $data['obj_career_user'], '<br>';
                    echo "Handicap : ", $data['handicap_user'], '<br>', '<br>';
                ?>
                <h4>Compétences</h4>
                <?php
                    while($data4 = $request4->fetch()){
                        echo $data4['title_skill'], '<br>';
                        echo $data4['desc_skill'], '<br>';
                    }
                ?>
                <h4>Centres d'intérêt</h4>
                <?php
                    while($data6 = $request6->fetch()){
                        echo $data6['title_act'], '<br>';
                        echo $data6['desc_act'], '<br>';
                    }
                ?>
            </div>
        </div>
        <a href="menu.php"><button>Retour</button></a>
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    </body>
</html>
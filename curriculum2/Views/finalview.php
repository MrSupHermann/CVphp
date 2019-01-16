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

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  </head>
  <body>
  <div class="container-fluid">
        <div class="row">
            <div class="col-2">
                <h4>Informations personnelles</h4>
                <?php
                    echo $data['name_user'];
                    echo '<br>';
                    echo $data['lastname_user'];
                    echo '<br>';
                    echo $data['address_user'];
                    echo '<br>';
                    echo $data['phone_user'];
                    echo '<br>';
                    echo $data['date_birth_user'];
                    echo '<br>';
                    echo $data['obj_career_user'];
                    echo '<br>';
                    echo $data['cv_title_user'];
                    echo '<br>';
                    echo $data['handicap_user'];
                    echo '<br>';
                    echo '<br>';
                ?>
            </div>
            <div class="col-2">
                <h4>Formations et diplomes</h4>
                <?php
                    while($data2 = $request2->fetch()){
                        echo $data2['start_date_train'];
                        echo '<br>';
                        echo $data2['end_date_train'];
                        echo '<br>';
                        echo $data2['school_train'];
                        echo '<br>';
                        echo $data2['location_train'];
                        echo '<br>';
                        echo $data2['title_train'];
                        echo '<br>';
                        echo $data2['dipl_name_train'];
                        echo '<br>';
                        echo $data2['dipl_validate_train'];
                        echo '<br>';
                        echo '<br>';
                    }
                ?>
            </div>
            <div class="col-2">
                <h4>Expériences professionnelles</h4>
                <?php
                    while($data3 = $request3->fetch()){
                        echo $data3['start_date_exp'];
                        echo '<br>';
                        echo $data3['end_date_exp'];
                        echo '<br>';
                        echo $data3['firm_name_exp'];
                        echo '<br>';
                        echo $data3['location_exp'];
                        echo '<br>';
                        echo $data3['job_exp'];
                        echo '<br>';
                        echo $data3['mission_exp'];
                        echo '<br>';
                        echo $data3['type_contract_exp'];
                        echo '<br>';
                        echo '<br>';
                    }
                ?>
            </div>
            <div class="col-2">
                <h4>Compétences</h4>
                <?php
                    while($data4 = $request4->fetch()){
                        echo $data4['title_skill'];
                        echo '<br>';
                        echo $data4['desc_skill'];
                        echo '<br>';
                        echo '<br>';
                    }
                ?>
           </div>
           <div class="col-2">
                <h4>Réalisations</h4>
                <?php
                    while($data5 = $request5->fetch()){
                        echo $data5['title_rea'];
                        echo '<br>';
                        echo $data5['desc_rea'];
                        echo '<br>';
                        echo $data5['start_date_rea'];
                        echo '<br>';
                        echo $data5['end_date_rea'];
                        echo '<br>';
                        echo '<br>';
                    }
                ?>
           </div>
            <div class="col-2">
                <h4>Centres d'intérêt</h4>
                <?php
                    while($data6 = $request6->fetch()){
                        echo $data6['title_act'];
                        echo '<br>';
                        echo $data6['desc_act'];
                        echo '<br>';
                        echo '<br>';
                    }
                ?>
            </div>
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>
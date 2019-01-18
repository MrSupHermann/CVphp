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
        <a href="menu.php"><button>Retour</button></a>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-2">
                <form method="post" action="../Controllers/form_insert/personal_ctrl.php">
                    <div id="p1">
                        <h2>Informations personnelles</h2>
                        Nom<br><input type="text" name="name" required><br>
                        Prénom<br><input type="text" name="lastname" required><br>
                        Adresse<br><textarea rows="3" cols="20" name="adress" required></textarea><br>
                        N° de téléphone<br><input type="tel" name="phone_number"><br>
                        Date de naissance<br><input type="date" name="birthdate" required><br>
                        Objectif de carrière<br><textarea rows="3" cols="20" name="career_obj"></textarea><br>
                        Titre du CV<br><input type="text" name="cv_title"><br>
                        Handicap<br><input type="text" name="particularity">
                    </div>
                    <button>Maj</button>
                </form>
                <a href="../Controllers/form_delete/personal_del_ctrl.php"><button>Effacer</button></a>
            </div>
        
            <div class="col-2">
                <form method="post" action="../Controllers/form_insert/trainings_ctrl.php">
                    <div id="p2">
                        <h2>Formations et diplômes</h2>
                        Début de formation<br><input type="date" name="start_train"><br>
                        Fin de formation<br><input type="date" name="end_train"><br>
                        Nom de l'organisme de formation<br><input type="text" name="organism_name"><br>
                        Location de l'organisme de formation<br><textarea rows="3" cols="20" name="location_organism_name"></textarea><br>
                        Titre<br><input type="text" name="title"><br>
                        Nom du diplôme<br><input type="text" name="diploma"><br>
                    </div>
                    <button name="ins_train" value="ins_train">Insert</button>
                    <button name="upd_train" value="upd_train">Maj</button>
                </form>
                <a href="../Controllers/form_delete/trainings_del_ctrl.php"><button>Effacer</button></a>
            </div>
            
            <div class="col-2">
                <form method="post" action="../Controllers/form_insert/experiences_ctrl.php">
                    <div id="p3">
                        <h2>Experiences professionnelles</h2>
                        Début d'expérience professionnelle<br><input type="date" name="start_xp"><br>
                        Fin d'expérience professionnelle<br><input type="date" name="end_xp"><br>
                        Nom de l'entreprise<br><input type="text" name="enterprise_name"><br>
                        Location<br><textarea rows="3" cols="20" name="location_name"></textarea><br>
                        Travail<br><input type="text" name="work"><br>
                        Mission<br><input type="text" name="mission"><br>
                        Type de contrat<br><input type="text" name="contract_type">
                    </div>
                    <button name="ins_exp" value="ins_exp">Insert</button>
                    <button name="upd_exp" value="upd_exp">Maj</button>
                </form>
                <a href="../Controllers/form_delete/experiences_del_ctrl.php"><button>Effacer</button></a>
            </div>
            
            <div class="col-2">
                <form method="post" action="../Controllers/form_insert/skills_ctrl.php">  
                    <div id="p4">
                        <h2>Compétences</h2>
                        Nom de la compétence<br><input type="text" name="skill_name"><br>
                        Description de la compétence<br><textarea rows="3" cols="20" name="skill_description"></textarea>
                    </div>
                    <button name="ins_skill" value="ins_skill">Insert</button>
                    <button name="upd_skill" value="upd_skill">Maj</button>
                </form>
                <a href="../Controllers/form_delete/skills_del_ctrl.php"><button>Effacer</button></a>
            </div>
            
            <div class="col-2">
                <form method="post" action="../Controllers/form_insert/realisations_ctrl.php">
                    <div id="p5">
                        <h2>Réalisations</h2>
                        Titre de la réalisation<br><input type="text" name="realisation_name"><br>
                        Description de la réalisation<br><textarea rows="3" cols="20" name="realisation_description"></textarea><br>
                        Début de réalisation<br><input type="date" name="start_realisation"><br> <!-- Changer pour date -->
                        Fin de réalisation<br><input type="date" name="end_realisation"> <!-- Changer pour date -->
                    </div>
                    <button name="ins_rea" value="ins_rea">Insert</button>
                    <button name="upd_rea" value="upd_rea">Maj</button>
                </form>
                <a href="../Controllers/form_delete/realisations_del_ctrl.php"><button>Effacer</button></a>
            </div>
            
            <div class="col-2">
                <form method="post" action="../Controllers/form_insert/hobbies_ctrl.php">
                    <div id="p6">
                        <h2>Centres d'intérêt</h2>
                        Hobby<br><input type="text" name="hobby"><br>
                        Description<br><textarea rows="3" cols="20" name="hobby_description"></textarea>
                    </div>
                    <button name="ins_hob" value="ins_hob">Insert</button>
                    <button name="upd_hob" value="upd_hob">Maj</button>
                </form>
                <a href="../Controllers/form_delete/hobbies_del_ctrl.php"><button>Effacer</button></a>
            </div>
        </div>
    </div>

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
<?php
session_start();
if (isset($_SESSION['id_admin']) AND isset($_SESSION['pseudo_admin']))
{
  ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="fonts/pe-icon-7-stroke/css/pe-icon-7-stroke.css">
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome/css/font-awesome.css">
    <title>PANEL ADMIN</title>
    <style>
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
</style>
</head>
<body>
<br>
<input class="retour" style=" border: 3px solid black; background:white;" type=button onclick=window.location.href='interfaceadministrateur.php'; value="RETOUR" />
<br>
  <section class="resume-section p-4 p-lg-5 text-center" id="contact">
        <div class="my-auto">
          <h2 class="mb-4"> Listing des inscriptions </h2>

          <hr>

          <h2 class="mb-4"><<< Pour le Carolo Express >>></h2>
          <table style="width:100%;">
            <tr>
              <th style="background-color:red;color:white">Nom de L'équipe</th>
              <th style="background-color:red;color:white">Établissement</th>
              <th style="background-color:red;color:white">Nom</th>
              <th style="background-color:red;color:white">Prénom</th>
              <th style="background-color:red;color:white">Mot de passe</th>
              <th style="background-color:red;color:white">Mail</th>
              <th style="background-color:red;color:white">Mobile</th>
              <th style="background-color:red;color:white">N° Participant</th>
              <th style="background-color:red;color:white">Valider ?</th>
            </tr>


            <?php
            include 'connectbdd.php';
            $req = $bdd->prepare('SELECT nom_team, etablissement, nom, prenom, password, email, mobile, participant, actif FROM etudiant');
            $req->execute();
            while ( $resultat = $req->fetch(PDO::FETCH_ASSOC) ){?>
            <tr>
              <th>   <?php  echo $resultat['nom_team'] ?>   </th>
              <th>   <?php  echo $resultat['etablissement'] ?>   </th>
              <th>   <?php  echo $resultat['nom'] ?>   </th>
              <th>   <?php  echo $resultat['prenom'] ?>   </th>
              <th>   <?php  echo $resultat['password'] ?>   </th>
              <th>   <?php  echo $resultat['email'] ?>   </th>
              <th>   <?php  echo $resultat['mobile'] ?>   </th>
              <th>   <?php  echo $resultat['participant'] ?>   </th>

              <?php  if($resultat['actif'] == 1){ ?>
              <th style="background-color:green;color:white;"> Valider </th>
              <?php } else { ?>
              <th style="background-color:yellow;color:black;"> en attente </th>
              <?php } ?>


            </tr>
            <?php } ?>
            <?php  $req-> closeCursor(); ?>
          </table>

          <hr>

          <h2 class="mb-4"><<< Pour le Carolo Warrior >>></h2>
          <table style="width:100%;">
            <tr>
              <th style="background-color:red;color:white">Nom de L'équipe</th>
              <th style="background-color:red;color:white">Établissement</th>
              <th style="background-color:red;color:white">Nom</th>
              <th style="background-color:red;color:white">Prénom</th>
              <th style="background-color:red;color:white">Mail</th>
              <th style="background-color:red;color:white">Mobile</th>
              <th style="background-color:red;color:white">N° Participant</th>
              <th style="background-color:red;color:white">Valider ?</th>
            </tr>


            <?php
            $req = $bdd->prepare('SELECT nom_team, etablissement, nom, prenom, email, mobile, participant, actif FROM warrior');
            $req->execute();
            while ( $resultat = $req->fetch(PDO::FETCH_ASSOC) ){?>
            <tr>
              <th>   <?php  echo $resultat['nom_team'] ?>   </th>
              <th>   <?php  echo $resultat['etablissement'] ?>   </th>
              <th>   <?php  echo $resultat['nom'] ?>   </th>
              <th>   <?php  echo $resultat['prenom'] ?>   </th>
              <th>   <?php  echo $resultat['email'] ?>   </th>
              <th>   <?php  echo $resultat['mobile'] ?>   </th>
              <th>   <?php  echo $resultat['participant'] ?>   </th>
              <?php  if($resultat['actif'] == 1){ ?>
              <th style="background-color:green;color:white;"> Valider </th>
              <?php } else { ?>
              <th style="background-color:yellow;color:black;"> en attente </th>
              <?php } ?>
            </tr>
            <?php } ?>
            <?php  $req-> closeCursor(); ?>
          </table>

          <hr>

          <h2 class="mb-4"><<< Pour Concours Cuisine >>></h2>
          <table style="width:100%;">
            <tr>
              <th style="background-color:red;color:white">Nom de L'équipe</th>
              <th style="background-color:red;color:white">Établissement</th>
              <th style="background-color:red;color:white">Nom</th>
              <th style="background-color:red;color:white">Prénom</th>
              <th style="background-color:red;color:white">Mail</th>
              <th style="background-color:red;color:white">Mobile</th>
              <th style="background-color:red;color:white">N° Participant</th>
              <th style="background-color:red;color:white">Valider ?</th>
            </tr>


            <?php
            $req = $bdd->prepare('SELECT nom_team, etablissement, nom, prenom, email, mobile, participant, actif FROM cuisine');
            $req->execute();
            while ( $resultat = $req->fetch(PDO::FETCH_ASSOC) ){?>
            <tr>
              <th>   <?php  echo $resultat['nom_team'] ?>   </th>
              <th>   <?php  echo $resultat['etablissement'] ?>   </th>
              <th>   <?php  echo $resultat['nom'] ?>   </th>
              <th>   <?php  echo $resultat['prenom'] ?>   </th>
              <th>   <?php  echo $resultat['email'] ?>   </th>
              <th>   <?php  echo $resultat['mobile'] ?>   </th>
              <th>   <?php  echo $resultat['participant'] ?>   </th>
              <?php  if($resultat['actif'] == 1){ ?>
              <th style="background-color:green;color:white;"> Valider </th>
              <?php } else { ?>
              <th style="background-color:yellow;color:black;"> en attente </th>
              <?php } ?>
            </tr>
            <?php } ?>
            <?php  $req-> closeCursor(); ?>
          </table>

          <hr>

          <h2 class="mb-4"><<< Pour le Pique-nique >>></h2>
          <table style="width:100%;">
            <tr>
              <th style="background-color:red;color:white">Établissement</th>
              <th style="background-color:red;color:white">Nom</th>
              <th style="background-color:red;color:white">Prénom</th>
              <th style="background-color:red;color:white">Mail</th>
              <th style="background-color:red;color:white">Mobile</th>
              <th style="background-color:red;color:white">Valider ?</th>
            </tr>


            <?php
            $req = $bdd->prepare('SELECT nom_team, etablissement, nom, prenom, email, mobile, participant, actif FROM piquenique');
            $req->execute();
            while ( $resultat = $req->fetch(PDO::FETCH_ASSOC) ){?>
            <tr>
              <th>   <?php  echo $resultat['etablissement'] ?>   </th>
              <th>   <?php  echo $resultat['nom'] ?>   </th>
              <th>   <?php  echo $resultat['prenom'] ?>   </th>
              <th>   <?php  echo $resultat['email'] ?>   </th>
              <th>   <?php  echo $resultat['mobile'] ?>   </th>
              <?php  if($resultat['actif'] == 1){ ?>
              <th style="background-color:green;color:white;"> Valider </th>
              <?php } else { ?>
              <th style="background-color:yellow;color:black;"> en attente </th>
              <?php } ?>
            </tr>
            <?php } ?>
            <?php  $req-> closeCursor(); ?>
          </table>
        </div>
      </section>


      </body>
</html>

<?php
}
else {
  echo " j'ai un soucis car tu n'es pas connecté !";
}

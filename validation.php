<?php


include 'connectbdd.php';


// Récupération des variables nécessaires à l'activation
$nom = $_GET['nom'];
$cle = $_GET['cle'];
$prenom = $_GET['prenom'];


// Récupération de la clé correspondant au $nom dans la base de données
$req = $bdd->prepare("SELECT cle, actif FROM etudiant WHERE nom = :nom AND prenom = :prenom");


if($req->execute(array(':nom' => $nom, ':prenom' => $prenom)) && $row = $req->fetch())
  {
// Récupération de la clé
    $clebdd = $row['cle'];
 // $actif contiendra alors 0 ou 1
    $actif = $row['actif'];
  }


// On teste la valeur de la variable $actif récupéré dans la BDD
// Si le compte est déjà actif on prévient
if($actif == '1')
  {
    header('Location: duplicate-already-done.php');
  }
// Si ce n'est pas le cas on passe aux comparaisons
   else
  {
// On compare nos deux clés
     if($cle == $clebdd)
       {
// Si elles correspondent on active le compte !


// La requête qui va passer notre champ actif de 0 à 1
         $req = $bdd->prepare("UPDATE etudiant SET actif = 1 WHERE nom = :nom AND prenom = :prenom ");
         $req->bindParam(':nom', $nom);
         $req->bindParam(':prenom', $prenom);
         $req->execute();

         $req->closeCursor();

         $req = $bdd->prepare("SELECT nom_team FROM etudiant where cle = :cle");

         if($req->execute(array(':cle' => $cle )) && $row = $req->fetch())
           {
             $nomteam = $row['nom_team'];

           }


           $req->closeCursor();

           echo '<br>';

           $req = $bdd->prepare("SELECT count(*) AS nombreactif FROM etudiant where actif=1 AND nom_team=:nom_team");

           if($req->execute(array(':nom_team' => $nomteam )) && $row = $req->fetch())
             {

               $nbactif=$row['nombreactif'];
               $email1;
               $email2;
               $email3;
               $email4;
               $email5;
               $i=1;
               if ($nbactif==5) {

                 $req2 = $bdd->prepare("SELECT email FROM etudiant WHERE nom_team=:nom_team");

                 if ($req2->execute(array(':nom_team' => $nomteam ))) {

                   while ($row = $req2->fetch()) {
                      if ($i == 1){
                        $email1 = $row['email'];
                      }
                      if ($i == 2){
                        $email2 = $row['email'];
                      }
                      if ($i == 3){
                        $email3 = $row['email'];
                      }
                      if ($i == 4){
                        $email4 = $row['email'];
                      }
                      if ($i == 5){
                        $email5 = $row['email'];
                      }
                      $i = $i+1;
                   }



                   $from  = "contact@rentree-etudiants-cmz.fr";

                   ini_set("SMTP", "smtp.rentree-etudiants-cmz.fr");   // Pour les hébergements mutualisés Windows de OVH

                   // *** Laisser tel quel

                   $Subject = "Rentree des etudiants – Inscription Carolo Express ";

                   $message = 'Féliciation !
                   <br><br>
                   Tous les participants de votre équipe ont confirmé leur inscription.
                   <br>
                   Votre équipe est bien enregistrée.
                   <br>
                   Rendez-Vous le 3 octobre !.<br>

                   ---------------

                   Ceci est un mail automatique, Merci de ne pas y répondre.';

                   $headers  = "MIME-Version: 1.0 \n";

                   $headers .= "Content-type: text/html; charset=utf8 \n";

                   $headers .= "From: $from  \n";



                   $headers .= "X-Priority: 1  \n";

                   $headers .= "X-MSMail-Priority: High \n";

                   $CR_Mail = TRUE;

                   $CR_Mail = @mail ($email1, $Subject, $message, $headers);



                   $from  = "contact@rentree-etudiants-cmz.fr";

                   ini_set("SMTP", "smtp.rentree-etudiants-cmz.fr");   // Pour les hébergements mutualisés Windows de OVH

                   // *** Laisser tel quel

                   $Subject = "Rentree des etudiants – Inscription Carolo Express ";

                   $message = 'Féliciation !
                   <br><br>
                   Tous les participants de votre équipe ont confirmé leur inscription.
                   <br>
                   Votre équipe est bien enregistrée.
                   <br>
                   Rendez-Vous le 3 octobre !.<br>

                   ---------------

                   Ceci est un mail automatique, Merci de ne pas y répondre.';

                   $headers  = "MIME-Version: 1.0 \n";

                   $headers .= "Content-type: text/html; charset=utf8 \n";

                   $headers .= "From: $from  \n";



                   $headers .= "X-Priority: 1  \n";

                   $headers .= "X-MSMail-Priority: High \n";

                   $CR_Mail = TRUE;

                   $CR_Mail = @mail ($email2, $Subject, $message, $headers);



                   $from  = "contact@rentree-etudiants-cmz.fr";

                   ini_set("SMTP", "smtp.rentree-etudiants-cmz.fr");   // Pour les hébergements mutualisés Windows de OVH

                   // *** Laisser tel quel

                   $Subject = "Rentree des etudiants – Inscription Carolo Express ";

                   $message = 'Féliciation !
                   <br><br>
                   Tous les participants de votre équipe ont confirmé leur inscription.
                   <br>
                   Votre équipe est bien enregistrée.
                   <br>
                   Rendez-Vous le 3 octobre !.<br>

                   ---------------

                   Ceci est un mail automatique, Merci de ne pas y répondre.';

                   $headers  = "MIME-Version: 1.0 \n";

                   $headers .= "Content-type: text/html; charset=utf8 \n";

                   $headers .= "From: $from  \n";



                   $headers .= "X-Priority: 1  \n";

                   $headers .= "X-MSMail-Priority: High \n";

                   $CR_Mail = TRUE;

                   $CR_Mail = @mail ($email3, $Subject, $message, $headers);




                   $from  = "contact@rentree-etudiants-cmz.fr";

                   ini_set("SMTP", "smtp.rentree-etudiants-cmz.fr");   // Pour les hébergements mutualisés Windows de OVH

                   // *** Laisser tel quel

                   $Subject = "Rentree des etudiants – Inscription Carolo Express ";

                   $message = 'Féliciation !
                   <br><br>
                   Tous les participants de votre équipe ont confirmé leur inscription.
                   <br>
                   Votre équipe est bien enregistrée.
                   <br>
                   Rendez-Vous le 3 octobre !.<br>

                   ---------------

                   Ceci est un mail automatique, Merci de ne pas y répondre.';

                   $headers  = "MIME-Version: 1.0 \n";

                   $headers .= "Content-type: text/html; charset=utf8 \n";

                   $headers .= "From: $from  \n";



                   $headers .= "X-Priority: 1  \n";

                   $headers .= "X-MSMail-Priority: High \n";

                   $CR_Mail = TRUE;

                   $CR_Mail = @mail ($email4, $Subject, $message, $headers);




                   $from  = "contact@rentree-etudiants-cmz.fr";

                   ini_set("SMTP", "smtp.rentree-etudiants-cmz.fr");   // Pour les hébergements mutualisés Windows de OVH

                   // *** Laisser tel quel

                   $Subject = "Rentree des etudiants – Inscription Carolo Express ";

                   $message = 'Féliciation !
                   <br><br>
                   Tous les participants de votre équipe ont confirmé leur inscription.
                   <br>
                   Votre équipe est bien enregistrée.
                   <br>
                   Rendez-Vous le 3 octobre !.<br>

                   ---------------

                   Ceci est un mail automatique, Merci de ne pas y répondre.';

                   $headers  = "MIME-Version: 1.0 \n";

                   $headers .= "Content-type: text/html; charset=utf8 \n";

                   $headers .= "From: $from  \n";



                   $headers .= "X-Priority: 1  \n";

                   $headers .= "X-MSMail-Priority: High \n";

                   $CR_Mail = TRUE;

                   $CR_Mail = @mail ($email5, $Subject, $message, $headers);

                   header('Location: duplicate-validation-team.php');
                   $req2->closeCursor();

                 }



               }
               else {
                   header('Location: duplicate-validation-membre.php');
               }

             }


             $req->closeCursor();









       }
// Si les deux clés sont différentes on provoque une erreur...
     else
       {
         header('Location: duplicate-erreur-inscription.php');
       }
  }


//...	fermeture connexion
$req->closeCursor();



?>
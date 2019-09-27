<?php

include 'connectbdd.php';



$etablissement = isset($_POST['etablissement']) ? $_POST['etablissement'] : NULL;

$equipe = isset($_POST['equipe']) ? $_POST['equipe'] : NULL;

$password = isset($_POST['password']) ? $_POST['password'] : NULL;



$nom = isset($_POST['nom']) ? $_POST['nom'] : NULL;

$prenom = isset($_POST['prenom']) ? $_POST['prenom'] : NULL;

$mobile = isset($_POST['mobile']) ? $_POST['mobile'] : NULL;

$email = isset($_POST['email']) ? $_POST['email'] : NULL;

$email11 = isset($_POST['email11']) ? $_POST['email11'] : NULL;



$nom2 = isset($_POST['nom2']) ? $_POST['nom2'] : NULL;

$prenom2 = isset($_POST['prenom2']) ? $_POST['prenom2'] : NULL;

$mobile2 = isset($_POST['mobile2']) ? $_POST['mobile2'] : NULL;

$email2 = isset($_POST['email2']) ? $_POST['email2'] : NULL;

$email21 = isset($_POST['email21']) ? $_POST['email21'] : NULL;



$nom3 = isset($_POST['nom3']) ? $_POST['nom3'] : NULL;

$prenom3 = isset($_POST['prenom3']) ? $_POST['prenom3'] : NULL;

$mobile3 = isset($_POST['mobile3']) ? $_POST['mobile3'] : NULL;

$email3 = isset($_POST['email3']) ? $_POST['email3'] : NULL;

$email31 = isset($_POST['email31']) ? $_POST['email31'] : NULL;



$nom4 = isset($_POST['nom4']) ? $_POST['nom4'] : NULL;

$prenom4 = isset($_POST['prenom4']) ? $_POST['prenom4'] : NULL;

$mobile4 = isset($_POST['mobile4']) ? $_POST['mobile4'] : NULL;

$email4 = isset($_POST['email4']) ? $_POST['email4'] : NULL;

$email41 = isset($_POST['email41']) ? $_POST['email41'] : NULL;



$nom5 = isset($_POST['nom5']) ? $_POST['nom5'] : NULL;

$prenom5 = isset($_POST['prenom5']) ? $_POST['prenom5'] : NULL;

$mobile5 = isset($_POST['mobile5']) ? $_POST['mobile5'] : NULL;

$email5 = isset($_POST['email5']) ? $_POST['email5'] : NULL;

$email51 = isset($_POST['email51']) ? $_POST['email51'] : NULL;



$nom6 = isset($_POST['nom6']) ? $_POST['nom6'] : NULL;

$prenom6 = isset($_POST['prenom6']) ? $_POST['prenom6'] : NULL;

$mobile6 = isset($_POST['mobile6']) ? $_POST['mobile6'] : NULL;

$email6 = isset($_POST['email6']) ? $_POST['email6'] : NULL;

$email61 = isset($_POST['email61']) ? $_POST['email61'] : NULL;



$nom7 = isset($_POST['nom7']) ? $_POST['nom7'] : NULL;

$prenom7 = isset($_POST['prenom7']) ? $_POST['prenom7'] : NULL;

$mobile7 = isset($_POST['mobile7']) ? $_POST['mobile7'] : NULL;

$email7 = isset($_POST['email7']) ? $_POST['email7'] : NULL;

$email7 = isset($_POST['email71']) ? $_POST['email71'] : NULL;



$nom8 = isset($_POST['nom8']) ? $_POST['nom8'] : NULL;

$prenom8 = isset($_POST['prenom8']) ? $_POST['prenom8'] : NULL;

$mobile8 = isset($_POST['mobile8']) ? $_POST['mobile8'] : NULL;

$email8 = isset($_POST['email8']) ? $_POST['email8'] : NULL;

$email8 = isset($_POST['email81']) ? $_POST['email81'] : NULL;



if ((($_POST['email']) == ($_POST['email11'])) And (($_POST['email2']) == ($_POST['email21'])) And (($_POST['email3']) == ($_POST['email31'])) And (($_POST['email4']) == ($_POST['email41'])) And (($_POST['email5']) == ($_POST['email51'])) And (($_POST['email6']) == ($_POST['email61'])) And (($_POST['email7']) == ($_POST['email71'])) And (($_POST['email8']) == ($_POST['email81']))){



$req = $bdd->prepare("SELECT nom,prenom FROM warrior WHERE nom = :nom AND prenom =:prenom");

$req->execute(array(

    'nom' => $nom,
   'prenom' => $prenom ));

$resultat = $req->fetch();

$req-> closeCursor();



 $req2 = $bdd->prepare("SELECT nom,prenom FROM warrior WHERE nom = :nom AND prenom =:prenom");

 $req2->execute(array(

     'nom' => $nom2,
    'prenom' => $prenom2  ));

 $resultat2 = $req2->fetch();

 $req2-> closeCursor();





  $req3 = $bdd->prepare("SELECT nom,prenom FROM warrior WHERE nom = :nom AND prenom =:prenom");

  $req3->execute(array(

      'nom' => $nom3,
     'prenom' => $prenom3 ));

  $resultat3 = $req3->fetch();

  $req3-> closeCursor();





   $req4 = $bdd->prepare("SELECT nom,prenom FROM warrior WHERE nom = :nom AND prenom =:prenom");

   $req4->execute(array(

       'nom' => $nom4,
      'prenom' => $prenom4 ));

   $resultat4 = $req4->fetch();

   $req4-> closeCursor();





    $req5 = $bdd->prepare("SELECT nom,prenom FROM warrior WHERE nom = :nom AND prenom =:prenom");

    $req5->execute(array(

        'nom' => $nom5,
       'prenom' => $prenom5 ));

    $resultat5 = $req5->fetch();

    $req5-> closeCursor();





        $req6 = $bdd->prepare("SELECT nom,prenom FROM warrior WHERE nom = :nom AND prenom =:prenom");

        $req6->execute(array(

            'nom' => $nom6,
           'prenom' => $prenom6 ));

        $resultat6 = $req6->fetch();

        $req6-> closeCursor();







            $req7 = $bdd->prepare("SELECT nom,prenom FROM warrior WHERE nom = :nom AND prenom =:prenom");

            $req7->execute(array(

                'nom' => $nom7,
               'prenom' => $prenom7 ));

            $resultat7 = $req7->fetch();

            $req7-> closeCursor();







                $req8 = $bdd->prepare("SELECT nom,prenom FROM warrior WHERE nom = :nom AND prenom =:prenom");

                $req8->execute(array(

                    'nom' => $nom8,
                   'prenom' => $prenom8 ));

                $resultat8 = $req8->fetch();

                $req8-> closeCursor();





    if (
       (strtolower($nom) == strtolower($resultat['nom']) && strtolower($prenom) == strtolower($resultat['prenom'])) ||
       (strtolower($nom2) == strtolower($resultat2['nom']) && strtolower($prenom2) == strtolower($resultat2['prenom'])) ||
       (strtolower($nom3) == strtolower($resultat3['nom']) && strtolower($prenom3) == strtolower($resultat3['prenom'])) ||
       (strtolower($nom4) == strtolower($resultat4['nom']) && strtolower($prenom4) == strtolower($resultat4['prenom'])) ||
       (strtolower($nom5) == strtolower($resultat5['nom']) && strtolower($prenom5) == strtolower($resultat5['prenom'])) ||
       (strtolower($nom6) == strtolower($resultat6['nom']) && strtolower($prenom6) == strtolower($resultat6['prenom'])) ||
       (strtolower($nom7) == strtolower($resultat7['nom']) && strtolower($prenom7) == strtolower($resultat7['prenom'])) ||
       (strtolower($nom8) == strtolower($resultat8['nom']) && strtolower($prenom8) == strtolower($resultat8['prenom']))
     )

     {

         header('Location: duplicate-erreur-inscription.php');

     }

    else {




        $req2 = $bdd->prepare("SELECT nom_team FROM warrior WHERE nom_team = :nom_team ");

        $req2->execute(array(
            'nom_team' => $equipe
           ));

        $resultat2 = $req2->fetch();

        $req2-> closeCursor();



        if (strtolower($equipe) == strtolower($resultat2['nom_team']))
         {

             header('Location: duplicate-erreur-inscription-nomteam.php');

         }
         else {

// Génération aléatoire d'une clé

$cle = md5(microtime(TRUE)*100000);



$sql = $bdd->prepare ("INSERT INTO warrior ( nom, prenom, mobile, password, email, participant,cle, actif, etablissement, nom_team)

VALUES (:nom, :prenom, :mobile, :password, :email, :participant,:cle, :actif, :etablissement, :nom_team )");

$sql->execute(array(

  ':nom' => $nom,

  ':prenom' => $prenom,

  ':password' => 8,

  ':mobile' => $mobile,

  ':email' => $email,

  ':participant'=> 1,

  ':cle' => $cle,

  ':actif' => 0,

  ':etablissement' =>  $etablissement,

  ':nom_team' => $equipe
));

$sql-> closeCursor();



// adresse MAIL OVH liée à l’hébergement.

$from  = "contact@rentree-etudiants-cmz.fr";

ini_set("SMTP", "smtp.rentree-etudiants-cmz.fr");   // Pour les hébergements mutualisés Windows de OVH

// *** Laisser tel quel

$Subject = " Rentree des etudiants – Inscription Carolo warrior à confirmer ";

$message = 'Bonjour,<br><br>

Merci pour votre inscription. Pour la rendre effective, merci de bien vouloir cliquer sur le lien ci-dessous.<br><br>

http://rentree-etudiants-cmz.fr/validation-warrior.php?nom='.urlencode($nom).'&cle='.urlencode($cle).'&prenom='.urlencode($prenom).' <br><br>

Chaque participant doit valider le lien qu’il a reçu sur sa boite mail pour confirmer l’inscription de l’équipe !

Merci de bien vérifier que vos coéquipiers ont validé également le lien !

A très bientôt.

<br><br><br><br>

---------------

Ceci est un mail automatique, Merci de ne pas y répondre.';

$headers  = "MIME-Version: 1.0 \n";

$headers .= "Content-type: text/html; charset=utf8 \n";

$headers .= "From: $from  \n";



$headers .= "X-Priority: 1  \n";

$headers .= "X-MSMail-Priority: High \n";

$CR_Mail = TRUE;

$CR_Mail = @mail ($email, $Subject, $message, $headers);



// Génération aléatoire d'une clé

$cle = md5(microtime(TRUE)*100000);



$sql = $bdd->prepare ("INSERT INTO warrior ( nom, prenom, mobile, password, email, participant,cle, actif, etablissement, nom_team )

VALUES (:nom, :prenom, :mobile, :password, :email, :participant,:cle, :actif, :etablissement, :nom_team )");

$sql->execute(array(

  ':nom' => $nom2,

  ':prenom' => $prenom2,

  ':password' => 8,

  ':mobile' => $mobile2,

  ':email' => $email2,

  ':participant'=> 2,

  ':cle' => $cle,

  ':actif' => 0,

  ':etablissement' =>  $etablissement,

  ':nom_team' => $equipe


));

$sql-> closeCursor();





// adresse MAIL OVH liée à l’hébergement.

$from  = "contact@rentree-etudiants-cmz.fr";

ini_set("SMTP", "smtp.rentree-etudiants-cmz.fr");   // Pour les hébergements mutualisés Windows de OVH

// *** Laisser tel quel

$Subject = " Rentree des etudiants – Inscription Carolo warrior à confirmer ";

$message = 'Bonjour,<br><br>

Merci pour votre inscription. Pour la rendre effective, merci de bien vouloir cliquer sur le lien ci-dessous.<br><br>

http://rentree-etudiants-cmz.fr/validation-warrior.php?nom='.urlencode($nom2).'&cle='.urlencode($cle).'&prenom='.urlencode($prenom2).' <br><br>

Chaque participant doit valider le lien qu’il a reçu sur sa boite mail pour confirmer l’inscription de l’équipe !

Merci de bien vérifier que vos coéquipiers ont validé également le lien !

A très bientôt.


<br><br><br><br>

---------------

Ceci est un mail automatique, Merci de ne pas y répondre.';

$headers  = "MIME-Version: 1.0 \n";

$headers .= "Content-type: text/html; charset=utf8 \n";

$headers .= "From: $from  \n";



$headers .= "X-Priority: 1  \n";

$headers .= "X-MSMail-Priority: High \n";

$CR_Mail = TRUE;

$CR_Mail = @mail ($email2, $Subject, $message, $headers);





// Génération aléatoire d'une clé

$cle = md5(microtime(TRUE)*100000);



$sql = $bdd->prepare ("INSERT INTO warrior ( nom, prenom, mobile, password, email, participant,cle, actif, etablissement, nom_team)

VALUES (:nom, :prenom, :mobile, :password, :email, :participant,:cle, :actif, :etablissement, :nom_team )");

$sql->execute(array(

  ':nom' => $nom3,

  ':prenom' => $prenom3,

  ':password' => 8,

  ':mobile' => $mobile3,

  ':email' => $email3,

  ':participant'=> 3,

  ':cle' => $cle,

  ':actif' => 0,

  ':etablissement' =>  $etablissement,

  ':nom_team' => $equipe
));

$sql-> closeCursor();







// adresse MAIL OVH liée à l’hébergement.

$from  = "contact@rentree-etudiants-cmz.fr";

ini_set("SMTP", "smtp.rentree-etudiants-cmz.fr");   // Pour les hébergements mutualisés Windows de OVH

// *** Laisser tel quel

$Subject = " Rentree des etudiants – Inscription Carolo warrior à confirmer ";

$message = 'Bonjour,<br><br>

Merci pour votre inscription. Pour la rendre effective, merci de bien vouloir cliquer sur le lien ci-dessous.<br><br>

http://rentree-etudiants-cmz.fr/validation-warrior.php?nom='.urlencode($nom3).'&cle='.urlencode($cle).'&prenom='.urlencode($prenom3).' <br><br>

Chaque participant doit valider le lien qu’il a reçu sur sa boite mail pour confirmer l’inscription de l’équipe !

Merci de bien vérifier que vos coéquipiers ont validé également le lien !

A très bientôt.


<br><br><br><br>

---------------

Ceci est un mail automatique, Merci de ne pas y répondre.';

$headers  = "MIME-Version: 1.0 \n";

$headers .= "Content-type: text/html; charset=utf8 \n";

$headers .= "From: $from  \n";



$headers .= "X-Priority: 1  \n";

$headers .= "X-MSMail-Priority: High \n";

$CR_Mail = TRUE;

$CR_Mail = @mail ($email3, $Subject, $message, $headers);





// Génération aléatoire d'une clé

$cle = md5(microtime(TRUE)*100000);



$sql = $bdd->prepare ("INSERT INTO warrior ( nom, prenom, mobile, password, email, participant,cle, actif, etablissement, nom_team)

VALUES (:nom, :prenom, :mobile, :password, :email, :participant,:cle, :actif, :etablissement, :nom_team )");

$sql->execute(array(

  ':nom' => $nom4,

  ':prenom' => $prenom4,

  ':password' => 8,

  ':mobile' => $mobile4,

  ':email' => $email4,

  ':participant'=> 4,

  ':cle' => $cle,

  ':actif' => 0,

  ':etablissement' =>  $etablissement,

  ':nom_team' => $equipe
));

$sql-> closeCursor();







// adresse MAIL OVH liée à l’hébergement.

$from  = "contact@rentree-etudiants-cmz.fr";

ini_set("SMTP", "smtp.rentree-etudiants-cmz.fr");   // Pour les hébergements mutualisés Windows de OVH

// *** Laisser tel quel

$Subject = " Rentree des etudiants – Inscription Carolo warrior à confirmer ";

$message = 'Bonjour,<br><br>

Merci pour votre inscription. Pour la rendre effective, merci de bien vouloir cliquer sur le lien ci-dessous.<br><br>

http://rentree-etudiants-cmz.fr/validation-warrior.php?nom='.urlencode($nom4).'&cle='.urlencode($cle).'&prenom='.urlencode($prenom4).' <br><br>

Chaque participant doit valider le lien qu’il a reçu sur sa boite mail pour confirmer l’inscription de l’équipe !

Merci de bien vérifier que vos coéquipiers ont validé également le lien !

A très bientôt.


<br><br><br><br>

---------------

Ceci est un mail automatique, Merci de ne pas y répondre.';

$headers  = "MIME-Version: 1.0 \n";

$headers .= "Content-type: text/html; charset=utf8 \n";

$headers .= "From: $from  \n";



$headers .= "X-Priority: 1  \n";

$headers .= "X-MSMail-Priority: High \n";

$CR_Mail = TRUE;

$CR_Mail = @mail ($email4, $Subject, $message, $headers);

// Génération aléatoire d'une clé

$cle = md5(microtime(TRUE)*100000);



$sql = $bdd->prepare ("INSERT INTO warrior ( nom, prenom, mobile, password, email, participant,cle, actif, etablissement, nom_team)

VALUES (:nom, :prenom, :mobile, :password, :email, :participant,:cle, :actif, :etablissement, :nom_team )");

$sql->execute(array(

  ':nom' => $nom5,

  ':prenom' => $prenom5,

  ':password' => 8,

  ':mobile' => $mobile5,

  ':email' => $email5,

  ':participant'=> 5,

  ':cle' => $cle,

  ':actif' => 0,

  ':etablissement' =>  $etablissement,

  ':nom_team' => $equipe
));

$sql-> closeCursor();





// adresse MAIL OVH liée à l’hébergement.

$from  = "contact@rentree-etudiants-cmz.fr";

ini_set("SMTP", "smtp.rentree-etudiants-cmz.fr");   // Pour les hébergements mutualisés Windows de OVH

// *** Laisser tel quel

$Subject = " Rentree des etudiants – Inscription Carolo warrior à confirmer ";

$message = 'Bonjour,<br><br>

Merci pour votre inscription. Pour la rendre effective, merci de bien vouloir cliquer sur le lien ci-dessous.<br><br>

http://rentree-etudiants-cmz.fr/validation-warrior.php?nom='.urlencode($nom5).'&cle='.urlencode($cle).'&prenom='.urlencode($prenom5).' <br><br>

Chaque participant doit valider le lien qu’il a reçu sur sa boite mail pour confirmer l’inscription de l’équipe !

Merci de bien vérifier que vos coéquipiers ont validé également le lien !

A très bientôt.


<br><br><br><br>
---------------

Ceci est un mail automatique, Merci de ne pas y répondre.';

$headers  = "MIME-Version: 1.0 \n";

$headers .= "Content-type: text/html; charset=utf8 \n";

$headers .= "From: $from  \n";



$headers .= "X-Priority: 1  \n";

$headers .= "X-MSMail-Priority: High \n";

$CR_Mail = TRUE;

$CR_Mail = @mail ($email5, $Subject, $message, $headers);

// Génération aléatoire d'une clé

$cle = md5(microtime(TRUE)*100000);



$sql = $bdd->prepare ("INSERT INTO warrior ( nom, prenom, mobile, password, email, participant,cle, actif, etablissement, nom_team)

VALUES (:nom, :prenom, :mobile, :password, :email, :participant,:cle, :actif, :etablissement, :nom_team )");

$sql->execute(array(

  ':nom' => $nom6,

  ':prenom' => $prenom6,

  ':password' => 8,

  ':mobile' => $mobile6,

  ':email' => $email6,

  ':participant'=> 6,

  ':cle' => $cle,

  ':actif' => 0,

  ':etablissement' =>  $etablissement,

  ':nom_team' => $equipe
));

$sql-> closeCursor();







// adresse MAIL OVH liée à l’hébergement.

$from  = "contact@rentree-etudiants-cmz.fr";

ini_set("SMTP", "smtp.rentree-etudiants-cmz.fr");   // Pour les hébergements mutualisés Windows de OVH

// *** Laisser tel quel

$Subject = " Rentree des etudiants – Inscription Carolo warrior à confirmer ";

$message = 'Bonjour,<br><br>

Merci pour votre inscription. Pour la rendre effective, merci de bien vouloir cliquer sur le lien ci-dessous.<br><br>

http://rentree-etudiants-cmz.fr/validation-warrior.php?nom='.urlencode($nom6).'&cle='.urlencode($cle).'&prenom='.urlencode($prenom6).' <br><br>

Chaque participant doit valider le lien qu’il a reçu sur sa boite mail pour confirmer l’inscription de l’équipe !

Merci de bien vérifier que vos coéquipiers ont validé également le lien !

A très bientôt.


<br><br><br><br>

---------------

Ceci est un mail automatique, Merci de ne pas y répondre.';

$headers  = "MIME-Version: 1.0 \n";

$headers .= "Content-type: text/html; charset=utf8 \n";

$headers .= "From: $from  \n";



$headers .= "X-Priority: 1  \n";

$headers .= "X-MSMail-Priority: High \n";

$CR_Mail = TRUE;

$CR_Mail = @mail ($email6, $Subject, $message, $headers);



// Génération aléatoire d'une clé

$cle = md5(microtime(TRUE)*100000);



$sql = $bdd->prepare ("INSERT INTO warrior ( nom, prenom, mobile, password, email, participant,cle, actif, etablissement, nom_team)

VALUES (:nom, :prenom, :mobile, :password, :email, :participant,:cle, :actif, :etablissement, :nom_team )");

$sql->execute(array(

  ':nom' => $nom7,

  ':prenom' => $prenom7,

  ':password' => 8,

  ':mobile' => $mobile7,

  ':email' => $email7,

  ':participant'=> 7,

  ':cle' => $cle,

  ':actif' => 0,

  ':etablissement' =>  $etablissement,

  ':nom_team' => $equipe
));

$sql-> closeCursor();







// adresse MAIL OVH liée à l’hébergement.

$from  = "contact@rentree-etudiants-cmz.fr";

ini_set("SMTP", "smtp.rentree-etudiants-cmz.fr");   // Pour les hébergements mutualisés Windows de OVH

// *** Laisser tel quel

$Subject = " Rentree des etudiants – Inscription Carolo warrior à confirmer ";

$message = 'Bonjour,<br><br>

Merci pour votre inscription. Pour la rendre effective, merci de bien vouloir cliquer sur le lien ci-dessous.<br><br>

http://rentree-etudiants-cmz.fr/validation-warrior.php?nom='.urlencode($nom7).'&cle='.urlencode($cle).'&prenom='.urlencode($prenom7).' <br><br>

Chaque participant doit valider le lien qu’il a reçu sur sa boite mail pour confirmer l’inscription de l’équipe !

Merci de bien vérifier que vos coéquipiers ont validé également le lien !

A très bientôt.


<br><br><br><br>

---------------

Ceci est un mail automatique, Merci de ne pas y répondre.';

$headers  = "MIME-Version: 1.0 \n";

$headers .= "Content-type: text/html; charset=utf8 \n";

$headers .= "From: $from  \n";



$headers .= "X-Priority: 1  \n";

$headers .= "X-MSMail-Priority: High \n";

$CR_Mail = TRUE;

$CR_Mail = @mail ($email7, $Subject, $message, $headers);

// Génération aléatoire d'une clé

$cle = md5(microtime(TRUE)*100000);



$sql = $bdd->prepare ("INSERT INTO warrior ( nom, prenom, mobile, password, email, participant,cle, actif, etablissement, nom_team)

VALUES (:nom, :prenom, :mobile, :password, :email, :participant,:cle, :actif, :etablissement, :nom_team )");

$sql->execute(array(

  ':nom' => $nom8,

  ':prenom' => $prenom8,

  ':password' => 8,

  ':mobile' => $mobile8,

  ':email' => $email8,

  ':participant'=> 8,

  ':cle' => $cle,

  ':actif' => 0,

  ':etablissement' =>  $etablissement,

  ':nom_team' => $equipe
));

$sql-> closeCursor();





// adresse MAIL OVH liée à l’hébergement.

$from  = "contact@rentree-etudiants-cmz.fr";

ini_set("SMTP", "smtp.rentree-etudiants-cmz.fr");   // Pour les hébergements mutualisés Windows de OVH

// *** Laisser tel quel

$Subject = " Rentree des etudiants – Inscription Carolo warrior à confirmer ";

$message = 'Bonjour,<br><br>

Merci pour votre inscription. Pour la rendre effective, merci de bien vouloir cliquer sur le lien ci-dessous.<br><br>

http://rentree-etudiants-cmz.fr/validation-warrior.php?nom='.urlencode($nom8).'&cle='.urlencode($cle).'&prenom='.urlencode($prenom8).' <br><br>

Chaque participant doit valider le lien qu’il a reçu sur sa boite mail pour confirmer l’inscription de l’équipe !

Merci de bien vérifier que vos coéquipiers ont validé également le lien !

A très bientôt.


<br><br><br><br>
---------------

Ceci est un mail automatique, Merci de ne pas y répondre.';

$headers  = "MIME-Version: 1.0 \n";

$headers .= "Content-type: text/html; charset=utf8 \n";

$headers .= "From: $from  \n";



$headers .= "X-Priority: 1  \n";

$headers .= "X-MSMail-Priority: High \n";

$CR_Mail = TRUE;

$CR_Mail = @mail ($email8, $Subject, $message, $headers);



header('Location: duplicate-validation.php');

}}

}else{

  header('Location: duplicate-mailfail-different.php');
}



?>

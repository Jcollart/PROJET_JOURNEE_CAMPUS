<?php
include 'connectbdd.php';

$etablissement = isset($_POST['etablissement']) ? $_POST['etablissement'] : NULL;
$equipe = isset($_POST['equipe']) ? $_POST['equipe'] : NULL;
$password = isset($_POST['password']) ? $_POST['password'] : NULL;
$nom = isset($_POST['nom']) ? $_POST['nom'] : NULL;
$prenom = isset($_POST['prenom']) ? $_POST['prenom'] : NULL;
$mobile = isset($_POST['mobile']) ? $_POST['mobile'] : NULL;
$email = isset($_POST['email']) ? $_POST['email'] : NULL;
$email11 = isset($_POST['email11'])  ? $_POST['email11'] : NULL;
$nom2 = isset($_POST['nom2']) ? $_POST['nom2'] : NULL;
$prenom2 = isset($_POST['prenom2']) ? $_POST['prenom2'] : NULL;
$mobile2 = isset($_POST['mobile2']) ? $_POST['mobile2'] : NULL;
$email2 = isset($_POST['email2']) ? $_POST['email2'] : NULL;
$email21 = isset($_POST['email21'])  ? $_POST['email21'] : NULL;
$nom3 = isset($_POST['nom3']) ? $_POST['nom3'] : NULL;
$prenom3 = isset($_POST['prenom3']) ? $_POST['prenom3'] : NULL;
$mobile3 = isset($_POST['mobile3']) ? $_POST['mobile3'] : NULL;
$email3 = isset($_POST['email3']) ? $_POST['email3'] : NULL;
$email31 = isset($_POST['email31'])  ? $_POST['email31'] : NULL;
$nom4 = isset($_POST['nom4']) ? $_POST['nom4'] : NULL;
$prenom4 = isset($_POST['prenom4']) ? $_POST['prenom4'] : NULL;
$mobile4 = isset($_POST['mobile4']) ? $_POST['mobile4'] : NULL;
$email4 = isset($_POST['email4']) ? $_POST['email4'] : NULL;
$email41 = isset($_POST['email41'])  ? $_POST['email41'] : NULL;
$nom5 = isset($_POST['nom5']) ? $_POST['nom5'] : NULL;
$prenom5 = isset($_POST['prenom5']) ? $_POST['prenom5'] : NULL;
$mobile5 = isset($_POST['mobile5']) ? $_POST['mobile5'] : NULL;
$email5 = isset($_POST['email5']) ? $_POST['email5'] : NULL;
$email51 = isset($_POST['email51'])  ? $_POST['email51'] : NULL;


if ((($_POST['email']) == ($_POST['email11'])) And (($_POST['email2']) == ($_POST['email21'])) And (($_POST['email3']) == ($_POST['email31'])) And (($_POST['email4']) == ($_POST['email41'])) And (($_POST['email5']) == ($_POST['email51']))){

$req = $bdd->prepare("SELECT nom, prenom FROM etudiant WHERE nom = :nom AND prenom = :prenom");

$req->execute(array(

    'nom' => $nom,
   'prenom' => $prenom
   ));

$resultat = $req->fetch();

$req-> closeCursor();



 $req2 = $bdd->prepare("SELECT nom,prenom FROM etudiant WHERE nom = :nom AND prenom = :prenom");

 $req2->execute(array(

     'nom' => $nom2,
    'prenom' => $prenom2
   ));

 $resultat2 = $req2->fetch();

 $req2-> closeCursor();





  $req3 = $bdd->prepare("SELECT nom, prenom FROM etudiant WHERE nom = :nom AND prenom = :prenom");

  $req3->execute(array(

      'nom' => $nom3,
     'prenom' => $prenom3 ));

  $resultat3 = $req3->fetch();

  $req3-> closeCursor();





   $req4 = $bdd->prepare("SELECT nom, prenom FROM etudiant WHERE nom = :nom AND prenom = :prenom");

   $req4->execute(array(

       'nom' => $nom4,
      'prenom' => $prenom4
    ));

   $resultat4 = $req4->fetch();

   $req4-> closeCursor();





    $req5 = $bdd->prepare("SELECT nom, prenom FROM etudiant WHERE nom = :nom AND prenom = :prenom");

    $req5->execute(array(

        'nom' => $nom5,
       'prenom' => $prenom5
       ));

    $resultat5 = $req5->fetch();

    $req5-> closeCursor();



  // Vérification de doublon
    if (
       (strtolower($nom) == strtolower($resultat['nom']) && strtolower($prenom) == strtolower($resultat['prenom'])) ||
     (strtolower($nom2) == strtolower($resultat2['nom']) && strtolower($prenom2) == strtolower($resultat2['prenom'])) ||
      (strtolower($nom3) == strtolower($resultat3['nom']) && strtolower($prenom3) == strtolower($resultat3['prenom'])) ||
      (strtolower($nom4) == strtolower($resultat4['nom']) && strtolower($prenom4) == strtolower($resultat4['prenom'])) ||
      (strtolower($nom5) == strtolower($resultat5['nom']) && strtolower($prenom5) == strtolower($resultat5['prenom']))
    )
      {
        header('Location: duplicate-erreur-inscription.php');
    }
   else {
       $req2 = $bdd->prepare("SELECT nom_team FROM etudiant WHERE nom_team = :nom_team ");
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

$sql = $bdd->prepare ("INSERT INTO etudiant ( nom, prenom, password, mobile, email, participant, cle, actif, etablissement, nom_team)
VALUES (:nom, :prenom, :password, :mobile, :email, :participant, :cle, :actif, :etablissement, :nom_team)");
$sql->execute(array(
  ':nom' => $nom,
  ':prenom' => $prenom,
  ':password' => $password,
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
ini_set("SMTP", "smtp.rentree-etudiants-cmz.fr");   
$Subject = "Rentree des etudiants – Inscription Carolo express à confirmer ";
$message = 'Bonjour,<br><br>

Merci pour votre inscription. Pour la rendre effective, merci de bien vouloir cliquer sur le lien ci-dessous.<br><br>
http://rentree-etudiants-cmz.fr/validation.php?nom='.urlencode($nom).'&cle='.urlencode($cle).'&prenom='.urlencode($prenom).'<br><br>
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

$sql = $bdd->prepare ("INSERT INTO etudiant ( nom, prenom, password, mobile, email, participant, cle, actif, etablissement, nom_team)
VALUES (:nom, :prenom, :password, :mobile, :email, :participant, :cle, :actif, :etablissement, :nom_team )");
$sql->execute(array(
  ':nom' => $nom2,
  ':prenom' => $prenom2,
  ':password' => $password,
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
$Subject = "Rentree des etudiants – Inscription Carolo express à confirmer ";
$message = 'Bonjour,<br><br>

Merci pour votre inscription. Pour la rendre effective, merci de bien vouloir cliquer sur le lien ci-dessous.<br><br>

http://rentree-etudiants-cmz.fr/validation.php?nom='.urlencode($nom2).'&cle='.urlencode($cle).'&prenom='.urlencode($prenom2).'<br><br>

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

$sql = $bdd->prepare ("INSERT INTO etudiant ( nom, prenom, password, mobile, email, participant, cle, actif, etablissement, nom_team)
VALUES (:nom, :prenom, :password, :mobile, :email, :participant, :cle, :actif, :etablissement, :nom_team)");
$sql->execute(array(
  ':nom' => $nom3,
  ':prenom' => $prenom3,
  ':password' => $password,
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
$Subject = "Rentree des etudiants – Inscription Carolo express à confirmer ";
$message = 'Bonjour,<br><br>

Merci pour votre inscription. Pour la rendre effective, merci de bien vouloir cliquer sur le lien ci-dessous.<br><br>

http://rentree-etudiants-cmz.fr/validation.php?nom='.urlencode($nom3).'&cle='.urlencode($cle).'&prenom='.urlencode($prenom3).'<br><br>

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

$sql = $bdd->prepare ("INSERT INTO etudiant ( nom, prenom, password, mobile, email, participant, cle, actif, etablissement, nom_team)
VALUES (:nom, :prenom, :password, :mobile, :email, :participant, :cle, :actif, :etablissement, :nom_team)");
$sql->execute(array(
  ':nom' => $nom4,
  ':prenom' => $prenom4,
  ':password' => $password,
  ':mobile' => $mobile4,
  ':email' => $email4,
  ':participant'=> 4,
  ':cle' => $cle,
  ':actif' => 0,
  ':etablissement' =>  $etablissement,
  ':nom_team' => $equipe

));
$sql-> closeCursor();



/// adresse MAIL OVH liée à l’hébergement.
$from  = "contact@rentree-etudiants-cmz.fr";
ini_set("SMTP", "smtp.rentree-etudiants-cmz.fr");   // Pour les hébergements mutualisés Windows de OVH
// *** Laisser tel quel
$Subject = "Rentree des etudiants – Inscription Carolo express à confirmer ";
$message = 'Bonjour,<br><br>

Merci pour votre inscription. Pour la rendre effective, merci de bien vouloir cliquer sur le lien ci-dessous.<br><br>

http://rentree-etudiants-cmz.fr/validation.php?nom='.urlencode($nom4).'&cle='.urlencode($cle).'&prenom='.urlencode($prenom4).'<br><br>

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

$sql = $bdd->prepare ("INSERT INTO etudiant ( nom, prenom, password, mobile, email, participant, cle, actif, etablissement, nom_team)
VALUES (:nom, :prenom, :password, :mobile, :email, :participant, :cle, :actif, :etablissement, :nom_team)");
$sql->execute(array(
  ':nom' => $nom5,
  ':prenom' => $prenom5,
  ':password' => $password,
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
$Subject = "Rentree des etudiants – Inscription Carolo express à confirmer ";
$message = 'Bonjour,<br><br>

Merci pour votre inscription. Pour la rendre effective, merci de bien vouloir cliquer sur le lien ci-dessous.<br><br>

http://rentree-etudiants-cmz.fr/validation.php?nom='.urlencode($nom5).'&cle='.urlencode($cle).'&prenom='.urlencode($prenom5).'<br><br>

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

header('Location: duplicate-validation.php');

}}

}else{

  header('Location: duplicate-mailfail-different.php');
}

?>

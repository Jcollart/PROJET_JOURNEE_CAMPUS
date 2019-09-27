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


if ((($_POST['email']) == ($_POST['email11'])) And (($_POST['email2']) == ($_POST['email21']))){


$req = $bdd->prepare("SELECT nom, prenom FROM cuisine WHERE nom = :nom AND prenom = :prenom");

$req->execute(array(

    'nom' => $nom,
    'prenom' => $prenom
  ));

$resultat = $req->fetch();

$req-> closeCursor();



 $req2 = $bdd->prepare("SELECT nom, prenom FROM cuisine WHERE nom = :nom AND prenom = :prenom");

 $req2->execute(array(

     'nom' => $nom2,
     'prenom' => $prenom2
    ));

 $resultat2 = $req2->fetch();

 $req2-> closeCursor();



 if (
  (strtolower($nom) == strtolower($resultat['nom']) && strtolower($prenom) == strtolower($resultat['prenom'])) ||
  (strtolower($nom2) == strtolower($resultat2['nom']) && strtolower($prenom2) == strtolower($resultat2['prenom']))
  )
  {

      header('Location: duplicate-erreur-inscription.php');

  }

 else {

   $req2 = $bdd->prepare("SELECT nom_team FROM cuisine WHERE nom_team = :nom_team ");

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



$sql = $bdd->prepare ("INSERT INTO cuisine ( nom, prenom, mobile, password, email, participant,cle, actif, etablissement, nom_team)

VALUES (:nom, :prenom, :mobile, :password, :email, :participant,:cle, :actif, :etablissement, :nom_team)");

$sql->execute(array(

  ':nom' => $nom,

  ':prenom' => $prenom,

  ':mobile' => $mobile,

  ':password' => 0,

  ':email' => $email,

  ':participant'=> 1,

  ':cle' => $cle,

  ':actif' => 0,

  ':etablissement' =>  $etablissement,

  ':nom_team' => $equipe,

  ));

$sql-> closeCursor();



// adresse MAIL OVH liée à l’hébergement.

$from  = "contact@rentree-etudiants-cmz.fr";

ini_set("SMTP", "smtp.rentree-etudiants-cmz.fr");   // Pour les hébergements mutualisés Windows de OVH

// *** Laisser tel quel

$Subject = "Rentree des etudiants – Inscription Concours de cuisine à confirmer";

$message = 'Bonjour,<br><br>

Merci pour votre inscription. Pour la rendre effective, merci de bien vouloir cliquer sur le lien ci-dessous.<br><br>

http://rentree-etudiants-cmz.fr/validation-cuisine.php?nom='.urlencode($nom).'&cle='.urlencode($cle).'&prenom='.urlencode($prenom).'<br><br>

Chaque participant doit valider le lien qu’il a reçu sur sa boite mail pour confirmer l’inscription de l’équipe !

Merci de bien vérifier que vos coéquipiers ont validé également le lien !

A très bientôt.
<br><br>
<br>

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



$sql = $bdd->prepare ("INSERT INTO cuisine ( nom, prenom, mobile, password, email, participant, cle, actif, etablissement, nom_team)

VALUES (:nom, :prenom, :mobile, :password, :email, :participant, :cle, :actif, :etablissement, :nom_team)");

$sql->execute(array(

  ':nom' => $nom2,

  ':prenom' => $prenom2,

  ':password' => 0,

  ':mobile' => $mobile2,

  ':email' => $email2,

  ':participant'=> 2,

  ':cle' => $cle,

  ':actif' => 0,

  ':etablissement' =>  $etablissement,

  ':nom_team' => $equipe,


));

$sql-> closeCursor();





// adresse MAIL OVH liée à l’hébergement.

$from  = "contact@rentree-etudiants-cmz.fr";

ini_set("SMTP", "smtp.rentree-etudiants-cmz.fr");   // Pour les hébergements mutualisés Windows de OVH

// *** Laisser tel quel

$Subject = "Rentree des etudiants – Inscription Concours de cuisine à confirmer";

$message = 'Bonjour,<br><br>

Merci pour votre inscription. Pour la rendre effective, merci de bien vouloir cliquer sur le lien ci-dessous.<br><br>

http://rentree-etudiants-cmz.fr/validation-cuisine.php?nom='.urlencode($nom2).'&cle='.urlencode($cle).'&prenom='.urlencode($prenom2).'<br><br>

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



header('Location: duplicate-validation.php');

}}

}else{

  header('Location: duplicate-mailfail-different.php');
}

 ?>

<?php
include 'connectbdd.php';


$etablissement = isset($_POST['etablissement']) ? $_POST['etablissement'] : NULL;
$equipe = isset($_POST['equipe']) ? $_POST['equipe'] : NULL;

$nom = isset($_POST['nom']) ? $_POST['nom'] : NULL;
$prenom = isset($_POST['prenom']) ? $_POST['prenom'] : NULL;
$mobile = isset($_POST['mobile']) ? $_POST['mobile'] : NULL;
$email = isset($_POST['email']) ? $_POST['email'] : NULL;

$nom2 = isset($_POST['nom2']) ? $_POST['nom2'] : NULL;
$prenom2 = isset($_POST['prenom2']) ? $_POST['prenom2'] : NULL;
$mobile2 = isset($_POST['mobile2']) ? $_POST['mobile2'] : NULL;
$email2 = isset($_POST['email2']) ? $_POST['email2'] : NULL;



$typeform = "CUISINE";

// Génération aléatoire d'une clé
$cle = md5(microtime(TRUE)*100000);

$sql = $bdd->prepare ("INSERT INTO etudiant ( nom, prenom, mobile, password, email, participant,cle, typeform, actif, etablissement, nom_team)
VALUES (:nom, :prenom, :mobile, :password, :email, :participant,:cle, :typeform, :actif, :etablissement, :nom_team )");
$sql->execute(array(
  ':nom' => $nom,
  ':prenom' => $prenom,
  ':mobile' => $mobile,
  ':password' => 0,
  ':email' => $email,
  ':participant'=> 1,
  ':cle' => $cle,
  ':typeform' => $typeform,
  ':actif' => 0,
  ':etablissement' =>  $etablissement,
  ':nom_team' => $equipe
));
$sql-> closeCursor();

// Préparation du mail contenant le lien d'activation
$destinataire = $email;
$sujet = "Valider votre inscription" ;
$entete = "From: jejecollart@hotmail.com" ;

// Le lien d'activation est composé du nom(nom) et de la clé(cle)
$message = 'Bienvenue a la validation de linscription,

Pour valider votre inscription, veuillez cliquer sur le lien ci dessous
ou copier/coller dans votre navigateur internet.

http://127.0.0.1/html/Projet_journee_campus/validation.php?nom='.urlencode($nom).'&cle='.urlencode($cle).'


---------------
Ceci est un mail automatique, Merci de ne pas y répondre.';

// Envoi du mail
mail($destinataire, $sujet, $message, $entete) ;

// Génération aléatoire d'une clé
$cle = md5(microtime(TRUE)*100000);

$sql = $bdd->prepare ("INSERT INTO etudiant ( nom, prenom, mobile, password, email, participant,cle, typeform, actif, etablissement, nom_team)
VALUES (:nom, :prenom, :mobile, :password, :email, :participant,:cle, :typeform, :actif, :etablissement, :nom_team )");
$sql->execute(array(
  ':nom' => $nom2,
  ':prenom' => $prenom2,
  ':password' => 0,
  ':mobile' => $mobile2,
  ':email' => $email2,
  ':participant'=> 2,
  ':cle' => $cle,
  ':typeform' => $typeform,
  ':actif' => 0,
  ':etablissement' =>  $etablissement,
  ':nom_team' => $equipe

));
$sql-> closeCursor();


// Préparation du mail contenant le lien d'activation
$destinataire = $email2;
$sujet = "Valider votre inscription" ;
$entete = "From: jejecollart@photmail.com" ;

// Le lien d'activation est composé du nom(nom) et de la clé(cle)
$message = 'Bienvenue a la validation de linscription,

Pour valider votre inscription, veuillez cliquer sur le lien ci dessous
ou copier/coller dans votre navigateur internet.

http://127.0.0.1/html/Projet_journee_campus/validation.php?nom='.urlencode($nom).'&cle='.urlencode($cle).'


---------------
Ceci est un mail automatique, Merci de ne pas y répondre.';

// Envoi du mail
mail($destinataire, $sujet, $message, $entete) ;



 ?>
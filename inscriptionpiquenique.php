<?php
include 'connectbdd.php';


$etablissement = isset($_POST['etablissement']) ? $_POST['etablissement'] : NULL;


$nom = isset($_POST['nom']) ? $_POST['nom'] : NULL;
$prenom = isset($_POST['prenom']) ? $_POST['prenom'] : NULL;
$mobile = isset($_POST['mobile']) ? $_POST['mobile'] : NULL;
$email = isset($_POST['email']) ? $_POST['email'] : NULL;

$typeform = "PIQUE-NIQUE";

// Génération aléatoire d'une clé
$cle = md5(microtime(TRUE)*100000);

$sql = $bdd->prepare ("INSERT INTO etudiant ( nom, prenom, mobile, password, cle, email, participant, typeform, etablissement, actif, nom_team)
VALUES (:nom, :prenom, :mobile, :password, :cle, :email, :participant, :typeform, :etablissement, :actif, :nom_team)");
$sql->execute(array(
  ':nom' => $nom,
  ':prenom' => $prenom,
  ':mobile' => $mobile,
  ':password' => 0,
  ':participant'=> 1,
  ':email' => $email,
  ':cle' => $cle,
  ':typeform' => $typeform,
  ':etablissement' =>  $etablissement,
  ':actif' => 0,
  ':nom_team' => 1
  ));

/* $sql1 = $bdd->prepare(" SELECT   COUNT(*) AS ( nom, prenom, mobile, password, participant, email, cle, typeform, etablissement, actif, nom_team)
FROM     etudiant
GROUP BY (:nom, :prenom, :mobile, :password, :participant, :email, :cle, :typeform, :etablissement, :actif, :nom_team)
HAVING  () COUNT(*) > 1)");
$sql1->execute(array(
    ':nom' => $nom,
    ':prenom' => $prenom,
    ':mobile' => $mobile,
    ':password' => 0,
    ':participant'=> 1,
    ':email' => $email,
    ':cle' => $cle,
    ':typeform' => $typeform,
    ':etablissement' =>  $etablissement,
    ':actif' => 0,
    ':nom_team' => 1
    ));*/
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

?>
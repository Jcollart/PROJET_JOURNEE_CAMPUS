<?php
include 'connectbdd.php';


$etablissement = isset($_POST['etablissement']) ? $_POST['etablissement'] : NULL;
$equipe = isset($_POST['equipe']) ? $_POST['equipe'] : NULL;
$password = isset($_POST['password']) ? $_POST['password'] : NULL;

$nom = isset($_POST['nom']) ? $_POST['nom'] : NULL;
$prenom = isset($_POST['prenom']) ? $_POST['prenom'] : NULL;
$mobile = isset($_POST['mobile']) ? $_POST['mobile'] : NULL;
$email = isset($_POST['email']) ? $_POST['email'] : NULL;

$nom2 = isset($_POST['nom2']) ? $_POST['nom2'] : NULL;
$prenom2 = isset($_POST['prenom2']) ? $_POST['prenom2'] : NULL;
$mobile2 = isset($_POST['mobile2']) ? $_POST['mobile2'] : NULL;
$email2 = isset($_POST['email2']) ? $_POST['email2'] : NULL;

$nom3 = isset($_POST['nom3']) ? $_POST['nom3'] : NULL;
$prenom3 = isset($_POST['prenom3']) ? $_POST['prenom3'] : NULL;
$mobile3 = isset($_POST['mobile3']) ? $_POST['mobile3'] : NULL;
$email3 = isset($_POST['email3']) ? $_POST['email3'] : NULL;

$nom4 = isset($_POST['nom4']) ? $_POST['nom4'] : NULL;
$prenom4 = isset($_POST['prenom4']) ? $_POST['prenom4'] : NULL;
$mobile4 = isset($_POST['mobile4']) ? $_POST['mobile4'] : NULL;
$email4 = isset($_POST['email4']) ? $_POST['email4'] : NULL;

$nom5 = isset($_POST['nom5']) ? $_POST['nom5'] : NULL;
$prenom5 = isset($_POST['prenom5']) ? $_POST['prenom5'] : NULL;
$mobile5 = isset($_POST['mobile5']) ? $_POST['mobile5'] : NULL;
$email5 = isset($_POST['email5']) ? $_POST['email5'] : NULL;

$typeform = "EXPRESS";

// Génération aléatoire d'une clé
$cle = md5(microtime(TRUE)*100000);

$sql = $bdd->prepare ("INSERT INTO etudiant ( nom, prenom, password, mobile, email, participant,cle, typeform, actif, etablissement, nom_team)
VALUES (:nom, :prenom, :password, :mobile, :email, :participant,:cle, :typeform, :actif, :etablissement, :nom_team )");
$sql->execute(array(
  ':nom' => $nom,
  ':prenom' => $prenom,
  ':password' => $password,
  ':mobile' => $mobile,
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
$entete = "From: contact@petitromain.fr" ;

// Le lien d'activation est composé du nom(nom) et de la clé(cle)
$message = 'Bienvenue a la validation de linscription,

Pour valider votre inscription, veuillez cliquer sur le lien ci dessous
ou copier/coller dans votre navigateur internet.

http://ardenniais.fr/validation.php?nom='.urlencode($nom).'&cle='.urlencode($cle).'


---------------
Ceci est un mail automatique, Merci de ne pas y répondre.';

// Envoi du mail
mail($destinataire, $sujet, $message, $entete) ;

// Génération aléatoire d'une clé
$cle = md5(microtime(TRUE)*100000);

$sql = $bdd->prepare ("INSERT INTO etudiant ( nom, prenom, password, mobile, email, participant,cle, typeform, actif, etablissement, nom_team)
VALUES (:nom, :prenom, :password, :mobile, :email, :participant,:cle, :typeform, :actif, :etablissement, :nom_team )");
$sql->execute(array(
  ':nom' => $nom2,
  ':prenom' => $prenom2,
  ':password' => $password,
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
$entete = "From: contact@petitromain.fr" ;

// Le lien d'activation est composé du nom(nom) et de la clé(cle)
$message = 'Bienvenue a la validation de linscription,

Pour valider votre inscription, veuillez cliquer sur le lien ci dessous
ou copier/coller dans votre navigateur internet.

http://ardenniais.fr/validation.php?nom='.urlencode($nom).'&cle='.urlencode($cle).'


---------------
Ceci est un mail automatique, Merci de ne pas y répondre.';

// Envoi du mail
mail($destinataire, $sujet, $message, $entete) ;


// Génération aléatoire d'une clé
$cle = md5(microtime(TRUE)*100000);

$sql = $bdd->prepare ("INSERT INTO etudiant ( nom, prenom, password, mobile, email, participant,cle, typeform, actif, etablissement, nom_team)
VALUES (:nom, :prenom, :password, :mobile, :email, :participant,:cle, :typeform, :actif, :etablissement, :nom_team )");
$sql->execute(array(
  ':nom' => $nom3,
  ':prenom' => $prenom3,
  ':password' => $password,
  ':mobile' => $mobile3,
  ':email' => $email3,
  ':participant'=> 3,
  ':cle' => $cle,
  ':typeform' => $typeform,
  ':actif' => 0,
  ':etablissement' =>  $etablissement,
  ':nom_team' => $equipe
));
$sql-> closeCursor();



// Préparation du mail contenant le lien d'activation
$destinataire = $email3;
$sujet = "Valider votre inscription" ;
$entete = "From: contact@petitromain.fr" ;

// Le lien d'activation est composé du nom(nom) et de la clé(cle)
$message = 'Bienvenue a la validation de linscription,

Pour valider votre inscription, veuillez cliquer sur le lien ci dessous
ou copier/coller dans votre navigateur internet.

http://ardenniais.fr/validation.php?nom='.urlencode($nom).'&cle='.urlencode($cle).'


---------------
Ceci est un mail automatique, Merci de ne pas y répondre.';

// Envoi du mail
mail($destinataire, $sujet, $message, $entete) ;


// Génération aléatoire d'une clé
$cle = md5(microtime(TRUE)*100000);

$sql = $bdd->prepare ("INSERT INTO etudiant ( nom, prenom, password, mobile, email, participant,cle, typeform, actif, etablissement, nom_team)
VALUES (:nom, :prenom, :password, :mobile, :email, :participant,:cle, :typeform, :actif, :etablissement, :nom_team )");
$sql->execute(array(
  ':nom' => $nom4,
  ':prenom' => $prenom4,
  ':password' => $password,
  ':mobile' => $mobile4,
  ':email' => $email4,
  ':participant'=> 4,
  ':cle' => $cle,
  ':typeform' => $typeform,
  ':actif' => 0,
  ':etablissement' =>  $etablissement,
  ':nom_team' => $equipe
));
$sql-> closeCursor();



// Préparation du mail contenant le lien d'activation
$destinataire = $email4;
$sujet = "Valider votre inscription" ;
$entete = "From: contact@petitromain.fr" ;

// Le lien d'activation est composé du nom(nom) et de la clé(cle)
$message = 'Bienvenue a la validation de linscription,

Pour valider votre inscription, veuillez cliquer sur le lien ci dessous
ou copier/coller dans votre navigateur internet.

http://ardenniais.fr/validation.php?nom='.urlencode($nom).'&cle='.urlencode($cle).'


---------------
Ceci est un mail automatique, Merci de ne pas y répondre.';

// Envoi du mail
mail($destinataire, $sujet, $message, $entete) ;
// Génération aléatoire d'une clé
$cle = md5(microtime(TRUE)*100000);

$sql = $bdd->prepare ("INSERT INTO etudiant ( nom, prenom, password, mobile, email, participant,cle, typeform, actif, etablissement, nom_team)
VALUES (:nom, :prenom, :password, :mobile, :email, :participant,:cle, :typeform, :actif, :etablissement, :nom_team )");
$sql->execute(array(
  ':nom' => $nom5,
  ':prenom' => $prenom5,
  ':password' => $password,
  ':mobile' => $mobile5,
  ':email' => $email5,
  ':participant'=> 5,
  ':cle' => $cle,
  ':typeform' => $typeform,
  ':actif' => 0,
  ':etablissement' =>  $etablissement,
  ':nom_team' => $equipe
));
$sql-> closeCursor();


// Préparation du mail contenant le lien d'activation
$destinataire = $email5;
$sujet = "Valider votre inscription" ;
$entete = "From: contact@petitromain.fr" ;

// Le lien d'activation est composé du nom(nom) et de la clé(cle)
$message = 'Bienvenue a la validation de linscription,

Pour valider votre inscription, veuillez cliquer sur le lien ci dessous
ou copier/coller dans votre navigateur internet.

http://ardenniais.fr/validation.php?nom='.urlencode($nom).'&cle='.urlencode($cle).'


---------------
Ceci est un mail automatique, Merci de ne pas y répondre.';

// Envoi du mail
mail($destinataire, $sujet, $message, $entete) ;



?>

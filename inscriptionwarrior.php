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

$nom6 = isset($_POST['nom6']) ? $_POST['nom6'] : NULL;
$prenom6 = isset($_POST['prenom6']) ? $_POST['prenom6'] : NULL;
$mobile6 = isset($_POST['mobile6']) ? $_POST['mobile6'] : NULL;
$email6 = isset($_POST['email6']) ? $_POST['email6'] : NULL;

$nom7 = isset($_POST['nom7']) ? $_POST['nom7'] : NULL;
$prenom7 = isset($_POST['prenom7']) ? $_POST['prenom7'] : NULL;
$mobile7 = isset($_POST['mobile7']) ? $_POST['mobile7'] : NULL;
$email7 = isset($_POST['email7']) ? $_POST['email7'] : NULL;

$nom8 = isset($_POST['nom8']) ? $_POST['nom8'] : NULL;
$prenom8 = isset($_POST['prenom8']) ? $_POST['prenom8'] : NULL;
$mobile8 = isset($_POST['mobile8']) ? $_POST['mobile8'] : NULL;
$email8 = isset($_POST['email8']) ? $_POST['email8'] : NULL;

$typeform = "warrior";

// Génération aléatoire d'une clé
$cle = md5(microtime(TRUE)*100000);

$sql = $bdd->prepare ("INSERT INTO etudiant ( nom, prenom, password, mobile, email, participant,cle, typeform, actif, etablissement, nom_team)
VALUES (:nom, :prenom, :password, :mobile, :email, :participant,:cle, :typeform, :actif, :etablissement, :nom_team )");
$sql->execute(array(
  ':nom' => $nom,
  ':prenom' => $prenom,
 /* ':password' => 8,*/
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

$sql = $bdd->prepare ("INSERT INTO etudiant ( nom, prenom, password, mobile, email, participant,cle, typeform, actif, etablissement, nom_team)
VALUES (:nom, :prenom, :password, :mobile, :email, :participant,:cle, :typeform, :actif, :etablissement, :nom_team )");
$sql->execute(array(
  ':nom' => $nom2,
  ':prenom' => $prenom2,
  ':password' => 8,
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

$sql = $bdd->prepare ("INSERT INTO etudiant ( nom, prenom, password, mobile, email, participant,cle, typeform, actif, etablissement, nom_team)
VALUES (:nom, :prenom, :password, :mobile, :email, :participant,:cle, :typeform, :actif, :etablissement, :nom_team )");
$sql->execute(array(
  ':nom' => $nom3,
  ':prenom' => $prenom3,
  ':password' => 8,
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

$sql = $bdd->prepare ("INSERT INTO etudiant ( nom, prenom, password, mobile, email, participant,cle, typeform, actif, etablissement, nom_team)
VALUES (:nom, :prenom, :password, :mobile, :email, :participant,:cle, :typeform, :actif, :etablissement, :nom_team )");
$sql->execute(array(
  ':nom' => $nom4,
  ':prenom' => $prenom4,
  ':password' => 8,
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

$sql = $bdd->prepare ("INSERT INTO etudiant ( nom, prenom, password, mobile, email, participant,cle, typeform, actif, etablissement, nom_team)
VALUES (:nom, :prenom, :password, :mobile, :email, :participant,:cle, :typeform, :actif, :etablissement, :nom_team )");
$sql->execute(array(
  ':nom' => $nom5,
  ':prenom' => $prenom5,
  ':password' => 8,
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

$sql = $bdd->prepare ("INSERT INTO etudiant ( nom, prenom, password, mobile, email, participant,cle, typeform, actif, etablissement, nom_team)
VALUES (:nom, :prenom, :password, :mobile, :email, :participant,:cle, :typeform, :actif, :etablissement, :nom_team )");
$sql->execute(array(
  ':nom' => $nom6,
  ':prenom' => $prenom6,
  ':password' => 8,
  ':mobile' => $mobile6,
  ':email' => $email6,
  ':participant'=> 6,
  ':cle' => $cle,
  ':typeform' => $typeform,
  ':actif' => 0,
  ':etablissement' =>  $etablissement,
  ':nom_team' => $equipe
));
$sql-> closeCursor();



// Préparation du mail contenant le lien d'activation
$destinataire = $email6;
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

$sql = $bdd->prepare ("INSERT INTO etudiant ( nom, prenom, password, mobile, email, participant,cle, typeform, actif, etablissement, nom_team)
VALUES (:nom, :prenom, :password, :mobile, :email, :participant,:cle, :typeform, :actif, :etablissement, :nom_team )");
$sql->execute(array(
  ':nom' => $nom7,
  ':prenom' => $prenom7,
  ':password' => 8,
  ':mobile' => $mobile7,
  ':email' => $email7,
  ':participant'=> 7,
  ':cle' => $cle,
  ':typeform' => $typeform,
  ':actif' => 0,
  ':etablissement' =>  $etablissement,
  ':nom_team' => $equipe
));
$sql-> closeCursor();



// Préparation du mail contenant le lien d'activation
$destinataire = $email7;
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

$sql = $bdd->prepare ("INSERT INTO etudiant ( nom, prenom, password, mobile, email, participant,cle, typeform, actif, etablissement, nom_team)
VALUES (:nom, :prenom, :password, :mobile, :email, :participant,:cle, :typeform, :actif, :etablissement, :nom_team )");
$sql->execute(array(
  ':nom' => $nom8,
  ':prenom' => $prenom8,
  ':password' => 8,
  ':mobile' => $mobile8,
  ':email' => $email8,
  ':participant'=> 8,
  ':cle' => $cle,
  ':typeform' => $typeform,
  ':actif' => 0,
  ':etablissement' =>  $etablissement,
  ':nom_team' => $equipe
));
$sql-> closeCursor();


// Préparation du mail contenant le lien d'activation
$destinataire = $email8;
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

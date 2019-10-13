<?php
include 'connectbdd.php';

$etablissement = isset($_POST['etablissement']) ? $_POST['etablissement'] : NULL;
$nom = isset($_POST['nom']) ? $_POST['nom'] : NULL;
$prenom = isset($_POST['prenom']) ? $_POST['prenom'] : NULL;
$mobile = isset($_POST['mobile']) ? $_POST['mobile'] : NULL;
$email = isset($_POST['email']) ? $_POST['email'] : NULL;
$email11 = isset($_POST['email11'])  ? $_POST['email11'] : NULL;
if (($_POST['email']) == ($_POST['email11'])){
 
$req = $bdd->prepare("SELECT nom, prenom FROM piquenique WHERE nom = :nom AND prenom =:prenom");
$req->execute(array(
    'nom' => $nom,
    'prenom' => $prenom
  ));
$resultat = $req->fetch();
$req-> closeCursor();

// Verification si doublon 
if (strtolower($nom) == strtolower($resultat['nom']) && strtolower($prenom) == strtolower($resultat['prenom']))
 {
     header('Location: duplicate-erreur-picnic.php');
 }
else {

// Génération aléatoire d'une clé
$cle = md5(microtime(TRUE)*100000);

// Envoi des données dans la base de donnée
$sql = $bdd->prepare ("INSERT INTO piquenique ( nom, prenom, mobile, email, cle, actif, etablissement)
VALUES (:nom, :prenom, :mobile, :email, :cle, :actif, :etablissement )");
$sql->execute(array(
  ':nom' => $nom,
  ':prenom' => $prenom,
  ':mobile' => $mobile,
  ':email' => $email,
  ':cle' => $cle,
  ':etablissement' => $etablissement,
  ':actif' => 0
  
  ));
$sql-> closeCursor();

// Envoi du mail avec lien de confirmation
$from  = "contact@rentree-etudiants-cmz.fr";
ini_set("SMTP", "smtp.rentree-etudiants-cmz.fr");
$Subject = "Rentree des etudiants – Inscription Pique-Nique à confirmer ";
$message = 'Bonjour,<br><br>
Merci pour votre inscription. Pour la rendre effective, merci de bien vouloir cliquer sur le lien ci-dessous<br><br>
http://rentree-etudiants-cmz.fr/validation-picnic.php?nom='.urlencode($nom).'&cle='.urlencode($cle).'&prenom='.urlencode($prenom).'
<br><br>
A très bientôt. »
<br><br><br><br>
---------------
Ceci est un mail automatique, Merci de ne pas y répondre.';
$headers  = "MIME-Version: 1.0 \n";
$headers .= "Content-type: text/html; charset=utf8 \n";
$headers .= "From: $from  \n";
$headers .= "Disposition-Notification-To: $from  \n";
$headers .= "X-Priority: 1  \n";
$headers .= "X-MSMail-Priority: High \n";
$CR_Mail = TRUE;
$CR_Mail = @mail ($email, $Subject, $message, $headers);

header('Location:duplicate-validation-picnic.php');
}
}else{
  header('Location: duplicate-mailfail-different.php');
}
?>

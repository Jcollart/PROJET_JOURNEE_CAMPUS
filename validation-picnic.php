<?php
include 'connectbdd.php';
// Récupération des variables nécessaires à l'activation
$nom = $_GET['nom'];
$cle = $_GET['cle'];
$prenom = $_GET['prenom'];

// Récupération de la clé correspondant au $nom dans la base de données
$req = $bdd->prepare("SELECT cle, actif FROM piquenique WHERE nom = :nom AND prenom = :prenom ");

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
    header('Location: duplicate-already-done-picnic.php');
  }
// Si ce n'est pas le cas on passe aux comparaisons
   else
  {
// On compare nos deux clés
     if($cle == $clebdd)
       {
// Si elles correspondent on active le compte !

// La requête qui va passer notre champ actif de 0 à 1
         $req = $bdd->prepare("UPDATE piquenique SET actif = 1 WHERE nom = :nom AND prenom = :prenom ");
          $req->bindParam(':nom', $nom);
          $req->bindParam(':prenom', $prenom);
          $req->execute();
          header('Location: duplicate-validation-picnic2.php');
       }
// Si les deux clés sont différentes on provoque une erreur...
     else
       {
         header('Location: duplicate-fail.php');
       }
  }
//...	fermeture connexion
$req->closeCursor();
?>
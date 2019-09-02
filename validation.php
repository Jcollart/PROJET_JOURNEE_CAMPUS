<?php
 
//...
// Votre code
//...
/// connexion à la base

try
{
    $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
    $bdd = new PDO('mysql:host=localhost;dbname=basetud', 'root', '', $pdo_options);
  
}
catch(Exception $e)
{
    die('Erreur : '.$e->getMessage());
}
 

// Récupération des variables nécessaires à l'activation
$nom = $_GET[':nom'];
$cle = $_GET['cle'];


// Récupération de la clé correspondant au $nom dans la base de données
$req = $bdd->prepare("SELECT cle, actif FROM etudiant WHERE nom like :nom ");


if($req->execute(array(':nom' => $nom)) && $row = $req->fetch())
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
     echo "Votre inscription est déjà active !";
  }
// Si ce n'est pas le cas on passe aux comparaisons
   else
  {
// On compare nos deux clés
     if($cle == $clebdd) 	
       {
// Si elles correspondent on active le compte !	
          echo "Votre inscription a bien été activé !";
 
// La requête qui va passer notre champ actif de 0 à 1
         $req = $bdd->prepare("UPDATE etudiant SET actif = 1 WHERE nom like :nom ");
          $req->bindParam(':nom', $nom);
          $req->execute();
       }
// Si les deux clés sont différentes on provoque une erreur...
     else 
       {
          echo "Erreur ! Votre inscription ne peut pas etre ok...";
       }
  }
 
 
//...	fermeture connexion
$req->closeCursor();


?>
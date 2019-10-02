<?php

// On commence par récupérer les champs 

if(isset($_POST['nom_image']))      $image=$_POST['nom_image'];
else      $image="";

// On vérifie si les champs sont vides 
if(empty($image)) 
    { 
    echo '<font color="red">Attention, ton champ est vide !</font>'; 
    } 

    // Aucun champ n'est vide, on peut enregistrer dans la table 
else 
{     

  include 'connectbdd.php';

 // On insère les infos dans la table Galerie :
 $reqajout1 = $bdd->prepare ("INSERT INTO galerie( nom_image) VALUES('$image')"); 
 $reqajout1->execute();
}

echo 'Une image a été bien ajouté';
 // on ferme la connexion 
 $reqajout1->closeCursor();
?> 
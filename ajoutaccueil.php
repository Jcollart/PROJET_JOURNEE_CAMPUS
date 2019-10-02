<?php 
// On commence par récupérer les champs 

if(isset($_POST['id_accueil']))      $id=$_POST['id_accueil'];
else      $id="";

if(isset($_POST['anneerentree']))      $rentree=$_POST['anneerentree'];
else      $rentree="";

if(isset($_POST['daterentree']))      $jourentree=$_POST['daterentree'];
else      $jourentree="";

if(isset($_POST['revivezannee']))     $revivez=$_POST['revivezannee'];
else      $revivez="";



// On vérifie si les champs sont vides 
if(empty($rentree) OR empty($jourentree) OR empty($revivez)) 
    { 
    echo '<font color="red">Attention, un des 2 champs est resté vide !</font>'; 
    } 

    // Aucun champ n'est vide, on peut enregistrer dans la table 
else 
{     

// connexion à la base

include 'connectbdd.php';

    // On insère les infos dans la table Temoignage :
  $reqajout2 = $bdd->prepare ("INSERT INTO accueil( anneerentree, daterentree, revivezannee) VALUES('$rentree','$jourentree','$revivez')"); 
  $reqajout2->execute();
   

  // on récupère l'id qui vient d'être généré 
  // $id = mysql_insert_id(); 

}

echo 'Les donnees de presentation ont été ajoutés';

 // on ferme la connexion 
 $reqajout2->closeCursor();
?>
<?php 
// On commence par récupérer les champs 

if(isset($_POST['id_temoignage']))      $id=$_POST['id_temoignage'];
else      $id="";

if(isset($_POST['texte_temoignage']))      $temoignage=$_POST['texte_temoignage'];
else      $temoignage="";

if(isset($_POST['prenom_temoin']))      $prenom=$_POST['prenom_temoin'];
else      $prenom="";




// On vérifie si les champs sont vides 
if(empty($temoignage) OR empty($prenom)) 
    { 
    echo '<font color="red">Attention, un des 2 champs est resté vide !</font>'; 
    } 

    // Aucun champ n'est vide, on peut enregistrer dans la table 
else 
{     
// connexion à la base

include 'connectbdd.php';

    // On insère les infos dans la table Temoignage :
  $reqajout = $bdd->prepare ("INSERT INTO temoignage( texte_temoignage, prenom_temoin) VALUES('$temoignage','$prenom')"); 
  $reqajout->execute();
   

  // on récupère l'id qui vient d'être généré 
  // $id = mysql_insert_id(); 

}

echo 'Le temoignage et le nom de la personne ont été ajoutés';

 // on ferme la connexion 
 $reqajout->closeCursor();




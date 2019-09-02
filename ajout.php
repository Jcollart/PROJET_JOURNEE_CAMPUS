<?php







if( empty(session_id()) ){ session_start(); }
// Affichage des erreurs et les avertissements PHP
error_reporting(E_ALL);   

// On commence par récupérer les champs 

if(isset($_POST['etablissement']))      $etablissement=$_POST['etablissement'];
else      $etablissement="";

if(isset($_POST['participant']))      $participant=$_POST['participant'];
else      $participant="";

if(isset($_POST['equipe']))      $equipe=$_POST['equipe'];
else      $equipe="";

if(isset($_POST['nom']))      $nom=$_POST['nom'];
else      $nom="";

if(isset($_POST['prenom']))      $prenom=$_POST['prenom'];
else      $prenom="";

if(isset($_POST['mobile']))      $mobile=$_POST['mobile'];
else      $mobile="";

if(isset($_POST['email']))      $email=$_POST['email'];
else      $email="";

if(isset($_POST['mot_de_passe']))      $password=$_POST['mot_de_passe'];
else      $password="";



    if (isset($_POST['valid_form']))
{
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $mobile = $_POST['mobile'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $participant = $_POST['participant'];
    $equipe = $_POST['nom_equipe'];
    $etablissement = $_POST['etablissement'];
  }
    // On insère les infos dans la table Etudiant :
  $reqajout = $bdd->prepare 'INSERT INTO Etudiant (id_etudiant, nom, prenom, mobile, email, password) VALUES('',$nom,$prenom, $mobile,, $password)'; 
  
    $reqajout->execute();
   
  // on récupère l'id qui vient d'être généré 
  $id_etudiant = LAST_INSERT_ID(); 

  // ci-dessous on insère les infos dans Formulaire : 
  $re:jout =$bdd->prepare "INSERT INTO Formulaire(id_formulaire, etablissement) VALUES('',$etablissement)";
  $reqajout->bindValue(':etablissement', $_POST['etablissement'], PDO::PARAM_STR);
  $reqajout->execute();
   
  // on récupère l'id qui vient d'être généré 
  $id_formulaire = LAST_INSERT_ID()();

  // ci-dessous on insère les infos dans Equipe : 
  $reqajout = $bdd->prepare "INSERT INTO Equipe(id_equipe, equipe) VALUES('',$equipe)"; 
  $reqajout->bindValue(':equipe', $_POST['nom_equipe'], PDO::PARAM_STR);
  $reqajout->execute();



   // on ferme la connexion 
   $reqajout->closeCursor();
   echo 'Le film a bien été modifié !';
?> 
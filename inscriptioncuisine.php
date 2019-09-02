<?php


if(isset($_POST["submit"])){

// connexion à la base

try
    {
        $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
        $bdd = new PDO('mysql:host=localhost;dbname=basetud', 'root', '', $pdo_options);
      
    }
    catch(Exception $e)
    {
        die('Erreur : '.$e->getMessage());
    }


    $reqajout = $bdd->prepare('INSERT INTO etudiant (participant, nom, prenom, mobile, email, typeform) VALUES (:participant, :nom, :prenom, :mobile, :email, :typeform)');

$reqajout -> bindParam('participant', $_POST["participant"]);
$reqajout -> bindParam(':email', $_POST["email"]);
$reqajout -> bindParam(':nom', $_POST["nom"]);
$reqajout -> bindParam(':prenom', $_POST["prenom"]);
$reqajout -> bindParam(':mobile', $_POST["mobile"]);
$reqajout -> bindParam(':typeform', $_POST["typeform"]);
//$reqajout -> bindParam(':actif', $_POST['actif']);


$reqajout->execute();

//if ($bdd->query($reqajout)) {
//echo 'sa a marché' ;
//}
//else{
//echo 'dans le cul lulu' ;

// ci-dessous on insère les infos dans Formulaire : 
$reqajout1 = $bdd->prepare('INSERT INTO Formulaire( etablissement) VALUES( :etablissement)');
$reqajout1->bindParam(':etablissement', $_POST["etablissement"], PDO::PARAM_STR);
$reqajout1->execute();

 // ci-dessous on insère les infos dans Equipe : 
 $reqajout2 = $bdd->prepare ('INSERT INTO Equipe( nom_equipe) VALUES( :equipe)'); 
 $reqajout2->bindParam(':equipe', $_POST["equipe"], PDO::PARAM_STR);
 $reqajout2->execute();

// Récupération des variables nécessaires au mail de confirmation	
$email = $_POST['email']; 
$nom = $_POST['nom']; 

// Génération aléatoire d'une clé 
$cle = md5(microtime(TRUE)*100000); 


// Insertion de la clé dans la base de données 
$req = $bdd->prepare("UPDATE etudiant SET cle=:cle WHERE nom like :nom"); 
$req->bindParam(':cle', $cle); 
$req->bindParam(':nom', $nom); 
$req->execute(); 


// Préparation du mail contenant le lien d'activation 
$destinataire = $email; 
$sujet = "Valider votre inscription au concours de cuisine" ; 
$entete = "From: j.collart@simplon-charleville.fr" ; 

// Le lien d'activation est composé du nom(nom) et de la clé(cle) 
$message = 'Bienvenue a la validation de votre inscription au concour de cuisine, 

Pour activer votre compte, veuillez cliquer sur le lien ci dessous 
ou copier/coller dans votre navigateur internet. 

http://127.0.0.1/html/Projet_journee_campus/validation.php?nom='.urlencode($nom).'&cle='.urlencode($cle).' 


--------------- 
Ceci est un mail automatique, Merci de ne pas y répondre.'; 

// Envoi du mail

mail($destinataire, $sujet, $message, $entete) ;  

header('Location: formulcuisine.php'); 
} 
$reqajout2->closeCursor();

echo 'Inscription réalisée' ;

?> 

 




?>
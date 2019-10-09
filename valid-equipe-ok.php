<?php

include 'connectbdd.php';


// Récupération des variables nécessaires à l'activation de l'equipe compléte
$nom_equipe = $_GET['nom_equipe'];
$email = $_GET['email'];
$actif = $_GET['actif'];


// Récupération des données correspondant a $nom_equipe dans la base de données
$req = $bdd->prepare("SELECT nom_TEAM,email SUM(actif) AS valid.team FROM etudiant GROUP BY nom_team");
if($req->execute(array(':actif' => $actif)) && $row = $req->fetch())


// Si elles correspondent on active le compte !

?>
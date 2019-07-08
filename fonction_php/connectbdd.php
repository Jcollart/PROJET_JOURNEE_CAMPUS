<?php

$servname = "localhost";
$dbname = "nom base de donnée";
$username = "root";              
$password = "";


  try
  {
  	// On se connecte à MySQL
  	$bdd = new PDO("mysql:host= $servname;dbname= $dbname;charset=utf8", $username, $password);
  }
  catch(PDOException $e)
  {
  	// En cas d'erreur, on affiche un message et on arrête tout
          die('Erreur : '.$e->getMessage());
  }

?>
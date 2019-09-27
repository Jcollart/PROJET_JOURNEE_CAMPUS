<?php

include ('connectbdd.php');

$pseudo_admin = isset($_POST['pseudo_admin']) ? $_POST['pseudo_admin'] : NULL;
$mdp_admin = isset($_POST['mdp_admin']) ? $_POST['mdp_admin'] : NULL;

$req = $bdd->prepare('SELECT id_admin, mdp_admin FROM admin WHERE pseudo_admin = :pseudo_admin');
$req->execute(array(
    'pseudo_admin' => $pseudo_admin));
$resultat = $req->fetch();
$req-> closeCursor();


if (!$resultat)
{
    echo "J'ai rien reçu, j'ai un pb";
}
else{

  if ($_POST['mdp_admin'] == $resultat['mdp_admin']) {
      session_start();
      $_SESSION['id_admin'] = $resultat['id_admin'];
      $_SESSION['pseudo_admin'] = $pseudo_admin;

      header('Location: interfaceadministrateur.php');

  }
  else {
      echo 'Mauvais identifiant ou mot de passe !';
  }
}


?>

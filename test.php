<?php


include 'connectbdd.php';
echo"je fais un test";

$req = $bdd->prepare("SELECT email FROM cuisine WHERE nom_team='Simplon' ");

$req->execute();

echo '<br>';
echo"je fais un test";
if ($req->execute()) {

  while ($row = $req->fetch()) {
    print_r($row);
  }

}


?>

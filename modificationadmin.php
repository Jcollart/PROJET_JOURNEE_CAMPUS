<?php include_once 'connectbdd.php' ;

?>

<!DOCTYPE html>
<html lang="fr, FR">
<!-- Pour indexation et lecteurs d'écran -->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>FORMULAIRE CAROLO EXPRESS</title>
    <meta name="author" content="Jérôme COLLART & Gaël PONSARD">
    <meta name="description" content="description du site en max 3 phrases courtes -156 carac">
    <!-- Si vous voulez une favicon enregistrez-la dans le même répertoire que la page
    d'index du site, sous le format .ico et linkez la-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

    <!-- liens bootstraps -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
    <!-- Tout les liens -->

    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/hover-min.css">
    <link rel="stylesheet" href="css/admin.css">

</head>

<body>
    <?php include("header2.php"); ?><br><br><br>

<div class="container">

<center><h1 style="color:rgb(233, 95, 16);" ><font size="+4"> Modification des données<br> page accueil</font></h1>
<br><br>
<h2 text-decoration="underline"><font size="+2">Présentation avec mascotte</font></h2>
<br><br>
<form method="post" action="modif.php"><br>
<p>L'année de la rentrée étudiante :</p><br>
<input type="text" id="titre" name="annee" /><br><br>
<p>Le jour de la rentrée étudiante :</p><br>
<input type="text" id="date" name="journee" /><br><br>
<p>Modification du champs : "revivez l'année ****" </p><br>
<input type="text" id="revivre" name="revivre" /><br><br>
<input class="hvr-pulse"type="submit" value="Envoyer les modifs"><br>
</form>

<br><br>
<h2><font size="+2">Descriptif de l'évenement :</font></h2>
<br><br>
<form method="post" action="modif.php"><br>
<p>Modifiez : "c'est quand"</p><br>
<input type="text" id="quand" name="quand" /><br><br>
<p>Modifiez : "Qu'est que c'est?"</p><br>
<input type="text" id="quest" name="quest" /><br><br>
<p>Modifiez: "c'est où ?"</p><br>
<input type="text" id="cestou" name="cestou" /><br><br>
<p style:font-color=Modifiez :> "pour qui ?"</p><br>
<input type="text" id="pourqui" name="pourqui" /><br><br>
<input type="submit" value="Envoyer les modifs"><br>
</form>
<br><br>
<h2><font size="+2">Modification accueil inscription</font></h2>
<br>
<form method="post" action="modif.php">
<br>
<input type="text" id="form1" name="cestou" />
<br>
<input type="text" id="form2" name="cestou" />
<br>
<input type="text" id="form3" name="cestou" />
<br>
<input type="text" id="form4" name="cestou" />
<br>
<input type="submit" value="Envoyer les modifs">
</form>
<br><br>
<h2><font size="+2" >Modification Edition passée</font></h2>
<br><br>
<form method="post" action="modif.php">
<br>
<p>Modifiez titre edition passée"</p><br>
<input type="text" id="passee" name="" /><br>
<br>
<input type="submit" value="Envoyer les modifs"><br>
</form>
<br><br>
<h2><font size="+2">Ajoutez une photo dans galerie</font></h2>
<br><br>
<form method="post" action="ajout.php"><br>
<input type="image" id="image1" alt="newsimage1" src=""><br>
<br>
<input type="submit" value="Envoyer les modifs"><br>
</form>

<br><br>
<h2><font size="+2">Supprimez une photo dans galerie</font></h2>
<br><br>
<form method="post" action="suprim.php"><br>
<input type="image" id="image2" alt="newsimage2" src=""><br>
<br>
<input type="submit" value="Envoyer les modifs"><br>
</form>
<br><br>
<h2><font size="+2">Modification Témoignages</font></h2>
<form method="post" action="ajout.php"><br>
<p>Ajoutez un temoignage</p><br>
<input type="text" id="temoignage" name="temoignage" /><br>
<br>
<p>Ajoutez un temoignage</p><br>
<input type="text" id="nom_temoin" name="nom_temoin" /><br>
<br>
<input type="submit" value="Envoyer les modifs"><br>
</form>
</center><br><br><br>
</div>



<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>

</body>

</html>
       
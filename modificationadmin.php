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
    d'index du site, sous le format .ico pour compatibilié IE6 et linkez la-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

    <!-- liens bootstraps -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <!-- Tout les liens -->

    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/hover-min.css">

</head>

<body>
    <?php include("header2.php"); ?><br><br><br>

<h1> Modification des données<br> page accueil </h1>
<br><br>
<h2>Présentation avec mascotte</h2>
<br><br>
<form method="post" action="modif.php">
<p>L'année de la rentrée étudiante :</p>
<br>
<input type="text" id="titre" name="annee" />
<br>
<p>Le jour de la rentrée étudiante :</p>
<br>
<input type="text" id="date" name="journee" />
<br>
<p>Modification du champs : "revivez l'année **** </p>
<input type="text" id="revivre" name="revivre" />
<br>
<input type="submit" value="Envoyer les modifs">
</form>

<br><br>
<h2>Descriptif de l'évenement :</h2>
<br><br>
<form method="post" action="modif.php">
<br>
<p>Modifiez : "c'est quand"</p>
<input type="text" id="quand" name="quand" />
<br>
<p>Modifiez : "Qu'est que c'est?"</p>
<br>
<input type="text" id="quest" name="quest" />
<br>
<p>Modifiez: "c'est où ?"</p>
<br>
<input type="text" id="cestou" name="cestou" />
<br>
<p style:font-color=Modifiez : "C'est pour qui ?"</p>
<br>
<input type="text" id="pourqui" name="pourqui" />
<br>
<input type="submit" value="Envoyer les modifs">
</form>
<br><br>
<h2><b>Modification accueil inscription</b></h2>
<br><br>
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
<h2>Modification Edition passée</h2>
<br><br>
<form method="post" action="modif.php">
<br>
<p>Modifiez titre edition passée"</p>
<input type="text" id="passee" name="" />
<br>
<input type="submit" value="Envoyer les modifs">
</form>
<br><br>
<h2>Ajoutez une photo dans galerie</h2>
<br><br>
<form method="post" action="ajout.php">
<input type="image" id="image1" alt="newsimage1" src="">
<br>
<input type="submit" value="Envoyer les modifs">
</form>

<br><br>
<h2>Supprimez une photo dans galerie</h2>
<br><br>
<form method="post" action="suprim.php">
<input type="image" id="image2" alt="newsimage2" src="">
<br>
<input type="submit" value="Envoyer les modifs">
</form>

<br><br>
<h2>Modification Témoignages</h2>
<br><br>
<form method="post" action="ajout.php">

<p>Ajoutez un temoignage</p>
<br>
<input type="text" id="temoin" name="temoin" />
<br>
<input type="submit" value="Envoyer les modifs">
</form>


<?php include("footer1.php") ; ?>



</body>

</html>
       
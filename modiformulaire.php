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
    <!--<link rel="stylesheet" href="css/formulaire.css">-->
    <link rel="stylesheet" href="css/hover-min.css">
    <link rel="stylesheet" href="css/admin.css">

</head>

<body>
    <?php include("header2.php"); ?><br><br><br>

<center><h1> Modification des données<br> EXPRESS , WARRIOR , CUISINE et PIQUE-NIQUE</h1>
<br><br>
<form method="post" action="modif.php">


<p>nom de l'equipe :</p>
<input type="text" id="equipe" name="equipe" />
<br>
<p>type de formulaire :</p>
<input type="text" id="formulaie" name="formulaire" />
<br>
<p>numero de participant :</p>
<input type="text" id="participant" name="participant" />
<br>
<p>nom de l'etudiant:</p>
<input type="text" id="nom" name="nom" />
<br>
<p>Prenom du participant</p>
<input type="text" id="prenom" name="prenom" />
<br>
<p>Mail de l'tetudiant  :</p>
<input type="text" id="email" name="email" />
<br>
<p>Numéro de téléphone</p>
<input type="text" id="mobile" name="mobile" />
<br><br>
<input type="submit" value="Envoyer les modifs">
<br><br>
</form></center>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
</script>
</body>

</html>

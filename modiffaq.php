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

<center><h1 style="color:rgb(233, 95, 16); text-decoration:underline; " ><font size="+4"> Modification de la FAQ/AIDE</font></h1>
<br><br>

<form method="post" action="ajoutfaq.php"><br>
<p>Faq à ajouter</p><br>
<input type="text" id="faq" name="faq" /><br><br>

</form>
</center><br><br><br>
</div>



<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>

</body>

</html>
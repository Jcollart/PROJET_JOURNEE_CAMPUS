
<!-- CONNEXION BDD -->

<?php include_once 'connectbdd.php' ;
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>rentrée des étudiants!</title>

    <!-- LIAISON BOOTSTRAP -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- LIAISON LIBRAIRIE JQUERY -->
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.js"></script>

    <!-- LOADING FONTS AND ICONS -->
    <link href="http://fonts.googleapis.com/css?family=Poppins:700|Oswald:300" rel="stylesheet" property="stylesheet"
        type="text/css" media="all">
    <script src='https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js'></script>
    <link rel="stylesheet" type="text/css" href="/fonts/pe-icon-7-stroke/css/pe-icon-7-stroke.css">
    <link rel="stylesheet" type="text/css" href="/fonts/font-awesome/css/font-awesome.css">

    <!-- CHARGEMENT CSS -->

    <link rel="stylesheet" href="css/header2.css">
    <link rel="stylesheet" href="css/admin.css">

</head>

<body>

    <!-- CHARGEMENT NAVBAR -->

    <?php include("header2.php"); ?><br><br><br>
    <center>
        <h1>
            <font size="+3">Administration du Site</font>
        </h1><br><br><br>

        <!-- AFFICHAGE FORMULAIRE ADMIN -->

        <div class="form">
            <form action="val-admin.php" method="post">
                <div>
                    <center>
                        <font size="+2">CONNEXION</font>
                    </center>
                </div><br>

                <div>
                    <label><b>Nom d'utilisateur</b></label>
                    <input type="text" placeholder="Nom Utilisateur" name="pseudo_admin" required /><br>
                </div><br>
                <div>
                    <label><b>Mot de passe</b></label>
                    <input type="password" placeholder="******" name="mdp_admin" required /><br>
                </div><br>

                <div>
                    <input name="submit" type="submit" value="Envoyer" />
                </div>
            </form>
        </div>
        <br>

<!-- SCRIPT BOOTSTRAP & JQUERY --> 

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
        </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
            integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
        </script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
            integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
        </script>

</body>

</html>
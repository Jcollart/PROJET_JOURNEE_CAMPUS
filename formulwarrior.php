<?php //include_once 'connectbdd.php' ;



?>



<!DOCTYPE html>

<html lang="fr, FR">

<!-- Pour indexation et lecteurs d'écran -->



<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>FORMULAIRE CAROLO WARRIOR</title>

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



    <link rel="stylesheet" href="reset.css">

    <link rel="stylesheet" href="css/formulaire.css">

    <link rel="stylesheet" href="css/hover-min.css">



</head>



<body>

    <!-- NAVBAR BOOTSTRAP-->

    <?php include("header2.php"); ?><br><br><br>





    <center>

        <h1 style="color:rgb(233, 95, 16)"> INSCRIPTION CAROLO WARRIOR </h1><br>

        <p>Merci de remplir les champs ci-dessous pour inscrire votre équipe <br>

            et participer au Carolo warrior (relai sportif et ludique). De nombreux<br>

            lots sont à gagner. Pour constituer une équipe, vous devez être 8 participants.<br>

             Opérez votre inscription ensemble<br>



        </p>

    </center><br>





    <div class="form">

        <form action="inscriptionwarrior.php" method="post">

            <div>

                <label for="name"><strong><center>Etablissement</center><br></strong></label>

                <select name="etablissement" id="etablissement">

                    <option value="IUTRCC">Institut Universitaire de Technologie (IUT RCC)</option>
                    <option value="EiSINe">Ecole d’Ingénieurs en Sciences Industrielles et Numérique (EiSINe)</option>
                    <option value="INSPE">Institut national Supérieur du Professorat et de l’Education (INSPÉ)</option>
                    <option value="EGC">Ecole de gestion et de commerce (EGC)</option>
                    <option value="SIMPLON">Ecole Simplon</option>
                    <option value="ISCEE">Institut supérieur de comptabilité et d’économie des entreprises (ISCEE)</option>
                    <option value="ESNAM">Ecole supérieure nationale des Arts de la marionnettes (ESNAM)</option>
                    <option value="IFSI">Institut de formation en soins infirmiers (IFSI)</option>
                    <option value="CFAI">Centre de formation des apprentis de l’industrie (CFAI)</option>
                    <option value="LABDA">Lycée agricole Balcon des Ardennes</option>
                    <option value="LDMDB">Lycée des métiers de Bazeilles</option>
                    <option value="LMDS">Lycée Sévigné</option>
                    <option value="LDMB">Lycée des métiers Bazin</option>
                    <option value="LM">Lycée Monge</option>
                    <option value="LJBC">Lycée JB Clément</option>
                    <option value="LPB">Lycée Pierre Bayle</option>
                    <option value="LSV">Lycée Simone Veil</option>


                </select>

            </div>

            <hr>

            <div>

                <label for="name"><strong>Nom de l’équipe (à votre choix) </strong><br><br></label>

                <input type="text" id="equipe" name="equipe">

            </div>



            <br>



            <div>

             <!--   <select name="typeform" id="typeform">

                    <option>CAROLO WARRIOR</option>

                </select>-->

            </div>



            <hr>





            <div>

                <center><font size="+2">Participant 1 </font></center>

            </div>

            <div>

                <label for="name"><strong>Nom</strong></label>

                <input type="text" id="nom" name="nom">

            </div>

            <br>

            <div>

                <label for="surname"><strong>Prénom</strong></label>

                <input type="text" id="prenom" name="prenom">

            </div>

            <br>

            <div>

                <label for="mobile"><strong>Mobile</strong></label>

                <input type="text" id="mobile" name="mobile">

            </div>

            <br>

            <div>

                <label for="email"><strong>E-mail</strong></label>

                <input type="text" id="email" name="email">

            </div>

            <br>

            <div>

                <label for="email"><strong>Retapez l'E-mail</strong></label>

                <input type="text" id="email" name="email11">

            </div>

            <hr>

            <div>

                <center><font size="+2">Participant 2 </font></center>

            </div>

            <div>

                <label for="name"><strong>Nom</strong></label>

                <input type="text" id="nom2" name="nom2">

            </div>

            <br>

            <div>

                <label for="surname"><strong>Prénom</strong></label>

                <input type="text" id="prenom2" name="prenom2">

            </div>

            <br>

            <div>

                <label for="mobile"><strong>Mobile</strong></label>

                <input type="text" id="mobile2" name="mobile2">

            </div>

            <br>

            <div>

                <label for="email"><strong>E-mail</strong></label>

                <input type="text" id="email2" name="email2">

            </div>


            <br>

            <div>

                <label for="email"><strong>Retapez l'E-mail</strong></label>

                <input type="text" id="email" name="email21">

            </div>

            <hr>

            <div>

                <center><font size="+2">Participant 3 </font></center>

            </div>

            <div>

                <label for="name"><strong>Nom</strong></label>

                <input type="text" id="nom3" name="nom3">

            </div>

            <br>

            <div>

                <label for="surname"><strong>Prénom</strong></label>

                <input type="text" id="prenom3" name="prenom3">

            </div>

            <br>

            <div>

                <label for="mobile"><strong>Mobile</strong></label>

                <input type="text" id="mobile3" name="mobile3">

            </div>

            <br>

            <div>

                <label for="email"><strong>E-mail</strong></label>

                <input type="text" id="email3" name="email3">

            </div>


            <br>


            <div>

                <label for="email"><strong>Retapez l'E-mail</strong></label>

                <input type="text" id="email" name="email31">

            </div>

            <hr>

            <div>

                <center><font size="+2">Participant 4 </font></center>

            </div>

            <div>

                <label for="name"><strong>Nom</strong></label>

                <input type="text" id="nom4" name="nom4">

            </div>

            <br>

            <div>

                <label for="surname"><strong>Prénom</strong></label>

                <input type="text" id="prenom4" name="prenom4">

            </div>

            <br>

            <div>

                <label for="mobile"><strong>Mobile</strong></label>

                <input type="text" id="mobile4" name="mobile4">

            </div>

            <br>

            <div>

                <label for="email"><strong>E-mail</strong></label>

                <input type="text" id="email4" name="email4">

            </div>


            <br>


            <div>

                <label for="email"><strong>Retapez l'E-mail</strong></label>

                <input type="text" id="email" name="email41">

            </div>

            <hr>

            <div>

                <center><font size="+2">Participant 5 </font></center>

            </div>

            <div>

                <label for="name"><strong>Nom</strong></label>

                <input type="text" id="nom5" name="nom5">

            </div>


            <br>

            <div>

                <label for="surname"><strong>Prénom</strong></label>

                <input type="text" id="prenom5" name="prenom5">

            </div>

            <br>

            <div>

                <label for="mobile"><strong>Mobile</strong></label>

                <input type="text" id="mobile5" name="mobile5">

            </div>

            <br>

            <div>

                <label for="email"><strong>E-mail</strong></label>

                <input type="text" id="email5" name="email5">

            </div>

            <br>


            <div>

                <label for="email"><strong>Retapez l'E-mail</strong></label>

                <input type="text" id="email" name="email51">

            </div>

            <hr>

            <div>

                <center><font size="+2">Participant 6 </font></center>

            </div>

            <div>

                <label for="name"><strong>Nom</strong></label>

                <input type="text" id="nom6" name="nom6">

            </div>

            <br>

            <div>

                <label for="surname"><strong>Prénom</strong></label>

                <input type="text" id="prenom6" name="prenom6">

            </div>

            <br>

            <div>

                <label for="mobile"><strong>Mobile</strong></label>

                <input type="text" id="mobile6" name="mobile6">

            </div>

            <br>

            <div>

                <label for="email"><strong>E-mail</strong></label>

                <input type="text" id="email6" name="email6">

            </div>


            <br>


            <div>

                <label for="email"><strong>Retapez l'E-mail</strong></label>

                <input type="text" id="email" name="email61">

            </div>

            <hr>

            <div>

                <center><font size="+2">Participant 7 </font></center>

            </div>

            <div>

                <label for="name"><strong>Nom</strong></label>

                <input type="text" id="nom7" name="nom7">

            </div>

            <br>

            <div>

                <label for="surname"><strong>Prénom</strong></label>

                <input type="text" id="prenom7" name="prenom7">

            </div>

            <br>

            <div>

                <label for="mobile"><strong>Mobile</strong></label>

                <input type="text" id="mobile7" name="mobile7">

            </div>

            <br>

            <div>

                <label for="email"><strong>E-mail</strong></label>

                <input type="text" id="email7" name="email7">

            </div>


            <br>


            <div>

                <label for="email"><strong>Retapez l'E-mail</strong></label>

                <input type="text" id="email" name="email71">

            </div>

            <hr>

            <div>

                <center><font size="+2">Participant 8 </font></center>

            </div>

            <div>

                <label for="name"><strong>Nom</strong></label>

                <input type="text" id="nom8" name="nom8">

            </div>

            <br>

            <div>

                <label for="surname"><strong>Prénom</strong></label>

                <input type="text" id="prenom8" name="prenom8">

            </div>

            <br>

            <div>

                <label for="mobile"><strong>Mobile</strong></label>

                <input type="text" id="mobile8" name="mobile8">

            </div>

            <br>

            <div>

                <label for="email"><strong>E-mail</strong></label>

                <input type="text" id="email8" name="email8">

            </div>

            <br>

            <div>

                <label for="email"><strong>Retapez l'E-mail</strong></label>

                <input type="text" id="email" name="email81">

            </div>

            <hr>

            <div>

                <center><font size="+2">Je valide l’inscription de mon équipe </font></center>

            </div>

            <div>

                <input name="submit" type="submit" value="Envoyer" />

            </div>



        </form>

    </div><br><br>



    <section>



        <center>

            <h2> Vous désirez vous inscrire à une autre activité ?</h2>

            <div class="arrow_box"></div><br><br>



            <section>





               <a href="formulexpress.php"><button type="button" style="color:rgb(233, 95, 16)"

                        class="btn btn-light">INSCRIPTION CAROLO EXPRESS</button></a>

            </section><br>



            <section>

                <a href="formulpiquenique.php"><button type="button" style="color:rgb(233, 95, 16)"

                        class="btn btn-light">INSCRIPTION PIQUE NIQUE</button></a>

            </section><br>



            <section>

                <a href="formulcuisine.php"><button type="button" style="color:rgb(233, 95, 16)"

                        class="btn btn-light">INSCRIPTION CONCOURS DE CUISINE</button></a>

            </section><br>



            </section>

    </center>





            <?php include("footer1.php"); ?>



    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"

        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">

    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"

        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">

    </script>

</body>



</html>

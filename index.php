<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Slider Revolution Example" />
    <meta name="keywords" content="fullscreen image, grid layout, flexbox grid, transition" />
    <meta name="author" content="ThemePunch" />
    <title>Rentrée des étudiants 2019</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/hover-min.css">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">

    <!-- LOAD JQUERY LIBRARY -->
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.js"></script>

    <!-- LOADING FONTS AND ICONS -->
    <link href="http://fonts.googleapis.com/css?family=Poppins:700|Oswald:300" rel="stylesheet" property="stylesheet"
        type="text/css" media="all">
    <script src='https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js'></script>
    <link rel="stylesheet" type="text/css" href="fonts/pe-icon-7-stroke/css/pe-icon-7-stroke.css">
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome/css/font-awesome.css">

    <!-- REVOLUTION STYLE SHEETS -->
    <link rel="stylesheet" type="text/css" href="css/settings.css">

    <!-- FONT AND STYLE FOR BASIC DOCUMENTS, NO NEED FOR FURTHER USAGE IN YOUR PROJECTS-->
    <link href="http://fonts.googleapis.com/css?family=Roboto%3A700%2C300" rel="stylesheet" property="stylesheet"
        type="text/css" media="all" />
    <link rel="stylesheet" type="text/css" href="css/noneed.css">

    <!-- REVOLUTION JS FILES -->
    <script type="text/javascript" src="js/jquery.themepunch.tools.min.js"></script>
    <script type="text/javascript" src="js/jquery.themepunch.revolution.min.js"></script>

    <!-- PARTICLES ADD-ON FILES -->
    <link rel='stylesheet' href='particles/css/revolution.addon.particles.css?ver=1.0.3' type='text/css' media='all' />
    <script type='text/javascript' src='particles/js/revolution.addon.particles.min.js?ver=1.0.3'></script>

    <!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->
    <script type="text/javascript" src="extensions/revolution.extension.actions.min.js"></script>
    <script type="text/javascript" src="extensions/revolution.extension.carousel.min.js"></script>
    <script type="text/javascript" src="extensions/revolution.extension.kenburn.min.js"></script>
    <script type="text/javascript" src="extensions/revolution.extension.layeranimation.min.js"></script>
    <script type="text/javascript" src="extensions/revolution.extension.migration.min.js"></script>
    <script type="text/javascript" src="extensions/revolution.extension.navigation.min.js"></script>
    <script type="text/javascript" src="extensions/revolution.extension.parallax.min.js"></script>
    <script type="text/javascript" src="extensions/revolution.extension.slideanims.min.js"></script>
    <script type="text/javascript" src="extensions/revolution.extension.video.min.js"></script>

    <title>Rentrée des étudiants</title>
</head>

<body>
    <?php include("header.php") ; ?>


    <!--/////////////////////SECTION ENTETE///////////////////////-->

    <section class=entete>

        <?php include("entete.php") ; ?>

    </section>


    <!--/////////////////////SECTION PRESENTATION///////////////////////-->

    <section class=presentation>
       <?php include ("presentation.php") ; ?>
    </section>

    <div class="parallax-window" data-parallax="scroll" data-image-src="img/paracolor.jpg" alt="">
        <!-- debut parallax-->

        <!--/////////////////////SECTION NOUVELLE EDITION///////////////////////-->

        <section class="new_edition" id="new_edition">
            <?php include ("newpresent.php") ; ?>
        </section>

    </div> <!-- fin parallax-->

    <!--/////////////////////SECTION ANCIENNE EDITION///////////////////////-->

    <section class=ancienne_edition id="edition2018">
       <?php include ("anciennedition.php") ; ?>
    </section>


    <div class="parallax-window" data-parallax="scroll" data-image-src="img/placeducale.jpg" alt=""></div>

    <!--/////////////////////TEMOIGNAGES///////////////////////-->

    <section class=temoignages>
       <?php include ("temoignages.php") ; ?>
    </section>

    </main>


    <!--/////////////////////FOOTER///////////////////////-->


    <?php include("footer1.php") ; ?>

    <script>/* <![CDATA[ */
/*
|-----------------------------------------------------------------------
|  jQuery Multiple Toggle Script by Matt - www.skyminds.net
|-----------------------------------------------------------------------
|
| Affiche et cache le contenu de blocs multiples.
|
*/
jQuery(document).ready(function() {
    $(".more").hide();
    jQuery('.button-read-more').click(function () {
        $(this).closest('.less').addClass('active');
        $(this).closest(".less").prev().stop(true).slideDown("1000");
    });
    jQuery('.button-read-less').click(function () {
        $(this).closest('.less').removeClass('active');
        $(this).closest(".less").prev().stop(true).slideUp("1000");
    });
});
/* ]]> */ </script>

    <script src="https://cdn.jsdelivr.net/parallax.js/1.4.2/parallax.min.js"></script>
    <script type="text/javascript" src="../../assets/warning.js"></script>
    

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
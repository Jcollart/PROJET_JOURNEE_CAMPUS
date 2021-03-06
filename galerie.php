<!DOCTYPE html>
<html lang="fr, FR">
<!-- Pour indexation et lecteurs d'écran -->

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Galerie d'images</title>
  <meta name="author" content="Jérôme COLLART & Gaël PONSARD">
  <meta name="description" content="description du site en max 3 phrases courtes -156 carac">
  <!-- Si vous voulez une favicon enregistrez-la dans le même répertoire que la page
    d'index du site, sous le format et linkez la-->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
    integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
   <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
  
  <!-- liens bootstraps -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
  </script>


  <!-- Tout les liens -->


  <link rel="stylesheet" href="css/reset.css">
  <link rel="stylesheet" href="css/galerie.css">


</head>

<body>
  <!-- NAVBAR -->
  <?php include("header2.php"); ?><br><br><br>
  
  <h2>Galerie 2018</h2>
  <div id="galerie1" class="cssgal">
    <!-- ancre et conteneur de la galerie
  avec index propre à chaque galerie-->
    <ul class="lb-album">
      <li>
        <a href="#gal-1-image-1">
          <!----lien de la vignette vers le conteneur "lightbox" de la 1ère image-->
          <img class="gal" width="120" height="90" alt="image01" src="img/journeeetudiants/Journee_accueil_Etudiants_27_09_2018_(127).JPG">
        </a>
        <div id="gal-1-image-1" class="lb-overlay">
          <!--ancre de la 1ère image, background opaque-->
          <img alt="image01" src="img/journeeetudiants/Journee_accueil_Etudiants_27_09_2018_(127).JPG">
          <div>
            <h3></h3>
            <!-- Controls -->

            <!--titre de l'image grand format-->
            <a class="lb-prev" href="#gal-1-image-20">Prev</a>
            <a class="lb-next" href="#gal-1-image-2">Next</a>
            <!--lien vers image suivante-->
          </div>
          <a class="lb-close nolink" href="#galerie1">x Close</a>
          <!--lien vers l'ancre de la galerie: fermeture-->
        </div>
      </li>
      <li>
        <a href="#gal-1-image-2">
          <img class="gal" width="120" height="90" alt="image02"
            src="img/journeeetudiants/Journee_accueil_Etudiants_27_09_2018_(4).JPG">
        </a>
        <div id="gal-1-image-2" class="lb-overlay">
          <img alt="image02" src="img/journeeetudiants/Journee_accueil_Etudiants_27_09_2018_(4).JPG">
          <div>
            <h3></h3>
            <a class="lb-prev" href="#gal-1-image-1">Prev</a>
            <a class="lb-next" href="#gal-1-image-3">Next</a>
          </div>
          <a class="lb-close nolink" href="#galerie1">x Close</a>
        </div>
      </li>
      <li>
        <a href="#gal-1-image-3">
          <img class="gal" width="120" height="90" alt="image03"
            src="img/journeeetudiants/Journee_accueil_Etudiants_27_09_2018_(6).JPG">
        </a>
        <div id="gal-1-image-3" class="lb-overlay">
          <img alt="image03" src="img/journeeetudiants/Journee_accueil_Etudiants_27_09_2018_(6).JPG">
          <div>
            <h3></h3>
            <a class="lb-prev" href="#gal-1-image-2">Prev</a>
            <a class="lb-next" href="#gal-1-image-4">Next</a>
          </div>
          <a class="lb-close nolink" href="#galerie1">x Close</a>
        </div>
      </li>
      <li>
        <a href="#gal-1-image-4">
          <img class="gal" width="120" height="90" alt="image03"
            src="img/journeeetudiants/Journee_accueil_Etudiants_27_09_2018_(8).JPG">
        </a>
        <div id="gal-1-image-4" class="lb-overlay">
          <img alt="image04" src="img/journeeetudiants/Journee_accueil_Etudiants_27_09_2018_(8).JPG">
          <div>
            <h3></h3>
            <a class="lb-prev" href="#gal-1-image-3">Prev</a>
            <a class="lb-next" href="#gal-1-image-5">Next</a>
          </div>
          <a class="lb-close nolink" href="#galerie1">x Close</a>
        </div>
      </li>
      <li>
        <a href="#gal-1-image-5">
          <img class="gal" width="120" height="90" alt="image05"
            src="img/journeeetudiants/Journee_accueil_Etudiants_27_09_2018_(9).JPG">
        </a>
        <div id="gal-1-image-5" class="lb-overlay">
          <img alt="image05" src="img/journeeetudiants/Journee_accueil_Etudiants_27_09_2018_(9).JPG">
          <div>
            <h3></h3>
            <a class="lb-prev" href="#gal-1-image-4">Prev</a>
            <a class="lb-next" href="#gal-1-image-6">Next</a>
          </div>
          <a class="lb-close nolink" href="#galerie1">x Close</a>
        </div>
      </li>
      <li>
        <a href="#gal-1-image-6">
          <img class="gal" width="120" height="90" alt="image06"
            src="img/journeeetudiants/Journee_accueil_Etudiants_27_09_2018_(10).JPG">
        </a>
        <div id="gal-1-image-6" class="lb-overlay">
          <img alt="image06" src="img/journeeetudiants/Journee_accueil_Etudiants_27_09_2018_(10).JPG">
          <div>
            <h3></h3>
            <a class="lb-prev" href="#gal-1-image-5">Prev</a>
            <a class="lb-next" href="#gal-1-image-7">Next</a>
          </div>
          <a class="lb-close nolink" href="#galerie1">x Close</a>
        </div>
      </li>
      <li>
        <a href="#gal-1-image-7">
          <img class="gal" width="120" height="90" alt="image07"
            src="img/journeeetudiants/Journee_accueil_Etudiants_27_09_2018_(13).JPG">
        </a>
        <div id="gal-1-image-7" class="lb-overlay">
          <img alt="image07" src="img/journeeetudiants/Journee_accueil_Etudiants_27_09_2018_(13).JPG">
          <div>
            <h3></h3>
            <a class="lb-prev" href="#gal-1-image-6">Prev</a>
            <a class="lb-next" href="#gal-1-image-8">Next</a>
          </div>
          <a class="lb-close nolink" href="#galerie1">x Close</a>
        </div>
      </li>
      <li>
        <a href="#gal-1-image-8">
          <img class="gal" width="120" height="90" alt="image08"
            src="img/journeeetudiants/Journee_accueil_Etudiants_27_09_2018_(17).JPG">
        </a>
        <div id="gal-1-image-8" class="lb-overlay">
          <img alt="image08" src="img/journeeetudiants/Journee_accueil_Etudiants_27_09_2018_(17).JPG">
          <div>
            <h3></h3>
            <a class="lb-prev" href="#gal-1-image-7">Prev</a>
            <a class="lb-next" href="#gal-1-image-9">Next</a>
          </div>
          <a class="lb-close nolink" href="#galerie1">x Close</a>
        </div>
      </li>
      <li>
        <a href="#gal-1-image-9">
          <img class="gal" width="120" height="90" alt="image09"
            src="img/journeeetudiants/Journee_accueil_Etudiants_27_09_2018_(19).JPG">
        </a>
        <div id="gal-1-image-9" class="lb-overlay">
          <img alt="image09" src="img/journeeetudiants/Journee_accueil_Etudiants_27_09_2018_(19).JPG">
          <div>
            <h3></h3>
            <a class="lb-prev" href="#gal-1-image-8">Prev</a>
            <a class="lb-next" href="#gal-1-image-10">Next</a>
          </div>
          <a class="lb-close nolink" href="#galerie1">x Close</a>
        </div>
      </li>
      <li>
        <a href="#gal-1-image-10">
          <img class="gal" width="120" height="90" alt="image10"
            src="img/journeeetudiants/Journee_accueil_Etudiants_27_09_2018_(20).JPG">
        </a>
        <div id="gal-1-image-10" class="lb-overlay">
          <img alt="image10" src="img/journeeetudiants/Journee_accueil_Etudiants_27_09_2018_(20).JPG">
          <div>
            <h3></h3>
            <a class="lb-prev" href="#gal-1-image-9">Prev</a>
            <a class="lb-next" href="#gal-1-image-11">Next</a>
          </div>
          <a class="lb-close nolink" href="#galerie1">x Close</a>
        </div>
      </li>
      <li>
        <a href="#gal-1-image-11">
          <img class="gal" width="120" height="90" alt="image11"
            src="img/journeeetudiants/Journee_accueil_Etudiants_27_09_2018_(28).JPG">
        </a>
        <div id="gal-1-image-11" class="lb-overlay">
          <img alt="image11" src="img/journeeetudiants/Journee_accueil_Etudiants_27_09_2018_(28).JPG">
          <div>
            <h3></h3>
            <a class="lb-prev" href="#gal-1-image-10">Prev</a>
            <a class="lb-next" href="#gal-1-image-12">Next</a>
          </div>
          <a class="lb-close nolink" href="#galerie1">x Close</a>
        </div>
      </li>
      <li>
        <a href="#gal-1-image-12">
          <img class="gal" width="120" height="90" alt="image012"
            src="img/journeeetudiants/Journee_accueil_Etudiants_27_09_2018_(30).JPG">
        </a>
        <div id="gal-1-image-12" class="lb-overlay">
          <img alt="image12" src="img/journeeetudiants/Journee_accueil_Etudiants_27_09_2018_(30).JPG">
          <div>
            <h3></h3>
            <a class="lb-prev" href="#gal-1-image-11">Prev</a>
            <a class="lb-next" href="#gal-1-image-13">Next</a>
          </div>
          <a class="lb-close nolink" href="#galerie1">x Close</a>
        </div>
      </li>
      <li>
        <a href="#gal-1-image-13">
          <img class="gal" width="120" height="90" alt="image13"
            src="img/journeeetudiants/Journee_accueil_Etudiants_27_09_2018_(34).JPG">
        </a>
        <div id="gal-1-image-13" class="lb-overlay">
          <img alt="image13" src="img/journeeetudiants/Journee_accueil_Etudiants_27_09_2018_(34).JPG">
          <div>
            <h3></h3>
            <a class="lb-prev" href="#gal-1-image-12">Prev</a>
            <a class="lb-next" href="#gal-1-image-14">Next</a>
          </div>
          <a class="lb-close nolink" href="#galerie1">x Close</a>
        </div>
      </li>
      <li>
        <a href="#gal-1-image-14">
          <img class="gal" width="120" height="90" alt="image14"
            src="img/journeeetudiants/Journee_accueil_Etudiants_27_09_2018_(41).JPG">
        </a>
        <div id="gal-1-image-14" class="lb-overlay">
          <img alt="image14" src="img/journeeetudiants/Journee_accueil_Etudiants_27_09_2018_(41).JPG">
          <div>
            <h3></h3>
            <a class="lb-prev" href="#gal-1-image-13">Prev</a>
            <a class="lb-next" href="#gal-1-image-15">Next</a>
          </div>
          <a class="lb-close nolink" href="#galerie1">x Close</a>
        </div>
      </li>
      <li>
        <a href="#gal-1-image-15">
          <img class="gal" width="120" height="90" alt="image15"
            src="img/journeeetudiants/Journee_accueil_Etudiants_27_09_2018_(68).JPG">
        </a>
        <div id="gal-1-image-15" class="lb-overlay">
          <img alt="image15" src="img/journeeetudiants/Journee_accueil_Etudiants_27_09_2018_(68).JPG">
          <div>
            <h3></h3>
            <a class="lb-prev" href="#gal-1-image-14">Prev</a>
            <a class="lb-next" href="#gal-1-image-16">Next</a>
          </div>
          <a class="lb-close nolink" href="#galerie1">x Close</a>
        </div>
      </li>
      <li>
        <a href="#gal-1-image-16">
          <img class="gal" width="120" height="90" alt="image16"
            src="img/journeeetudiants/Journee_accueil_Etudiants_27_09_2018_(69).JPG">
        </a>
        <div id="gal-1-image-16" class="lb-overlay">
          <img alt="image16" src="img/journeeetudiants/Journee_accueil_Etudiants_27_09_2018_(69).JPG">
          <div>
            <h3></h3>
            <a class="lb-prev" href="#gal-1-image-15">Prev</a>
            <a class="lb-next" href="#gal-1-image-17">Next</a>
          </div>
          <a class="lb-close nolink" href="#galerie1">x Close</a>
        </div>
      </li>
      <li>
        <a href="#gal-1-image-17">
          <img class="gal" width="120" height="90" alt="image17"
            src="img/journeeetudiants/Journee_accueil_Etudiants_27_09_2018_(98).JPG">
        </a>
        <div id="gal-1-image-17" class="lb-overlay">
          <img alt="image17" src="img/journeeetudiants/Journee_accueil_Etudiants_27_09_2018_(98).JPG">
          <div>
            <h3></h3>
            <a class="lb-prev" href="#gal-1-image-16">Prev</a>
            <a class="lb-next" href="#gal-1-image-18">Next</a>
          </div>
          <a class="lb-close nolink" href="#galerie1">x Close</a>
        </div>
      </li>
      <li>
        <a href="#gal-1-image-18">
          <img class="gal" width="120" height="90" alt="image18"
            src="img/journeeetudiants/Journee_accueil_Etudiants_27_09_2018_(100).JPG">
        </a>
        <div id="gal-1-image-18" class="lb-overlay">
          <img alt="image18" src="img/journeeetudiants/Journee_accueil_Etudiants_27_09_2018_(100).JPG">
          <div>
            <h3></h3>
            <a class="lb-prev" href="#gal-1-image-17">Prev</a>
            <a class="lb-next" href="#gal-1-image-19">Next</a>
          </div>
          <a class="lb-close nolink" href="#galerie1">x Close</a>
        </div>
      </li>
      <li>
        <a href="#gal-1-image-19">
          <img class="gal" width="120" height="90" alt="image19"
            src="img/journeeetudiants/Journee_accueil_Etudiants_27_09_2018_(103).JPG">
        </a>
        <div id="gal-1-image-19" class="lb-overlay">
          <img alt="image19" src="img/journeeetudiants/Journee_accueil_Etudiants_27_09_2018_(103).JPG">
          <div>
            <h3></h3>
            <a class="lb-prev" href="#gal-1-image-18">Prev</a>
            <a class="lb-next" href="#gal-1-image-20">Next</a>
          </div>
          <a class="lb-close nolink" href="#galerie1">x Close</a>
        </div>
      </li>
      <li>
        <a href="#gal-1-image-20">
          <img class="gal" width="120" height="90" alt="image20"
            src="img/journeeetudiants/Journee_accueil_Etudiants_27_09_2018_(105).JPG">
        </a>
        <div id="gal-1-image-20" class="lb-overlay">
          <img alt="image20" src="img/journeeetudiants/Journee_accueil_Etudiants_27_09_2018_(105).JPG">
          <div>
            <h3></h3>
            <a class="lb-prev" href="#gal-1-image-19">Prev</a>
            <a class="lb-next" href="#gal-1-image-01">Next</a>
          </div>
          <a class="lb-close nolink" href="#galerie1">x Close</a>
        </div>
      </li>
    </ul>
    <!-- Controls -->



  </div>



  <?php include("footer1.php"); ?>


  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
  </script>
</body>

</html>

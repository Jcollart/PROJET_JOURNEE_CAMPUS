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
    d'index du site, sous le format .ico pour compatibilié IE6 et linkez la-->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
    integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
  <!-- <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
  <link rel="icon" href="favicon.png" type="image/png">
  <link rel="icon" sizes="32x32" href="favicon-32.png" type="image/png">
  <link rel="icon" sizes="64x64" href="favicon-64.png" type="image/png">
  <link rel="icon" sizes="96x96" href="favicon-96.png" type="image/png">
  <link rel="icon" sizes="196x196" href="favicon-196.png" type="image/png">
  <link rel="apple-touch-icon" sizes="152x152" href="apple-touch-icon.png">
  <link rel="apple-touch-icon" sizes="60x60" href="apple-touch-icon-60x60.png">
  <link rel="apple-touch-icon" sizes="76x76" href="apple-touch-icon-76x76.png">
  <link rel="apple-touch-icon" sizes="114x114" href="apple-touch-icon-114x114.png">
  <link rel="apple-touch-icon" sizes="120x120" href="apple-touch-icon-120x120.png">
  <link rel="apple-touch-icon" sizes="144x144" href="apple-touch-icon-144x144.png">
  <link rel="icon" href="animated_favicon.gif" type="image/gif">
  <meta name="msapplication-TileImage" content="favicon-144.png">
  <meta name="msapplication-TileColor" content="#FFFFFF">-->
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
  <!-- NAVBAR BOOTSTRAP-->
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">LOGO CAROLO</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#"><i style="font-size:1em" class="fas fa-home"></i><span
              class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="https://www.charleville-mezieres.fr/">Lien CM</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
            Menu Deroulant
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">CAROLO EXPRESS</a>
            <a class="dropdown-item" href="#">CAROLO PIQUE-NIQUE</a>
            <a class="dropdown-item" href="#">CAROLO WARRIOR</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">CAROLO CUISINE</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">GALERIE PHOTO</a>
        </li>
      </ul>
      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="recherche" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit"><i style="font-size:1em"
            class="fas fa-search"></i></button>
      </form>
    </div>
  </nav>
  <!-- /* Code inspiré de celui de Mary Lou sur http://tympanus.net/codrops/2011/12/26/css3-lightbox/-->

  <div id="galerie1" class="cssgal">
    <!-- ancre et conteneur de la galerie  
  avec index propre à chaque galerie-->
    <ul class="lb-album">
      <li>
        <a href="#gal-1-image-1">
          <!----lien de la vignette vers le conteneur "lightbox" de la 1ère image-->
          <img class="gal" width="120" height="90" alt="image01" src="img/01.jpg">
        </a>
        <div id="gal-1-image-1" class="lb-overlay">
          <!--ancre de la 1ère image, background opaque-->
          <img alt="image01" src="img/01.jpg">
          <div>
            <h3>LOGO CAROLO</h3>
             <!-- Controls -->
    <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
            <!--titre de l'image grand format-->
            <!--<a class="lb-prev" href="#gal-1-image-4">Prev</a>
            lien vers image précédente
            <a class="lb-next" href="#gal-1-image-2">Next</a>-->
            <!--lien vers image suivante-->
          </div>
          <a class="lb-close nolink" href="#galerie1">x Close</a>
          <!--lien vers l'ancre de la galerie: fermeture-->
        </div>
      </li>
      <li>
        <a href="#gal-1-image-2">
          <img class="gal" width="120" height="90" alt="image02" src="img/02.jpg">
        </a>
        <div id="gal-1-image-2" class="lb-overlay">
          <img alt="image02" src="img/02.jpg">
          <div>
            <h3>ETUDIANTS</h3>
            <a class="lb-prev" href="#gal-1-image-1">Prev</a>
            <a class="lb-next" href="#gal-1-image-3">Next</a>
          </div>
          <a class="lb-close nolink" href="#galerie1">x Close</a>
        </div>
      </li>
      <li>
        <a href="#gal-1-image-3">
          <img class="gal" width="120" height="90" alt="image03" src="img/03.jpg">
        </a>
        <div id="gal-1-image-3" class="lb-overlay">
          <img alt="image03" src="img/03.jpg">
          <div>
            <h3>CAMPUS</h3>
            <a class="lb-prev" href="#gal-1-image-2">Prev</a>
            <a class="lb-next" href="#gal-1-image-4">Next</a>
          </div>
          <a class="lb-close nolink" href="#galerie1">x Close</a>
        </div>
      </li>
      <li>
        <a href="#gal-1-image-4">
          <img class="gal" width="120" height="90" alt="image04" src="img/04.jpg">
        </a>
        <div id="gal-1-image-4" class="lb-overlay">
          <img alt="image04" src="img/04.jpg">
          <div>
            <h3>CONCOURS CUISINE</h3>
            <a class="lb-prev" href="#gal-1-image-3">Prev</a>
            <a class="lb-next" href="#gal-1-image-1">Next</a>
          </div>
          <a class="lb-close nolink" href="#galerie1">x Close</a>
        </div>
      </li>
    </ul>
    <!-- Controls -->
    <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

  <div id="galerie1" class="cssgal">
    <!-- ancre et conteneur de la galerie  
  avec index propre à chaque galerie-->
    <ul class="lb-album">
      <li>
        <a href="#gal-1-image-1">
          <!----lien de la vignette vers le conteneur "lightbox" de la 1ère image-->
          <img class="gal" width="120" height="90" alt="image01" src="img/01.jpg">
        </a>
        <div id="gal-1-image-1" class="lb-overlay">
          <!--ancre de la 1ère image, background opaque-->
          <img alt="image01" src="img/01.jpg">
          <div>
            <h3>LOGO CAROLO</h3>
             <!-- Controls -->
    <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
            <!--titre de l'image grand format-->
            <!--<a class="lb-prev" href="#gal-1-image-4">Prev</a>
            lien vers image précédente
            <a class="lb-next" href="#gal-1-image-2">Next</a>-->
            <!--lien vers image suivante-->
          </div>
          <a class="lb-close nolink" href="#galerie1">x Close</a>
          <!--lien vers l'ancre de la galerie: fermeture-->
        </div>
      </li>
      <li>
        <a href="#gal-1-image-2">
          <img class="gal" width="120" height="90" alt="image02" src="img/02.jpg">
        </a>
        <div id="gal-1-image-2" class="lb-overlay">
          <img alt="image02" src="img/02.jpg">
          <div>
            <h3>ETUDIANTS</h3>
            <a class="lb-prev" href="#gal-1-image-1">Prev</a>
            <a class="lb-next" href="#gal-1-image-3">Next</a>
          </div>
          <a class="lb-close nolink" href="#galerie1">x Close</a>
        </div>
      </li>
      <li>
        <a href="#gal-1-image-3">
          <img class="gal" width="120" height="90" alt="image03" src="img/03.jpg">
        </a>
        <div id="gal-1-image-3" class="lb-overlay">
          <img alt="image03" src="img/03.jpg">
          <div>
            <h3>CAMPUS</h3>
            <a class="lb-prev" href="#gal-1-image-2">Prev</a>
            <a class="lb-next" href="#gal-1-image-4">Next</a>
          </div>
          <a class="lb-close nolink" href="#galerie1">x Close</a>
        </div>
      </li>
      <li>
        <a href="#gal-1-image-4">
          <img class="gal" width="120" height="90" alt="image04" src="img/04.jpg">
        </a>
        <div id="gal-1-image-4" class="lb-overlay">
          <img alt="image04" src="img/04.jpg">
          <div>
            <h3>CONCOURS CUISINE</h3>
            <a class="lb-prev" href="#gal-1-image-3">Prev</a>
            <a class="lb-next" href="#gal-1-image-1">Next</a>
          </div>
          <a class="lb-close nolink" href="#galerie1">x Close</a>
        </div>
      </li>
    </ul>
    <!-- Controls -->
    <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

  <div id="galerie1" class="cssgal">
    <!-- ancre et conteneur de la galerie  
  avec index propre à chaque galerie-->
    <ul class="lb-album">
      <li>
        <a href="#gal-1-image-1">
          <!----lien de la vignette vers le conteneur "lightbox" de la 1ère image-->
          <img class="gal" width="120" height="90" alt="image01" src="img/01.jpg">
        </a>
        <div id="gal-1-image-1" class="lb-overlay">
          <!--ancre de la 1ère image, background opaque-->
          <img alt="image01" src="img/01.jpg">
          <div>
            <h3>LOGO CAROLO</h3>
             <!-- Controls -->
    <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
            <!--titre de l'image grand format-->
            <!--<a class="lb-prev" href="#gal-1-image-4">Prev</a>
            lien vers image précédente
            <a class="lb-next" href="#gal-1-image-2">Next</a>-->
            <!--lien vers image suivante-->
          </div>
          <a class="lb-close nolink" href="#galerie1">x Close</a>
          <!--lien vers l'ancre de la galerie: fermeture-->
        </div>
      </li>
      <li>
        <a href="#gal-1-image-2">
          <img class="gal" width="120" height="90" alt="image02" src="img/02.jpg">
        </a>
        <div id="gal-1-image-2" class="lb-overlay">
          <img alt="image02" src="img/02.jpg">
          <div>
            <h3>ETUDIANTS</h3>
            <a class="lb-prev" href="#gal-1-image-1">Prev</a>
            <a class="lb-next" href="#gal-1-image-3">Next</a>
          </div>
          <a class="lb-close nolink" href="#galerie1">x Close</a>
        </div>
      </li>
      <li>
        <a href="#gal-1-image-3">
          <img class="gal" width="120" height="90" alt="image03" src="img/03.jpg">
        </a>
        <div id="gal-1-image-3" class="lb-overlay">
          <img alt="image03" src="img/03.jpg">
          <div>
            <h3>CAMPUS</h3>
            <a class="lb-prev" href="#gal-1-image-2">Prev</a>
            <a class="lb-next" href="#gal-1-image-4">Next</a>
          </div>
          <a class="lb-close nolink" href="#galerie1">x Close</a>
        </div>
      </li>
      <li>
        <a href="#gal-1-image-4">
          <img class="gal" width="120" height="90" alt="image04" src="img/04.jpg">
        </a>
        <div id="gal-1-image-4" class="lb-overlay">
          <img alt="image04" src="img/04.jpg">
          <div>
            <h3>CONCOURS CUISINE</h3>
            <a class="lb-prev" href="#gal-1-image-3">Prev</a>
            <a class="lb-next" href="#gal-1-image-1">Next</a>
          </div>
          <a class="lb-close nolink" href="#galerie1">x Close</a>
        </div>
      </li>
    </ul>
    <!-- Controls -->
    <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

  <div id="galerie1" class="cssgal">
    <!-- ancre et conteneur de la galerie  
  avec index propre à chaque galerie-->
    <ul class="lb-album">
      <li>
        <a href="#gal-1-image-1">
          <!----lien de la vignette vers le conteneur "lightbox" de la 1ère image-->
          <img class="gal" width="120" height="90" alt="image01" src="img/01.jpg">
        </a>
        <div id="gal-1-image-1" class="lb-overlay">
          <!--ancre de la 1ère image, background opaque-->
          <img alt="image01" src="img/01.jpg">
          <div>
            <h3>LOGO CAROLO</h3>
             <!-- Controls -->
    <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
            <!--titre de l'image grand format-->
            <!--<a class="lb-prev" href="#gal-1-image-4">Prev</a>
            lien vers image précédente
            <a class="lb-next" href="#gal-1-image-2">Next</a>-->
            <!--lien vers image suivante-->
          </div>
          <a class="lb-close nolink" href="#galerie1">x Close</a>
          <!--lien vers l'ancre de la galerie: fermeture-->
        </div>
      </li>
      <li>
        <a href="#gal-1-image-2">
          <img class="gal" width="120" height="90" alt="image02" src="img/02.jpg">
        </a>
        <div id="gal-1-image-2" class="lb-overlay">
          <img alt="image02" src="img/02.jpg">
          <div>
            <h3>ETUDIANTS</h3>
            <a class="lb-prev" href="#gal-1-image-1">Prev</a>
            <a class="lb-next" href="#gal-1-image-3">Next</a>
          </div>
          <a class="lb-close nolink" href="#galerie1">x Close</a>
        </div>
      </li>
      <li>
        <a href="#gal-1-image-3">
          <img class="gal" width="120" height="90" alt="image03" src="img/03.jpg">
        </a>
        <div id="gal-1-image-3" class="lb-overlay">
          <img alt="image03" src="img/03.jpg">
          <div>
            <h3>CAMPUS</h3>
            <a class="lb-prev" href="#gal-1-image-2">Prev</a>
            <a class="lb-next" href="#gal-1-image-4">Next</a>
          </div>
          <a class="lb-close nolink" href="#galerie1">x Close</a>
        </div>
      </li>
      <li>
        <a href="#gal-1-image-4">
          <img class="gal" width="120" height="90" alt="image04" src="img/04.jpg">
        </a>
        <div id="gal-1-image-4" class="lb-overlay">
          <img alt="image04" src="img/04.jpg">
          <div>
            <h3>CONCOURS CUISINE</h3>
            <a class="lb-prev" href="#gal-1-image-3">Prev</a>
            <a class="lb-next" href="#gal-1-image-1">Next</a>
          </div>
          <a class="lb-close nolink" href="#galerie1">x Close</a>
        </div>
      </li>
    </ul>
    <!-- Controls -->
    <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

  <div id="galerie1" class="cssgal">
    <!-- ancre et conteneur de la galerie  
  avec index propre à chaque galerie-->
    <ul class="lb-album">
      <li>
        <a href="#gal-1-image-1">
          <!----lien de la vignette vers le conteneur "lightbox" de la 1ère image-->
          <img class="gal" width="120" height="90" alt="image01" src="img/01.jpg">
        </a>
        <div id="gal-1-image-1" class="lb-overlay">
          <!--ancre de la 1ère image, background opaque-->
          <img alt="image01" src="img/01.jpg">
          <div>
            <h3>LOGO CAROLO</h3>
             <!-- Controls -->
    <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
            <!--titre de l'image grand format-->
            <!--<a class="lb-prev" href="#gal-1-image-4">Prev</a>
            lien vers image précédente
            <a class="lb-next" href="#gal-1-image-2">Next</a>-->
            <!--lien vers image suivante-->
          </div>
          <a class="lb-close nolink" href="#galerie1">x Close</a>
          <!--lien vers l'ancre de la galerie: fermeture-->
        </div>
      </li>
      <li>
        <a href="#gal-1-image-2">
          <img class="gal" width="120" height="90" alt="image02" src="img/02.jpg">
        </a>
        <div id="gal-1-image-2" class="lb-overlay">
          <img alt="image02" src="img/02.jpg">
          <div>
            <h3>ETUDIANTS</h3>
            <a class="lb-prev" href="#gal-1-image-1">Prev</a>
            <a class="lb-next" href="#gal-1-image-3">Next</a>
          </div>
          <a class="lb-close nolink" href="#galerie1">x Close</a>
        </div>
      </li>
      <li>
        <a href="#gal-1-image-3">
          <img class="gal" width="120" height="90" alt="image03" src="img/03.jpg">
        </a>
        <div id="gal-1-image-3" class="lb-overlay">
          <img alt="image03" src="img/03.jpg">
          <div>
            <h3>CAMPUS</h3>
            <a class="lb-prev" href="#gal-1-image-2">Prev</a>
            <a class="lb-next" href="#gal-1-image-4">Next</a>
          </div>
          <a class="lb-close nolink" href="#galerie1">x Close</a>
        </div>
      </li>
      <li>
        <a href="#gal-1-image-4">
          <img class="gal" width="120" height="90" alt="image04" src="img/04.jpg">
        </a>
        <div id="gal-1-image-4" class="lb-overlay">
          <img alt="image04" src="img/04.jpg">
          <div>
            <h3>CONCOURS CUISINE</h3>
            <a class="lb-prev" href="#gal-1-image-3">Prev</a>
            <a class="lb-next" href="#gal-1-image-1">Next</a>
          </div>
          <a class="lb-close nolink" href="#galerie1">x Close</a>
        </div>
      </li>
    </ul>
    <!-- Controls -->
    <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

  


  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
  </script>
</body>

</html>
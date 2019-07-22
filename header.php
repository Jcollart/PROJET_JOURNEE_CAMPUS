<!DOCTYPE html>
<html lang="fr, FR">
<!-- Pour indexation et lecteurs d'écran -->

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>HEADER</title>
  <meta name="author" content="Jérôme COLLART & Gaël PONSARD">
  <meta name="description" content="description du site en max 3 phrases courtes -156 carac">
  <!-- Si vous voulez une favicon enregistrez-la dans le même répertoire que la page
    d'index du site, sous le format .ico pour compatibilié IE6 et linkez la-->
    

  <link rel="stylesheet" href="css/reset.css">
  <link rel="stylesheet" href="css/header.css">
  <link rel="stylesheet" href="css/hover-min.css">

</head>

<body>
  <!-- NAVBAR BOOTSTRAP-->
  <nav class="mynavbar navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="index.php"><img id="logo" src="img/logoVNB.png" alt="logo"/></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="index.php"><i style="font-size:1em" class="fas fa-home"></i><span class="sr-only">(current)</span></a>
        </li>
        <!--<li class="nav-item">
          <a class="nav-link" href="https://www.charleville-mezieres.fr/">Lien CM</a>
        </li>-->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false" hvr-grow-shadow hvr-underline-from-center>
            Activitées proposées
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="formulexpress.php">CAROLO EXPRESS</a>
            <a class="dropdown-item" href="formulwarrior.php">CAROLO WARRIOR</a>
            <a class="dropdown-item" href="formulcuisine.php">CAROLO CUISINE</a>
            
            
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="formulpiquenique.php">CAROLO PIQUE-NIQUE</a>
          </div>
        </li>
        <li class="nav-item">  
          <a class="nav-link" href="https://www.charleville-mezieres.fr/"><img id="logoVNB" src="img/logoVNB.png" alt="logoVNB"/></a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" id="contact" href="formulcontact.php">Contact</a>
        </li> 
        <li class="nav-item active">
          <a class="nav-link" id="faq" href="faq.php">FAQ</a>
        </li> 
      </ul>
      
    </div>
  </nav>

</body>

</html>
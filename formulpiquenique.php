<!DOCTYPE html>
<html lang="fr, FR">
<!-- Pour indexation et lecteurs d'écran -->

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>FORMULAIRE PIQUE NIQUE</title>
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
              <a class="nav-link" href="#"><i style="font-size:1em" class="fas fa-home"></i><span class="sr-only">(current)</span></a>
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
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit"><i style="font-size:1em" class="fas fa-search"></i></button>
          </form>
        </div>
      </nav>

<center><h1 style="color:rgb(233, 95, 16)"> INSCRIPTION PIQUE-NIQUE </h1></br>
<p>Merci de remplir les champs ci dessous pour reserver votre repas </br>
    a la plaine du mont olympe pour le prix de 2.5€ </br>
    pour les 200 premieres réservations
</p></center></br>


        <form action="/ma-page-de-formulaire" method="post">
            <div>
                <label for="name"><strong>Nom :</strong></label>
                <input type="text" id="name" name="Votre noms">
            </div>
        </br>
            <div>
                    <label for="name"><strong>Prénom :</strong></label>
                    <input type="text" id="surname" name="Votre prénom">
                </div>
            </br>
                <div>
                        <label for="name"><strong>Mobile :</strong></label>
                        <input type="text" id="name" name="Votre téléphone mobile">
                    </div>
                </br>
            <div>
                <label for="mail"><strong>E-mail :</strong></label>
                <input type="email" id="mail" name="votre email">
            </div>
        </br>
            <div>
                <label for="name"><strong>Repas=2,5€</strong></label>
                <input id="reserve" name="reservation repas"></input>
            </div>
            <div class="button">
                <button type="button" class="btn btn-light"><strong>Réserver le repas</strong></button>
            </div>        

        </form></br></br>

        <section>

                <center><h2> Vous désirez vous inscrire à une autre activitée ?</h2>
                    <div class="arrow_box"></div></br></br>
              
                <section>
                        <button type="button" style="color:rgb(233, 95, 16)" class="btn btn-light">INSCRIPTION CAROLO EXPRESS</button>
                </section></br>
              
                <section>
                        <button type="button" style="color:rgb(233, 95, 16)" class="btn btn-light">INSCRIPTION CAROLO WARRIOR</button>
                </section></br>
              
                <section>
                        <button type="button" style="color:rgb(233, 95, 16)" class="btn btn-light">INSCRIPTION CONCOURS DE CUISINE</button>
                </section></br>
              
              </section></center>



        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
      </script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
      </script>
    </body>
    
    </html>
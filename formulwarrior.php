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
    <?php include("header.php"); ?>
  

<center><h1 style="color:rgb(233, 95, 16)"> INSCRIPTION CAROLO WARRIOR </h1></br>
<p>Merci de remplir les champs ci dessous pour inscrire votre équipe </br>
    et participer au carolo warrior (relai sportif et ludique) et qui pourra  </br>
      vous permettre de gagner des cadeaux en recompense de vos efforts. </br>
          
</p></center></br>


        <div class="form" action="/ma-page-de-formulaire" method="post">
            <div>
                    <label for="name"><strong>Etablissement:</strong></label>
                    <select name="etablissement" id="etablissement">
                            <option value="Sévignée">Sévigné</option>
                            <option value="Chanzy">Chanzy</option>
                            <option value="Monge">Monge</option>
                            <option value="Bazin">Bazin</option>
                            
                    </select>
                </div>
                <div>
                        <label for="name"><strong>Equipe:</strong></label>
                        <input type="text" id="equipe" name="equipe">
                    </div>


            <div>
                <label for="name"><strong>Nom:</strong></label>
                <input type="text" id="name" name="Votre noms">
            </div>
        </br>
            <div>
                    <label for="name"><strong>Prénom:</strong></label>
                    <input type="text" id="surname" name="Votre prénom">
                </div>
            </br>
                <div>
                        <label for="name"><strong>Mobile:</strong></label>
                        <input type="text" id="name" name="Votre téléphone mobile">
                    </div>
                </br>
            <div>
                <label for="mail"><strong>E-mail:</strong></label>
                <input type="email" id="mail" name="votre email">
            </div>
        </br>
            <div class="row justify-content-center">
                <button type="button" class="btn btn-light"><strong>S'inscrire</strong></button>
            </div>        

</div></br></br>

        <section>

                <center><h2> Vous désirez vous inscrire à une autre activitée ?</h2>
                    <div class="arrow_box"></div></br></br>
              
                <section>
                <a href="formulexpress.php" ><button type="button" style="color:rgb(233, 95, 16)" class="btn btn-light">INSCRIPTION CAROLO EXPRESS</button></a>
                </section></br>
              
                <section>
                <a href="formulpiquenique.php" ><button type="button" style="color:rgb(233, 95, 16)" class="btn btn-light">INSCRIPTION PIQUE NIQUE</button></a>
                </section></br>
              
                <section>
                <a href="formulcuisine.php" ><button type="button" style="color:rgb(233, 95, 16)"  class="btn btn-light">INSCRIPTION CONCOURS DE CUISINE</button></a>
                </section></br>
              
              </section></center>

              <?php include("footer1.php"); ?>

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
      </script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
      </script>
    </body>
    
    </html>
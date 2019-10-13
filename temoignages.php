 <?php include 'connectbdd.php';

$temoignage = isset($_POST['texte_temoignage']) ? $_POST['texte_temoignage'] : NULL;

$prenom = isset($_POST['prenom_temoin']) ? $_POST['prenom_temoin'] : NULL;

$req = $bdd->prepare("SELECT * FROM temoignage ");

$req->execute();

    ?>


  
 
    
 
  
  
    <div class="titre"><h2>TEMOIGNAGES</h2></div>
        <div id="carouselTemoignages" class="carousel slide" data-ride="carousel" >
            <div class="carousel-inner" style="margin-bottom:100px;">
				<div class="carousel-item active">
                    <div class="card mb-3" id="mb">
                        <div class="row no-gutters">
                            <div class="col-md-4 card-left card-left">
                                <img src="img/01.jpg" class="card-img1"
                                    alt="La rentrée des étudiants - Témoignage ">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <p class="card-text"> </p>
                                       <p class="card-text"> </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="card mb-3" id="mb">
                        <div class="row no-gutters">
                            <div class="col-md-4 card-left">
                                <img src="img/01.jpg" class="card-img1"
                                    alt="La rentrée des étudiants - Témoignage ">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <p class="card-text"> « J’ai apprécié cette journée et toutes les villes devraient
                                        organiser ce genre de manifestation pour les étudiants. Moi j’ai participé au
                                        Carolo Express, c’était fun ! »</p>
                                    <p class="card-text">Jérémy – 21 ans</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="card mb-3" id="mb">
                        <div class="row no-gutters">
                            <div class="col-md-4 card-left card-left card-left">
                                <img src="img/01.jpg" class="card-img1"
                                    alt="La rentrée des étudiants - Témoignage ">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <p class="card-text">« Le Carolo Warrior ! Des épreuves fantastiques
                                      et quelle ambiance ! Des étudiants qui crient le slogan de leur équipe,
                                      des banderoles de soutien ! Une vraie dynamique de la Rentrée étudiante à Charleville-Mézières ! »</p>
                                    <p class="card-text">Kylian - 22 ans</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="card mb-3" id="mb">
                        <div class="row no-gutters">
                            <div class="col-md-4 card-left card-left">
                                <img src="img/01.jpg" class="card-img1" alt="La rentrée des étudiants - Témoignage ">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <p class="card-text"> « Superbe journée ! J’ai notamment adoré le Carolo Express qui
                                        m’a permis de découvrir des lieux que je ne connaissais pas à Charleville-Mézières,
                                        c’était super intéressant. Je recommande sans problème ! »</p>
                                    <p class="card-text">Claire - 19 ans</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="card mb-3" id="mb">
                        <div class="row no-gutters">
                            <div class="col-md-4 card-left">
                                <img src="img/01.jpg" class="card-img1" alt="La rentrée des étudiants - Témoignage ">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <p class="card-text"> « TOP !!! Je compte bien me réinscrire cette année… et gagner
                                        le GROS LOT <i class="fas fa-smile"></i> »</p>
                                    <p class="card-text">Jaahed – 19 ans</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="card mb-3" id="mb">
                        <div class="row no-gutters">
                            <div class="col-md-4 card-left">
                                <img src="img/01.jpg" class="card-img1" alt="La rentrée des étudiants - Témoignage ">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <p class="card-text"></p>
                                    <p class="card-text"></p>


                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="card mb-3">
                        <div class="row no-gutters">
						 <div class="col-md-4 card-left">
                                <img src="img/01.jpg" class="card-img1" alt="La rentrée des étudiants - Témoignage ">
                            </div>
                            <div class="col-md-8">

                                <div class="card-body align-items-center">
                                    <p class="card-text"> « J’ai apprécié cette journée et toutes les villes devraient
                                        organiser ce genre de manifestation pour les étudiants. Moi j’ai participé au
                                        Carolo Express, c’était fun ! »</p>
                                    <p class="card-text">Jérémy – 21 ans</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="card mb-3">
                        <div class="row no-gutters">
                            <div class="col-md-4 card-left">
                                <img src="img/01.jpg" class="card-img1" alt="La rentrée des étudiants - Témoignage ">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <p class="card-text"> « Superbe journée ! J’ai notamment adoré le Carolo Express qui
                                        m’a permis de découvrir des lieux que je ne connaissais pas à Charleville,
                                        c’était super intéressant. Je recommande sans problème ! »</p>
                                    <p class="card-text">Claire - 19ans</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="card mb-3">
                        <div class="row no-gutters">
                            <div class="col-md-4 card-left">
                                <img src="img/01.jpg" class="card-img1" alt="La rentrée des étudiants - Témoignage ">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body align-items-center">
                                    <p class="card-text"> « TOP !!! Je compte bien me réinscrire cette année… et gagner
                                        le GROS LOT <i class="fas fa-smile"></i> #GUIGUI MONEY FROM NEUILLY»</p>
                                    <p class="card-text">Jaahed – 19 ans</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselTemoignages" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" id="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselTemoignages" role="button" data-slide="next">
                <span class="carousel-control-next-icon" id="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>

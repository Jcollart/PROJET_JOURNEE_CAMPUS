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
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <link rel="stylesheet" href="css/hover-min.css">

    <link rel="stylesheet" href="css/style.css">    <link rel="stylesheet" href="css/footer.css">



    <!-- LOAD JQUERY LIBRARY -->
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.js"></script>

    <!-- LOADING FONTS AND ICONS -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:700|Oswald:300" rel="stylesheet" property="stylesheet"
        type="text/css" media="all">
    <script src='https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js'></script>
    <link rel="stylesheet" type="text/css" href="fonts/pe-icon-7-stroke/css/pe-icon-7-stroke.css">
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome/css/font-awesome.css">

    <!-- REVOLUTION STYLE SHEETS -->
    <link rel="stylesheet" type="text/css" href="css/settings.css">

    <!-- FONT AND STYLE FOR BASIC DOCUMENTS, NO NEED FOR FURTHER USAGE IN YOUR PROJECTS-->
    <link href="https://fonts.googleapis.com/css?family=Roboto%3A700%2C300" rel="stylesheet" property="stylesheet"
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
    <?php include("header2.php") ; ?>


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


   <!-- <div class="parallax-window" data-parallax="scroll" data-image-src="img/placeducale.jpg" alt=""></div>-->

    <!--/////////////////////TEMOIGNAGES///////////////////////-->

    <section class=temoignages>
       <?php include ("temoignages.php") ; ?>
    </section>

    </main>



    <!--/////////////////////FOOTER///////////////////////-->



    <!-- Footer -->
    <footer>

    <div class="container">
    <p>Partenaires :</p>
        <div><a href="" target="_blank"><img src="img/logos/supardenne_logo_rvb_couleur_horizontal.jpg" style="height:50px" 
                    class="hvr-pulse" alt=""></a></div>
        <div><a href="https://www.grandest.fr/" target="_blank"><img src="img/logos/grandest1.png"
                    class="hvr-pulse" alt=""></a></div>
        <div><a href="http://www.ardenne-metropole.fr" target="_blank"><img src="img/logos/ARDENNE-LOGO-RVB.png"
                    class="hvr-pulse" alt=""></a></div>
                    <div><a href="http://www.ardennes.gouv.fr/" target="_blank"><img src="img/logos/Prefecture new.jpg"
                                class="hvr-pulse" alt=""></a></div>
        <div><a href="http://www.crous-reims.fr/" target="_blank"><img src="img/logos/Crous_Reims.png" style="height:50px" class="hvr-pulse"
                    alt=""></a>
        </div>
        <div><a href="http://www.decathlon.fr" target="_blank"><img src="img/logos/decathlon.jpg" class="hvr-pulse"
                    alt=""></a></div>
        <div><a href="http://www.facebook.com/associationflap" target="_blank"><img
                    src="img/logos/FLaP (nouveau logo 2019)-1.png" class="hvr-pulse" alt=""></a></div>
        <div><a href="" target="_blank"><img src="img/logos/INDEPENDANT__DURABLE-1.png" class="hvr-pulse" style="height:50px" alt=""></a></div>
        <div><a href="" target="_blank"><img src="img/logos/intercampus.jpg" class="hvr-pulse" style="height:50px" alt=""></a></div>
        <div><a href="http://www.https://www.mcdonalds.fr" target="_blank"><img src="img/logos/Mc_donald.jpg" class="hvr-pulse" style="height:50px" alt=""></a></div>
        <div><a href="http://www.jeanteur.fr" target="_blank"><img src="img/logos/jeanteur.png" class="hvr-pulse"
                    alt=""></a></div>
        <div><a href="http://www.orange.fr"><img src="img/logos/orange-logo-vector.png" style="height:50px" class="hvr-pulse" alt=""></a>
        </div>
        <div><a href="https://o-tacos.com/fr/" target="_blank"><img src="img/logos/otacos.png" style="height:60px" class="hvr-pulse"
                    alt=""></a></div>
        <div><a href="https://www.yves-rocher.fr/" target="_blank"><img src="img/logos/yvesrocher.png" class="hvr-pulse"
                    alt=""></a>
        </div>

        <div><a href="http://www.terraltitude.com" target="_blank"><img src="img/logos/TERRALTITUDE LOGO.jpg"
                    class="hvr-pulse" alt=""></a></div>
        <div><a href="http://www.ardennes.com › DETAIL" target="_blank"><img src="img/logos/vitrines-charleville.png" style="height:50px"
                    class="hvr-pulse" alt=""></a></div>
        <div><a href="http://www.leroymerlin.fr › DETAIL" target="_blank"><img src="img/logos/Leroy_Merlin.png" style="height:60px"
                    class="hvr-pulse" alt=""></a></div>            

    </div>          

    </div>


        <!-- Footer Elements -->

        <!-- Add font awesome icons -->
        <div class="reseaux_sociaux">
            <a class="facebook" style="color: red !important" href="https://www.facebook.com/etudiantcarolo/"> <i class="fab fa-facebook fa-3x"></i></a>
        </div>
        <!-- Copyright -->
        <div class="text":center>
        <center><p class="ecrit" style="color:black;">© 2019 Copyright: <a href="" style="color:black;">G.Ponsard & J.Collart</a><a href="mentionslegales.php" style="color:black;">
                Mentions légales </a></p></center>
    </div>
    <br>
        <!-- Copyright -->
    </footer>
    <script>
        Date.prototype.addDays = function(days) {
    var date = new Date(this.valueOf());
    date.setDate(date.getDate() + days);
    return date;
}

//initializeClock("clockdiv",endtime);

function getTimeRemaining(endtime) {
  var t = Date.parse(endtime) - Date.parse(new Date());
  var seconds = Math.floor((t / 1000) % 60);
  var minutes = Math.floor((t / 1000 / 60) % 60);
  var hours = Math.floor((t / (1000 * 60 * 60)) % 24);
  var days = Math.floor(t / (1000 * 60 * 60 * 24));
  return {
    'total': t,
    'days': days,
    'hours': hours,
    'minutes': minutes,
    'seconds': seconds
  };
}

function initializeClock(id, endtime) {
  var clock = document.getElementById(id);
  clock.style.display = 'block';
  var daysSpan = clock.querySelector('.days');
  var hoursSpan = clock.querySelector('.hours');
  var minutesSpan = clock.querySelector('.minutes');
  var secondsSpan = clock.querySelector('.seconds');


  function updateClock() {
    var t = getTimeRemaining(endtime);

    daysSpan.innerHTML = (t.days);
    hoursSpan.innerHTML = ('0' + t.hours).slice(-2);
    minutesSpan.innerHTML = ('0' + t.minutes).slice(-2);
    secondsSpan.innerHTML = ('0' + t.seconds).slice(-2);

    if (t.total <= 0) {
      var live = document.getElementById('live');
      clearInterval(timeinterval);
      clock.style.display='none';
      if (clock.style.display=='none') {
        live.style.display='block';
      }
    }
  }

  updateClock();
  var timeinterval = setInterval(updateClock, 1000);
}


var endtime = new Date();

endtime = endtime.addDays();
var now = new Date();


var schedule = [
      ['September 22 2019 22:30:00 am', 'October 03 2019 :00:00 pm'] 
  [now, endtime]
];
// iterate over each element in the schedule
for(var i=0; i<schedule.length; i++){
  var startDate = schedule[i][0];
  var endDate = schedule[i][1];

  // put dates in milliseconds for easy comparisons
  var startMs = Date.parse(startDate);
  var endMs = Date.parse(endDate);
  var currentMs = Date.parse(new Date());

  // if current date is between start and end dates, display clock
  if(endMs > currentMs && currentMs >= startMs ){
      initializeClock('clockdiv', endDate);
  }
}
</script>


    <script src="https://cdn.jsdelivr.net/parallax.js/1.4.2/parallax.min.js"></script>
    
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

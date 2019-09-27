<div id="carouselPresentation" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="card mb-3">
                        <div class="row no-gutters">
                            <div class="col-md-4 card-left">
                                <img src="img/01.jpg" class="card-img"
                                    alt="La rentrée des étudiants - Qu'est-ce que c'est? ">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">Qu'est-ce que c'est ?</h5><br>
                                    <p class="card-text"> La Rentrée des Etudiants est une journée d'intégration ouverte
                                        à tous les étudiants du territoire. C’EST LA JOURNEE DES ETUDIANTS !!!<br><br>
                                        A l'initiative de la Ville de Charleville-Mézières et en partenariat avec les
                                        associations étudiantes, cette manifestation vise à souhaiter la bienvenue à
                                        tous les étudiants du territoire ! <br>Cette journée est une occasion festive,
                                        ludique, sportive et culturelle de découvrir la ville, de rencontrer d'autres
                                        étudiants issus des différents établissements du territoire.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="card mb-3">
                        <div class="row no-gutters">
                            <div class="col-md-4 card-left">
                                <img src="img/01.jpg" class="card-img"
                                    alt="La rentrée des étudiants - C'est pour qui? ">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">C'est pour qui ?</h5><br>
                                    <p class="card-text"> Cette journée est proposée à tous les étudiants du territoire
                                        de Charleville-Mézières jusqu’à Sedan. <br><br>Tous les étudiants qui entament ou
                                        poursuivent une formation post bac sur le territoire peuvent participer à cette
                                        manifestation.<br><br>
                                        Venez nombreux !
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="card mb-3">
                        <div class="row no-gutters">
                            <div class="col-md-4 card-left">
                                <img src="img/01.jpg" class="card-img" alt="La rentrée des étudiants - C'est quand? ">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">C'est quand ?</h5><br>
                                    <p class="card-text"> La Rentrée des Etudiants 2019 aura lieu le jeudi 3 octobre
                                        prochain !<BR> <br>Prenez date !!! </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="card mb-3">
                        <div class="row no-gutters">
                            <div class="col-md-4 card-left">
                                <img src="img/01.jpg" class="card-img" alt="La rentrée des étudiants - C'est où? ">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">C'est où ?</h5><br>
                                    <p class="card-text">La manifestation se déroule sur la Ville de
                                        Charleville-Mézières à plusieurs endroits en fonction des activités de la
                                        journée.<br><br>
                                        A titre d’exemple, le « Carolo Express » vise à la découverte des lieux
                                        saillants de la ville, plusieurs activités auront lieu également sur la Plaine
                                        du Mont Olympe ou sur la Place Ducale.
                                         </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <center><div id="clockdiv">
   <div>
    <span class="days">00</span>
    <div class="smalltext">JOURS</div>
  </div>
  <div>
    <span class="hours">00</span>
    <div class="smalltext">HEURES</div>
  </div>
  <div>
    <span class="minutes">00</span>
    <div class="smalltext">MINUTES</div>
  </div>
  <div>
    <span class="seconds">00</span>
    <div class="smalltext">SECONDES</div>
  </div>
</div></center>

<script>
Date.prototype.addDays = function(days) {
   var date = new Date(this.valueOf());
    date.setDate(date.getDate() + days);
   return date;
}

initializeClock("clockdiv",endtime);

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

endtime = endtime.addDays(9);
var now = new Date();


var schedule = [
    /*  ['September 23 2019 22:40:59 pm', 'October 03 2019 00:00:00 am'] */
  [now, endtime]
];
 iterate over each element in the schedule
for(var i=0; i<schedule.length; i++){
  var startDate = schedule[i][0];
  var endDate = schedule[i][1];

 put dates in milliseconds for easy comparisons
  var startMs = Date.parse(startDate);
  var endMs = Date.parse(endDate);
  var currentMs = Date.parse(new Date());

 if current date is between start and end dates, display clock
  if(endMs > currentMs && currentMs >= startMs ){
      initializeClock('clockdiv', endDate);
  }
}
</script>


            <a class="carousel-control-prev" href="#carouselPresentation" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="false"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselPresentation" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="false"></span>
                <span class="sr-only">Next</span>
            </a>
           

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>HEADER</title>
  <meta name="author" content="Jérôme COLLART & Gaël PONSARD">
  <meta name="description" content="description du site en max 3 phrases courtes -156 carac">
  <!-- Si vous voulez une favicon enregistrez-la dans le même répertoire que la page
    d'index du site, sous le format .ico pour compatibilié IE6 et linkez la-->
    
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
  <link rel="stylesheet" href="css/reset.css">
  <link rel="stylesheet" href="css/header1.css">
  <link rel="stylesheet" href="css/hover-min.css">

  </head>

<header>
<ul id="nav">
<li><a href="http://www.ardenne-metropole.fr"><img id="logo" src="img/logoetudiant.png" alt="logo" align="absmiddle"/></a></li>    
<li class="hvr-grow"><a href="index.php"><i style="font-size:3em" class="fas fa-home"></i></a></li><!-- n1 -->
<li><a href="#">Activitées</a><!-- n1 -->
	<ul>
		<li><a href="#">carolo express <img src="img/multi.png"  border="0" width="20" height="20" align="absmiddle"></a><!-- n2 -->
			<ul>
				<li><a href="#collapseOne">Description</a></li><!-- n3 -->
				<li><a href="formulexpress.php">Inscription</a></li><!-- n3 -->
			</ul>
		</li>
		<li><a href="#">carolo pique-nique <img src="img/multi.png" border="0" width="15" height="15" alt="" align="absmiddle"></a><!-- n2 -->
			<ul>
				<li><a href="#collapseTwo">Description</a></li><!-- n3 -->
				<li><a href="formulpiquenique.php">Inscription</a></li><!-- n3 -->
			</ul>
        </li>
        <li><a href="#">carolo warrior<img src="img/multi.png" border="0" width="15" height="15" alt="" align="absmiddle"></a><!-- n2 -->
			<ul>
				<li><a href="#collapseThree">Description</a></li><!-- n3 -->
				<li><a href="formulwarrior.php">Inscription</a></li><!-- n3 -->
			</ul>
        </li>
        <li><a href="#">carolo cuisine <img src="img/multi.png" border="0" width="15" height="15" alt="" align="absmiddle"></a><!-- n2 -->
			<ul>
				<li><a href="#collapseFour">Description</a></li><!-- n3 -->
				<li><a href="formulcuisine.php">Inscription</a></li><!-- n3 -->
			</ul>
		</li>
		
	</ul>
</li>
<li class="">  
         <a href="https://www.charleville-mezieres.fr/"><img id="logocm" src="img/Logos/logomairieCM.png" alt="logocm"/></a>
        </li>

</li>	
<li><a href="galerie.php">Galerie photos</a></li>
<li><a href="#formulcontact"><i style="font-size:1em" class="fas fa-user"></i>Contact</a></li>
<li><form class="Fbarre">
<input type="search" name "barre" id"champ1" value=" rechercher ..."/>
<button onlick= 'rechercher()'><i style="font-size:1em" class="fas fa-search"></i></button></form></li></ul>

</header>

</html>
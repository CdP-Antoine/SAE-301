<?php
require_once("POO/client.php") ;
require_once("POO/event.php") ;
require_once("POO/lieu-clan.php") ;

$event = new Event(3) ;

?>

<!DOCTYPE html>
<html lang="fr">
<head>
	<title> Déroulé de l'évènement | La Guerre de l'Oiseau </title>

	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Déroulé et explication des événements composant la Guerre de l'Oiseau">
	<meta name="author" content="Agence Plumeuh">
	<meta property="og:title" content="Déroulé de l'événement"/>
	<meta property="og:type" content="event"/>
	<meta property="og:url" content="http://guerreoiseau.mmi-lepuy.fr/deroule.php"/>
	<meta property="og:image" content="Illustrations/Commun-Aux-Pages/favicon.png" />
	<meta property="og:locale" content="fr_FR"/>
	<meta property="og:site_name" content="La Guerre de l'Oiseau"/>

	<link rel="icon" type="image/x-icon" href="Illustrations/Commun-Aux-Pages/favicon.png"/>
	<link href="Deroule/general.css" rel="stylesheet">
	<link href="Commun-Aux-Pages/header.css" rel="stylesheet">
	<link href="global.css" rel="stylesheet">

	<script src="script.js"></script>


</head>
<body>

<header>
	<?php require_once("Commun-Aux-Pages/header.php") ;?>
</header>
<div id="remonter">
	<a href="#"><img src="Illustrations/Commun-Aux-Pages/fleche.png" alt="Remonter en haut de page" ></a>
</div>
<main>
	<?php require_once("Deroule/incl.php") ;?>
</main>

<footer>
	<?php require_once("Commun-Aux-Pages/footer.php") ;?>
</footer>

</body>
</html>
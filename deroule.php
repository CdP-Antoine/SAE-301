<?php
require_once("lib/PHP-librairies/Gestion-URL/anchored_link.php");
require_once("POO/client.php") ;
require_once("POO/event.php") ;
require_once("POO/lieu-clan.php") ;

$event = new Event(3) ;

?>

<!DOCTYPE html>
<html>
<head>
	<title> Déroulé de l'évènement | La Guerre de l'Oiseau </title>

	<meta name="description" content="">
	<meta name="author" content="">
	<link rel="icon" type="image/x-icon" href="Illustrations/Commun-Aux-Pages/favicon.png"/>
	<link href="Deroule/general.css" rel="stylesheet">
	<link href="Commun-Aux-Pages/header.css" rel="stylesheet">
	<link href="global.css" rel="stylesheet">



</head>
<body>

<header>
	<?php require_once("Commun-Aux-Pages/header.php") ;?>
</header>
<div id="remonter">
	<a href="#"><img src="Illustrations/Commun-Aux-Pages/fleche.png" alt="Remonter en haut de page" ></a>
</div>
<main>
	<h1> Détails des événements </h1>
	<?php require_once("Deroule/incl.php") ;?>
</main>

<footer>
	<?php require_once("Commun-Aux-Pages/footer.php") ;?>
</footer>

</body>
</html>
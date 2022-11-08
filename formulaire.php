<?php

?>

<!DOCTYPE html>
<html lang="fr">
<head>
	<title> Inscription | La Guerre de l'Oiseau </title>

	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Formulaire de réservation pour participer à l'événement de la Guerre de l'Oiseau">
	<meta name="author" content="Agence Plumeuh">
	<meta property="og:locale" content="fr_FR"/>
	<meta property="og:type" content="event"/>
	<meta property="og:url" content="http://guerreoiseau.mmi-lepuy.fr/formulaire.php"/>
	<meta property="og:image" content="Illustrations/Commun-Aux-Pages/favicon.png" />
	<meta property="og:title" content="Inscriptions"/>
	<meta property="og:site_name" content="La Guerre de l'Oiseau"/>

	<link rel="icon" type="image/x-icon" href="Illustrations/Commun-Aux-Pages/favicon.png"/>
	<link href="Formulaire/general.css" rel="stylesheet">
	<link href="global.css" rel="stylesheet">

	<script src="Formulaire/scriptForm.js" defer></script>


</head>
<body>

<header>
	<?php require_once("Commun-Aux-Pages/header.php") ;?>
</header>
<div id="remonter">
	<a href="#"><img src="Illustrations/Commun-Aux-Pages/fleche.png" alt="Remonter en haut de page" ></a>
</div>
<main>

<form action="traitement.php" method="POST">
	<section class="box" id="etape0">
		<h2> Pour commencer l'inscription </h2>
		<p> Nous vous demandons de : </p>
		<ul>
			<li> Si vous êtes un professionnel, de préparer votre attestation d'adhésion </li>
			<li> Lire et accepter les conditions d'utilisation </li>
			<li> Lire et accepter les conditions d'accès à l'événement </li>
		</ul>

		<button id="0to1"> Commencer l'inscription </button>
	</section>

	<section class="box" id="etape1">
		<h2> Etape 1 </h2>

		<div>
			<label for="nom">Nom *</label>
			<input type="text" name="nom" placeholder="Gérard" required class="et1">
		</div>
		<div>
			<label for="prenom">Prénom *</label>
			<input type="text" name="prenom" placeholder="Dupuis" required class="et1">
		</div>
		<div>
			<label for="mail">Mail *</label>
			<input type="text" name="mail" placeholder="example@gmail.com" required class="et1">
		</div>

		<button class="button_prev" id="1to0"> Etape précédente </button>
		<button class= "button_next" id="1to2"> Passer à l'étape suivante </button>
	</section>

	<section class="box" id="etape2">
		<h2> Etape 2 </h2>

		<div>
			<div>
				<input type="radio" name="child" value="0" id="enfant" required>
				<label for="child">Enfant</label>
				<div id="enfantdiv">
					<label for="age">Entrez votre âge</label>
					<input type="number" name="age">
				</div>
			</div>
			<div>
				<input type="radio" name="child" value="1" id="adulte" required>
				<label for="child">Adulte</label>
				<div>
					<p>
						Êtes-vous :
					</p>
					<div>
						<input type="radio" name="pro" value="0" id="amateur" selected required>
						<label for="pro">Amateur</label>
					</div>
					<div>
						<input type="radio" name="pro" value="1" id="prof" required>
						<label for="pro">Professionnel</label>
						<div id="profdiv">
							<label for="certificat">Veuillez fournir votre certificat</label>
							<input type="file" name="certificat">
						</div>
					</div>
				</div>
			</div>
		</div>

		<button class="button_prev" id="2to1"> Etape précédente </button>
		<button class="button_next" id="2to3"> Passer à l'étape suivante </button>
	</section>

	<section class=box id="etape3">
		<h2> Etape 3 </h2>
	
		<div>
			<p>
				Quel camp désirez-vous rejoindre ?
			</p>
			<div class="listeblasons">
				<div>
					<input type="radio" name="faction" value="1" required>
					<label for="faction"> Morafen </br><img src="Illustrations/Formulaire/blason_1.svg" alt="Blason de Morafen" class="blason"></label>
				</div>
				<div>
					<input type="radio" name="faction" value="2" required>
					<label for="faction"> Liostra </br><img src="Illustrations/Formulaire/blason_2.svg" alt="Blason de Liostra" class="blason"></label>
				</div>
				<div>
					<input type="radio" name="faction" value="3" required>
					<label for="faction"> Paylen </br><img src="Illustrations/Formulaire/blason_3.png" alt="Blason de Paylen" class="blason"></label>
				</div>
				<div>
					<input type="radio" name="faction" value="4" required>
					<label for="faction"> Viguera </br><img src="Illustrations/Formulaire/blason_4.svg" alt="Blason de Viguera" class="blason"></label>
				</div>
			</div>
		</div>
		<button class="button_prev" id="3to2"> Etape précédente </button>
		<input type="submit" value="Terminer l'inscription">
	</section>
</form>

</main>

<footer>
	<?php require_once("Commun-Aux-Pages/footer.php") ;?>
</footer>

</body>
</html>
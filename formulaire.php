<?php

?>

<!DOCTYPE html>
<html>
<head>
	<title> Inscription | La Guerre de l'Oiseau </title>

	<meta name="description" content="">
	<meta name="author" content="">
	<link rel="icon" type="image/x-icon" href="Illustrations/Commun-Aux-Pages/favicon.png"/>

	<link href="Formulaire/general.css" rel="stylesheet">
	<link href="global.css" rel="stylesheet">

	<script src="Formulaire/scriptForm.js" defer></script>


</head>
<body>

<header>
	<?php require_once("Commun-Aux-Pages/header.php") ;?>
</header>

<main>

<form action="" method="POST">
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
			<input type="text" name="nom" placeholder="Gérard">
		</div>
		<div>
			<label for="prenom">Prénom *</label>
			<input type="text" name="prenom" placeholder="Dupuis">
		</div>
		<div>
			<label for="mail">Mail *</label>
			<input type="text" name="mail" placeholder="example@gmail.com">
		</div>

		<button class="button_prev" id="1to0"> Etape précédente </button>
		<button class= "button_next" id="1to2"> Passer à l'étape suivante </button>
	</section>

	<section class="box" id="etape2">
		<h2> Etape 2 </h2>

		<div>
			<div>
				<input type="radio" name="child" value="0" id="enfant">
				<label for="child">Enfant</label>
				<div id="enfantdiv">
					<label for="age">Entrez votre âge</label>
					<input type="number" name="age">
				</div>
			</div>
			<div>
				<input type="radio" name="child" value="1" id="adulte">
				<label for="child">Adulte</label>
				<div>
					<p>
						Êtes-vous :
					</p>
					<div>
						<input type="radio" name="pro" value="0" id="amateur">
						<label for="pro">Amateur</label>
					</div>
					<div>
						<input type="radio" name="pro" value="1" id="prof">
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
					<input type="radio" name="faction" value="1">
					<label for="faction"> Morafen </br><img src="Illustrations/Formulaire/blason_1.svg" alt="Blason de Morafen" class="blason"></label>
				</div>
				<div>
					<input type="radio" name="faction" value="2">
					<label for="faction"> Liostra </br><img src="Illustrations/Formulaire/blason_2.svg" alt="Blason de Liostra" class="blason"></label>
				</div>
				<div>
					<input type="radio" name="faction" value="3">
					<label for="faction"> Paylen </br><img src="Illustrations/Formulaire/blason_3.png" alt="Blason de Paylen" class="blason"></label>
				</div>
				<div>
					<input type="radio" name="faction" value="4">
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
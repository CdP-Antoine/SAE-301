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

	<script src="script.js"></script>


</head>
<body>

<header>
	<?php require_once("Commun-Aux-Pages/header.php") ;?>
</header>

<main>

<form action="" method="POST">
	<section id="etape0">
		<h2> Pour commencer l'inscription </h2>
		<p> Nous vous demandons de : </p>
		<ul>
			<li> Si vous êtes un professionnel, de préparer votre attestation d'adhésion </li>
			<li> Lire et accepter les conditions d'utilisation </li>
			<li> Lire et accepter les conditions d'accès à l'événement </li>
		</ul>

		<button> Commencer l'inscription </button>
	</section>

	<section id="etape1">
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

		<button> Etape précédente </button>
		<button> Passer à l'étape suivante </button>
	</section>

	<section id="etape2">
		<h2> Etape 2 </h2>

		<div>
			<div>
				<input type="radio" name="child" value="0">
				<label for="child">Enfant</label>
				<div>
					<label for="age">Entrez votre âge</label>
					<input type="number" name="age">
				</div>
			</div>
			<div>
				<input type="radio" name="child" value="1">
				<label for="child">Adulte</label>
				<div>
					<p>
						Êtes-vous :
					</p>
					<div>
						<input type="radio" name="pro" value="0">
						<label for="pro">Amateur</label>
					</div>
					<div>
						<input type="radio" name="pro" value="1">
						<label for="pro">Professionnel</label>
						<div>
							<label for="certificat">Veuillez fournir votre certificat</label>
							<input type="file" name="certificat">
						</div>
					</div>
				</div>
			</div>
		</div>

		<button> Etape précédente </button>
		<button> Passer à l'étape suivante </button>
	</section>

	<section id="etape3">
		<h2> Etape 3 </h2>
	
		<div>
			<p>
				Quel camp désirez-vous rejoindre ?
			</p>
			<div>
				<input type="radio" name="faction" value="1">
				<label for="faction"> 1 </label>
			</div>
			<div>
				<input type="radio" name="faction" value="2">
				<label for="faction"> 2 </label>
			</div>
			<div>
				<input type="radio" name="faction" value="3">
				<label for="faction"> 3 </label>
			</div>
			<div>
				<input type="radio" name="faction" value="4">
				<label for="faction"> 4 </label>
			</div>
		</div>
		<button> Etape précédente </button>
		<input type="submit" value="Terminer l'inscription">
	</section>
</form>

</main>

<footer>
	<?php require_once("Commun-Aux-Pages/footer.php") ;?>
</footer>

</body>
</html>
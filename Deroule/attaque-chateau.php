<!-- Deroule > attaque-chateau -->

<div>
<?php 
$connexion = new PDO('mysql:host=localhost;port=3306;dbname=sae301','root','') ; 

$requete = 'SELECT id_event FROM event ORDER BY id_event' ;
$resultats = $connexion->query($requete) ;
$tableau = $resultats->fetchAll() ;
$tableauEvent = [] ;

foreach($tableau as $i) {
    $tableauEvent[] = new Event($i["id_event"]) ;
}

foreach($tableauEvent as $i) {
    $i->Afficher() ;
}
?>
</div>
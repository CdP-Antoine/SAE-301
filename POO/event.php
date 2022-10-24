<?php
class Event {
    // ----- Zone Paramètres 
    public $titre = "" ;
    public $bio = "" ;
    public $info = "" ;
    public $lieu ;
    public $clans = array() ; 
    // ----- FIN Zone Paramètres



    // ----- Constructeur
    function public __construct($t, $b, $i, $l, $c) {
        $this->titre = $t ;
        $this->bio = $b ; 
        $this->info = $i ;
        $this->lieu = $l ;
        $this->clan = $c ;
    } 
    // ----- FIN Constructeur



    // ----- Zone Méthodes 
    function afficher () {
        echo "Titre : ".$this->titre."<br>" ; 
        echo "Bio : ".$this->bio."<br>" ; 
        echo "Info : ".$this->info."<br>" ; 
        echo "Lieu : ".$this->lieu."<br>" ; 
        echo "Clan : ".$this->clan."<br><br>" ; 
    }

    function modifier ($newT, $newB, $newI, $newL, $newC) {
        $this->titre = $newT ;
        $this->bio = $newB ; 
        $this->info = $newI ;
        $this->lieu = $newL ;
        $this->clan = $newC ;
    }
    // ----- FIN Zone Méthodes
}
?>
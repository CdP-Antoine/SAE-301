<?php
class Event {
    // ----- Zone Paramètres 
    public $id = 0 ;
    public $titre = "" ;
    public $bio = "" ;
    public $info = "" ;
    public $lieu = array() ;
    public $clans = array() ; 

    public $connexion ;
    // ----- FIN Zone Paramètres



    // ----- Constructeur
    public function __construct($id) {
        $this->connexion = new PDO('mysql:host=localhost;port=3306;dbname=sae301','root','') ; 

        $requete = 'SELECT * FROM event WHERE id_event="'.$id.'"' ;
        $resultats = $this->connexion->query($requete) ;
        $tableau = $resultats->fetchAll() ;

        print_r($tableau) ; 
        $this->id = $id ;
        $this->titre = $tableau[0]["titre"] ;
        $this->bio = $tableau[0]["description"] ; 
        $this->info = $tableau[0]["info"] ;


        $requete = 'SELECT id_lieu,img,titre FROM lieu WHERE id_lieu="'.$tableau[0]["id_lieu"].'"' ;
        $resultats = $this->connexion->query($requete) ;
        $tableau2 = $resultats->fetchAll() ;

        $this->lieu = $tableau2[0] ;


        $requete = 'SELECT id_clan FROM clan_event WHERE id_event="'.$id.'"' ;
        $resultats = $this->connexion->query($requete) ;
        $tableau2 = $resultats->fetchAll() ;

        $this->clan = $tableau2 ;

        echo "<br><br><br>" ;
        print_r($this) ;
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
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

        $this->clans = $tableau2 ;
    } 
    // ----- FIN Constructeur



    // ----- Zone Méthodes 
    function afficher () {
        // echo "Titre : ".$this->titre."<br>" ; 
        // echo "Bio : ".$this->bio."<br>" ; 
        // echo "Info : ".$this->info."<br>" ; 
        // echo "Lieu : ".$this->lieu."<br>" ; 
        // echo "Clan : ".$this->clan."<br><br>" ; 

        $exist = array(
                1 => 'class="paspresent"',
                2 => 'class="paspresent"',
                3 => 'class="paspresent"',
                4 => 'class="paspresent"'
        ) ;

        foreach ($this->clans as $i) {
            $exist[$i["id_clan"]] = '';
        }

        echo ('
        <div>
            <h2>'.$this->titre.'</h2>
            <p>'.$this->bio.'</p>
            <div class="troislignes">   <!--Permière div regroupant les 3 blocs -->
                <div>   <!--1er bloc : info -->
                    <h3>INFO :</h3>
                    '.$this->info.'
                </div>

                <div>   <!--2eme bloc : lieu/image -->
                    <h3>LIEU :</h3>
                    <img src="'.$this->lieu["img"].'" class="lieu">
                </div>

                <div> <!--3eme bloc : Clans -->
                    <h3>CLANS :</h3>
                    <div class="clans"> <!--images de clans -->
                        <img src="Illustrations/Deroule/rondclantest.png" '.$exist[1].'>
                        <img src="Illustrations/Deroule/rondclantest.png" '.$exist[2].'>
                        <img src="Illustrations/Deroule/rondclantest.png" '.$exist[3].'>
                        <img src="Illustrations/Deroule/rondclantest.png" '.$exist[4].'>
                    </div>
                </div>
            </div>
        </div>') ;
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
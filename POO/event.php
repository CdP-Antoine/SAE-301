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
                    <img src="'.anchored_link("Illustrations/".$this->lieu["img"]).'" class="lieu">
                </div>

                <div> <!--3eme bloc : Clans -->
                    <h3>CLANS :</h3>
                    <div class="clans"> <!--images de clans -->
                        <img src="Illustrations/Deroule/rondmorafen.png" '.$exist[1].'alt="Morafen">
                        <img src="Illustrations/Deroule/rondliostra.png" '.$exist[2].'alt="Liostra">
                        <img src="Illustrations/Deroule/rondpaylen.png" '.$exist[3].'alt="Paylen">
                        <img src="Illustrations/Deroule/rondviguera.png" '.$exist[4].'alt="Viguera">
                    </div>
                </div>
            </div>
        </div>') ;
    }

    function AfficherAdmin() {
        echo '<form enctype="multipart/form-data" action="" method="post">';
        echo("<label for='id'>ID : </label><input type='number' value='".$this->id."' name='id' readonly><br>");
        echo "<label for='titre'>Titre : </label><input type='text' value='".$this->titre."' name='titre'><br>";
        echo "<label for='bio'>Bio : </label><input type='text' value='".$this->bio."' name='bio'><br>";
        echo "<label for='info'>Info : </label><input type='text' value='".$this->info."' name='info'><br>";
        echo '<select name="lieu">';
    
        $requete = "SELECT id_lieu,titre FROM lieu" ;
        $resultats = $this->connexion->query($requete) ;
        foreach($resultats as $i) {
            if ($i["id_lieu"] == $this->lieu["id_lieu"]) {
                echo '<option value="'.$i["id_lieu"].'" selected>'.$i["id_lieu"]." - ".$i["titre"].'</option>' ;
            } else {
                echo '<option value="'.$i["id_lieu"].'">'.$i["id_lieu"]." - ".$i["titre"].'</option>' ;
            }
        }
        echo '</select>';

        $exist = array(
            1 => '',
            2 => '',
            3 => '',
            4 => ''
        ) ;

        foreach ($this->clans as $i) {
            $exist[$i["id_clan"]] = 'checked';
        }
        echo "<br>";
        echo '<input type="checkbox" name="clan1"'.$exist[1].'><label for="clan1">Viguera</label><br>';
        echo '<input type="checkbox" name="clan2"'.$exist[2].'><label for="clan2">Liostra</label><br>';
        echo '<input type="checkbox" name="clan3"'.$exist[3].'><label for="clan3">Paylen</label><br>';
        echo '<input type="checkbox" name="clan4"'.$exist[4].'><label for="clan4">Morafen</label><br>';
        echo '<input type="submit" value="Modifier les données" name="envoi">';
        echo '</form>';
    }

    function modifier ($donnees) {
        $requete = 'UPDATE event SET titre ="'.$donnees["titre"].'",description ="'.$donnees["bio"].'",info ="'.$donnees["info"].'",id_lieu ="'.$donnees["lieu"].'"' ;
        $this->connexion->query($requete);

        $requete = "DELETE FROM clan_event WHERE clan_event.id_event = ".$this->id ;
        $this->connexion->query($requete);
        

        if (isset($donnees["clan1"])) {
            $requete = 'INSERT INTO clan_event (id_clanevent, id_clan, id_event) VALUES (NULL, 1, '.$this->id.')';
            $this->connexion->query($requete);
        }
        if (isset($donnees["clan2"])) {
            $requete = 'INSERT INTO clan_event (id_clanevent, id_clan, id_event) VALUES (NULL, 2, '.$this->id.')';
            $this->connexion->query($requete);
        }
        if (isset($donnees["clan3"])) {
            $requete = 'INSERT INTO clan_event (id_clanevent, id_clan, id_event) VALUES (NULL, 3, '.$this->id.')';
            $this->connexion->query($requete);
        }
        if (isset($donnees["clan4"])) {
            $requete = 'INSERT INTO clan_event (id_clanevent, id_clan, id_event) VALUES (NULL, 4, '.$this->id.')';
            $this->connexion->query($requete);
        }

        $this->titre = $donnees["titre"] ;
        $this->bio = $donnees["bio"] ; 
        $this->info = $donnees["info"] ;

        $requete = 'SELECT id_lieu,img,titre FROM lieu WHERE id_lieu="'.$donnees["lieu"].'"' ;
        $resultats = $this->connexion->query($requete) ;
        $tableau2 = $resultats->fetchAll() ;

        $this->lieu = $tableau2[0] ;

        $requete = 'SELECT id_clan FROM clan_event WHERE id_event="'.$this->id.'"' ;
        $resultats = $this->connexion->query($requete) ;
        $tableau2 = $resultats->fetchAll() ;

        $this->clans = $tableau2 ;
    }
    // ----- FIN Zone Méthodes
}
?>
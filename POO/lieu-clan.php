<?php
class LieuClan {
    // ----- Zone Paramètres 

    public $id;
    public $type;
    public $img;
    public $desc;
    public $titre;

    public $connexion ;
     // ----- FIN Zone Paramètres



    // ----- Constructeur

    public function __construct($id,$type){
        $this->connexion = new PDO('mysql:host=localhost;port=3306;dbname=sae301','root','') ; 

        if ($type == 0) {
            $requete = 'SELECT * FROM clan WHERE id_clan="'.$id.'"' ;
        } else {
            $requete = 'SELECT * FROM lieu WHERE id_lieu="'.$id.'"' ;
        }
        
        $resultats = $this->connexion->query($requete) ;
        $tableau = $resultats->fetchAll() ;

        $this->id = $id;
        $this->type = $type;
        $this->img = $tableau[0]["img"];
        $this->desc = $tableau[0]["description"];
        $this->titre = $tableau[0]["titre"]; 
    }
    

    // ----- FIN Constructeur



    // ----- Zone Méthodes 

    public function Afficher(){
        echo $this->id;
        echo "<br>";
        echo $this->type;
        echo "<br>";
        echo $this->img;
        echo "<br>";
        echo $this->desc;
        echo "<br>";
        echo $this->titre;
        echo "<br>";
    }

    public function modifier($t, $i, $d, $tt){
        $this->type = $t;
        $this->img = $i;
        $this->desc = $d;
        $this->titre = $t; 
    }

    // ----- FIN Zone Méthodes
}
?>

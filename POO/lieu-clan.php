<?php
class LieuClan {
    // ----- Zone Paramètres 

    public $type;
    public $img;
    public $desc;
    public $titre;

     // ----- FIN Zone Paramètres



    // ----- Constructeur

    public function __construct($t, $i, $d, $tt){
        $this->type = $t;
        $this->img = $i;
        $this->desc = $d;
        $this->titre = $tt; 
    }
    

    // ----- FIN Constructeur



    // ----- Zone Méthodes 

    public function afficher(){
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

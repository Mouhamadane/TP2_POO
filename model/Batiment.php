<?php 
class Batiment implements iGestion {
    protected $id;
    protected $nom;
    protected $descripe;
    protected $nbRooms;

    //construct
    public function __construct($row=null){
        if($row!=null){
            $this->hydrate($row);
        }
    }

    public function hydrate($row){
        $this->id = $row["id"];
        $this->nom = $row["nom"];
        $this->descripe = $row["descripe"];
        $this->nbRooms = $row["rooms"];   
    }

    public function Affichage(){
        echo "Bat ".$this->id." ".$this->nom;
    }
    // getter
    // setter
    public function setId($id){
        $this->id = $id;
    }

}
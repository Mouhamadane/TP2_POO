<?php 

class Chambre implements iGestion{
    protected $id;
    protected $numRoom;
    protected $nbBed;

    // constructeur
    public function __construct($row=null){
        if($row!=null){
            $this->hydrate($row);
        }
    }

    // redefinition
    public function hydrate($row){
        $this->id = $row["id"];
        $this->numRoom = $row["numRoom"];
        $this->nbBed = $row["bed"];
    }

    public function Affichage(){
        
    }
}
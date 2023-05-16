<?php
// AutoLoading
spl_autoload_register(function($class){
    $path= "./model/".$class.".php";
    require_once($path);
});

// J'affiche le nom complet
$row = [
    "id"=>[222,12,3,7],
    "prenom"=>["Adama","Fatou","Abdou","Aly"],
    "nom"=>["Adama","Fatou","Abdou","Aly"]] ;

$user1 = new User($row);
$etudiant1 = new Etudiant();
var_dump($etudiant1);


$batiment = new Batiment(["id"=>"A","nom"=>"Pr Fodé Camara",
                "descripe"=>"Batiment A",
                "rooms"=>25 ]);
$batiment->setId("4");

var_dump($batiment);




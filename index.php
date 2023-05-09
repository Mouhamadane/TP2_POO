<?php
require_once("./model/iGestion.php");
require_once("./model/User.php");
require_once("./model/Admin.php");
require_once("./model/Etudiant.php");

// J'affiche le nom complet
$row = [
    "id"=>222,
    "prenom"=>"Adama", 
    "nom"=>"Diarra",
    "class"=>"BIG2"];

$etudiant = new Etudiant($row);
var_dump($etudiant);
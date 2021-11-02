<?php

function connexion(){
    $host ="localhost";
    $user ="admin";
    $mdp ="coach";
    $bdd ="coach";

    $mysqli= new mysqli($host, $user, $mdp, $bdd);
    if ($mysqli->connect_errno){
        die("<p> Impoosible de se connecter </p>");
    }
   

    return $mysqli;
}

connexion();
?>
<?php

function bdd()
{

    $db="projetfinal";
    $dbhost="localhost";
    $dbport="3307";
    $dbuser="root";
    $dbpasswd="";

    $bdd = new PDO('mysql:host='.$dbhost.';port='.$dbport.';dbname='.$db.'', $dbuser, $dbpasswd);

    return $bdd;
}

function toutrecup($id)
{
    $acces = bdd();
    $requet = $acces ->query("SELECT * FROM jeu_console");
    return $requet ->fetchAll();
}



?>
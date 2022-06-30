<?php
// La pratique veut que l'on affiche un objet dans une page differente dans une page differente que celle de la class.La classe se trove dans un fichier externe; il prendrra une majuscule et qui devra être nommer du nom de la class ex:Class.php

require "Personnage.php";
require "Magicien.php";

$mario = new Personnage("Mario");
$luigi = new Personnage("Luigi");
$pikachu = new Personnage("Pikachu");
var_dump($mario);

$pikachu ->crier();
$mario->crier();

/* On applique la méthode regenerer à notre personnage et par conséquent sa  vie repasse à 100 */
$luigi->regenerer(5);
var_dump($pikachu-> mort());
/* $pikachu-> vie =0; */

echo "<p>" . $pikachu -> getNom() . "</p>";

var_dump($mario);
echo "<br>";

var_dump($luigi);
echo "<br>";

var_dump($pikachu);
echo "<br>";

var_dump($pikachu->mort());

$pikachu->attaque($mario);

if($mario->mort()){
    echo "<p> Mario est mort !!! </p>";
}else{
    echo "<p> Mario a survécu , il lui reste ".$mario->vie."vies</p>";
}
 //var_dump($mario->vie);

 echo "<br>";
 $pikachu->setNom("princess Peach");
 var_dump($pikachu->getNOM());

echo "<br>";
$merlin = new Magicien("Merlin");
var_dump($merlin);

$merlin -> attaque($luigi);

//echo "<p> Mario a ".$mario->vie. "vies </p>";
var_dump($luigi);


?>
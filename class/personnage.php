<?php

//pour créér une class, on va utiliser le mot clé class suivi du nom de notre classe,avec une majuscule.Le nom du fichier,lorsqu'il contient une classe doit prendre une majuscule.Attention un fichier de classev ne contient que les informations relative à la classe à l'interiur,l'affichage se fera sur une autre page.

class personnage
{
    /* on définit des caracteristique de nos personnage grâce à des propriétés. */
      protected $vie = 80;
     public $atk =20;//attack-atk
/* C'est sûrement par convention et pour s'y retrouver dans le code que l'on déclare notre propriété à cet endroi//On pourrait définir le nom directement dans le page affichage.php mais c'est fortement déconseillé. */
protected $nom;
/* public est la visibilité  de notre variable //on en reparlera plus tard définir ce qu'elle veut dire mais il existe aussi par exemple protected*/

/* Lorsque l'on crée une instance de classe, on fait appel à un constructeur . Si on veut initaliser une donnée dés la création il faudra utiliser la methode ___construct. Grâce à méthode , tous les paramétres qui seront passés entre parenthéses permettront de définir les données voules.*/
/* En l'occurence, nous voulons définir le nom de notres personnage dés sa création */

public function __construct($nom){
    /* Grâce à la façon de faire qui suit,nous allons pouvoir sauvegarder le nom du personnage passé lors de l'instanciation .La constructeur permet en fait d'implémenter des propiétés de manière initiale */
    $this->nom =$nom;
}

/* LES GETTERS  */
public function getNom()
{
    return $this->nom;
}

/*  LES SETTERS */
public function setNom($nom){
    $this->nom = $nom;  
}

 /* On définit une fonction (méthode ) qui lorsqu'on  l'appelle , fait un echo de la phase*/ 

   public function crier()
   {
    echo "JE PARS A L'ATTAQUE!!!";
   }

   /* création de  la méthode regénérer */
   /* Pour cette méthode il faudra utiliser $this => fait référence au personnage (à l'objet) sur lequel on va appliquer notre méthode. Pour cette méthode , le but est de mettre la vie du perssonage sur lequel elle est appliqué à100*/


    public function regenerer($vie =null)
    {
        /* Si on ne précise pas de chiffres en paramétres alors la vie sera regenerer à 100 sinon si en parametre on passe 5 par exemple ,alors on rajoutera 5 à la vie de notre personnage */
        if(is_null($vie)){
            $this->vie =100;
        }else{
            $this->vie += $vie;
        }
    }
    public function mort(){
        /* Cette méthode renvoie le booléen false quand le personnage n'est pas mort et true si le personnage est mort */
        return $this-> vie <=0;
    }
    protected function empecher_negatif()
    {
        if($this->vie < 0)
        {
            $this->vie =0;
        }
    }

    public function attaque($cible)

{


/* $cible represente l'objet passé en paramètre =>en l'occurence cet objet est mario // ici $cible  =$mario*/
// $this représente l'attaquent
//$cible représente la personne attaquée
/*les points de vie de la cible 
 les points d'attaque de l'attaquant */

$cible->vie -= $this->atk;
/*  ici je veux afficher quelque chose sur ma page affichage, je dois utiliser return*/

$cible->empecher_negatif();


}

}

?>
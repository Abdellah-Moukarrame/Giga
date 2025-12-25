<?php 
    require "../Abstract/personne.php";

 class Joueur extends Personne{
    protected string  $pseudoname,$role ; 
    protected int $salaire ;

    public function __construct($id, $name , $pseudoname,$role,$salaire)
    {
        parent::__construct($id, $name);
        $this->pseudoname = $pseudoname;
        $this->role =$role;
        $this->salaire=$salaire;
    }
 }
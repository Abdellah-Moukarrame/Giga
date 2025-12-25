<?php
require "../Abstract/event.php";

class Sponsor extends Personne
{
    protected float $montant;
    public function __construct($id, $name, $montant)
    {
        parent::__construct($id, $name);
        $this->montant = $montant;
    }
}

<?php 
require "../DB/connection.php";

abstract class Personne {
    protected int $id ;
    protected string $name ;
    public $db ;

     public function __construct($id,$name)
    {
        $this->id = $id;
        $this->name = $name ;
        $this->db = new Conection("localhost", "GIGA", "root", "");

    }

    public function getName():string{
       return $this->name ;
    }
}
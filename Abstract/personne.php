<?php 

abstract class Personne {
    protected int $id ;
    protected string $name ;

     public function __construct($id,$name)
    {
        $this->id = $id;
        $this->name = $name ;
    }

    public function getName():string{
       return $this->name ;
    }
}
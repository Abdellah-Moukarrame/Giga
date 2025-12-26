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
     public function getAll_sponsors(){
        $connection = $this->db->connectionDb();
        $sql_sponsors = "select nom_s , montant_sponsor from sponsor ";
        $data_sponsors = $connection->prepare($sql_sponsors);
        $data_sponsors->execute();
    }
    public function create_sponsor(){
        $connection = $this->db->connectionDb();
        $sql_create_sponsor = "insert into sponsor  (nom_s,montant_sponsor) values ( :name , :name) ";
        $data_create_sponsor  = $connection->prepare($sql_create_sponsor);
        $data_create_sponsor ->execute([":name"=>$this->name , ":montant"=>$this->montant ]);

    }
    public function delete_sponsor (){
        $connection = $this->db->connectionDb();
        $sql_delete_sponsor  = "delete from sponsor where nom_s = :name ";
        $data_delete_sponsor  = $connection->prepare($sql_delete_sponsor );
        $data_delete_sponsor ->execute([":name"=>$this->name]);
    }
    public function update_sponsor (){
        $connection = $this->db->connectionDb();
        $sql_update_sponsor  = "update sponsor set montant_sponsor = :montant  where nom_s = :name ";
        $data_update_sponsor  = $connection->prepare($sql_update_sponsor );
        $data_update_sponsor ->execute([":montant" =>$this->montant]);
    }
}

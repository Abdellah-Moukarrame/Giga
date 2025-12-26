<?php
require "../DB/connection.php";
require "../Abstract/event.php";

class Tournoi extends Event
{
    public int $montant_global;
    public string $format , $titre ;
    public $db;
    public function __construct($id, $name,$titre,$montant_global,$format)
    {
        parent::__construct($id, $name);
        $this->montant_global =$montant_global;
        $this->format = $format ;
        $this->titre = $titre;
        $this->db = new Conection("localhost", "GIGA", "root", "");
    }

    public function getAll() {
        $sql = "select * from tournoi";
        $connection = $this->db->connectionDb();
        $data_tournoi = $connection->prepare($sql);
        $data_tournoi->execute();
        $tournoi = $data_tournoi->fetchAll(PDO::FETCH_ASSOC);
    }

    public function create() {
        $sql = "insert into tournoi (titre,montant_global,format) values (:titre,:montant_global,:format) ";
        $connection = $this->db->connectionDb();
        $data_insert_tournoi = $connection->prepare($sql);
        $data_insert_tournoi->execute([":titre"=>$this->titre,":montant_global"=>$this->montant_global,":format"=>$this->format]);
       
    }

    public function delete() {
        $sql = "delete into tournoi where idT = :id";
        $connection = $this->db->connectionDb();
        $data_delet = $connection->prepare($sql);
        $data_delet->execute([":id"=>$this->id]);
    }
    
    public function update() {
        $sql = "update tournoi set titre = :titre , montant_global = :montant_global, format = :format where idT = :id";
        $connection = $this->db->connectionDb();
        $data_updated = $connection->prepare($sql);
        $data_updated->execute([":titre"=>$this->titre,":montant_global"=>$this->montant_global,":format"=>$this->format,":id"=>$this->id]);
    }
}

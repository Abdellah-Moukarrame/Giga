<?php
require "../DB/connection.php";

class Club
{
    public int $id;
    public string $name, $ville;
    public $db;

    public function __construct($name, $ville)
    {
        $this->name = $name;
        $this->ville = $ville;
        $this->db = new Conection("localhost", "GIGA", "root", "");
    }

    public function getAll_clubs()
    {
        $connection = $this->db->connectionDb();
        $sql_get_clubs = "select nomC , ville_residence from club";
        $data_club = $connection->prepare($sql_get_clubs);
        $data_club->execute();
        $clubs = $data_club->fetchAll(PDO::FETCH_ASSOC);
    }

    public function create_club()
    {
        $connection = $this->db->connectionDb();
        $sql_create_club = "insert into club (nomC , ville_residence) VALUES ( :name ,:ville ) ";
        $data_create_club=$connection->prepare($sql_create_club);
        $data_create_club->execute([":name"=>$this->name,":ville"=>$this->ville]);
    
    }

    public function delete_club()
    {
        
        $connection = $this->db->connectionDb();
        $sql_delete_club = "delete from club where nomC = :name";
        $data__delete  = $connection->prepare($sql_delete_club);
        $data__delete->execute([":name"=>$this->name]);
    

    }
    public function update_club(){
        $connection =$this->db->connectionDb();
        $sql_update_club = "update club set ville_residence = :ville where nomC = :nomC  ";
        $data_update = $connection->prepare($sql_update_club);
        $data_update->execute([":nomC"=>$this->name]);

    }
}
$raja = new Club("Raja", "Casablanca");

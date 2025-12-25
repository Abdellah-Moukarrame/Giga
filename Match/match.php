<?php
require "../DB/connection.php";
require "../Abstract/event.php";

class Matches extends Event
{
    public int $score_A, $score_B;
    public $db;
    public function __construct($id, $name,$score_A,$score_B)
    {
        parent::__construct($id, $name);
        $this->score_A =$score_A;
        $this->score_B = $score_B ;
        $this->db = new Conection("localhost", "GIGA", "root", "");
    }

    public function getAll() {
        $sql = "select * from matches";
        $connection = $this->db->connectionDb();
        $data_matches = $connection->prepare($sql);
        $data_matches->execute();
        $matches = $data_matches->fetchAll(PDO::FETCH_ASSOC);
    }

    public function create() {
        $sql = "insert into matches (score_A,score_b) values (:score_A,:score_B) ";
        $connection = $this->db->connectionDb();
        $data_insert_matches = $connection->prepare($sql);
        $data_insert_matches->execute([":score_A"=>$this->score_A,":score_B"=>$this->score_B]);
       
    }

    public function delete() {}
    
    public function update() {}
}

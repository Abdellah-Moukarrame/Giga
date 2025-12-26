<?php
require "../DB/connection.php";
require "../Abstract/event.php";

class Matches extends Event
{
    public int $score_A, $score_B , $equipe_A ,$equipe_B;
    public $db;
    public function __construct($id, $name,$score_A, $score_B , $equipe_A ,$equipe_B)
    {
        parent::__construct($id, $name);
        $this->score_A = $score_A;
        $this->score_B = $score_B;
        $this->db = new Conection("localhost", "GIGA", "root", "");
    }


    public function getAll()
    {
        $sql_matches = "select * from matches";
        $connection = $this->db->connectionDb();
        $data_matches = $connection->prepare($sql_matches);
        $data_matches->execute();
        $matches = $data_matches->fetchAll(PDO::FETCH_ASSOC);
    }

    public function create()
    {
        $sql_create_match = "insert into matches (score_A,score_b) values (:score_A,:score_B) ";
        $connection = $this->db->connectionDb();
        $data_insert_matches = $connection->prepare($sql_create_match);
        $data_insert_matches->execute([":score_A" => $this->score_A, ":score_B" => $this->score_B]);
    }

    public function delete()
    {
        $sql_delete_match = "delete into matches where idM = :id";
        $connection = $this->db->connectionDb();
        $data_delet_match = $connection->prepare($sql_delete_match);
        $data_delet_match->execute([":id" => $this->id]);
    }

    public function update()
    {
        $sql_update_match = "update matches set  score_A = :score_A , score_b = :score_B where idM = :id)";
        $connection = $this->db->connectionDb();
        $data_update_match = $connection->prepare($sql_update_match);
        $data_update_match->execute([":id" => $this->id]);
    }
    public function generate_match()
    {
        $connection = $this->db->connectionDb();
        $sql_get_equipes = "select idE from equipe";
        $data_equipes = $connection->prepare($sql_get_equipes);
        $data_equipes->execute();
        $equipes = $data_equipes->fetchAll(PDO::FETCH_ASSOC);

        $equipes_random = shuffle($equipes);
        var_dump($equipes);
        for ($i = 0; $i < count($equipes) - 1; $i + 2) {
            $equipe_A = $equipes[$i];
            $equipe_B = $equipes[$i + 1];
            var_dump($equipe_A);
            var_dump($equipe_B);
            return;
        }
    }
}



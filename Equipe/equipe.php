<?php
require "../DB/connection.php";

class Equipe
{
    public int $id, $nbr_joueures;
    public string $categorie;
    public $db;

    public function __construct($nbr_joueures, $categorie)
    {

        $this->nbr_joueures = $nbr_joueures;
        $this->categorie = $categorie;
        $this->db = new Conection("localhost", "GIGA", "root", "");
    }

    public function getAll()
    {
        $connection = $this->db->connectionDb();
        $sql_get_equipes = "select categorie , nbr_joueres from equipe";
        $data_equipes = $connection->prepare($sql_get_equipes);
        $data_equipes->execute();
        $equipes = $data_equipes->fetchAll(PDO::FETCH_ASSOC);
        foreach ($equipes as $eq) {
            var_dump($eq);
        }
    }

    public function create()
    {
        $connection = $this->db->connectionDb();
        $sql_create_club = "insert into equipe (categorie , nbr_joueres) VALUES ( :categorie ,:nbr_joueures ) ";
        $data_create_club = $connection->prepare($sql_create_club);
        $data_create_club->execute([":categorie" => $this->categorie, ":nbr_joueures" => $this->nbr_joueures]);
    }

    public function delete()
    {

        $connection = $this->db->connectionDb();
        $sql_delete_equipe = "delete from equipe where categorie = :categorie";
        $data__delete  = $connection->prepare($sql_delete_equipe);
        $data__delete->execute([":categorie" => $this->categorie]);
    }
    public function update()
    {
        $connection = $this->db->connectionDb();
        $sql_update_equipe = "update equipe set nbr_joueres = :nbr_joueres  where categorie = :categorie";
        $data_updeted_equipe = $connection->prepare($sql_update_equipe);


    }
    public function list_equipe(){
        $connection = $this->db->connectionDb();
        $sql_list = " select * from equipe join club where club.idC = equipe.id_club ";
        $data_list = $connection->prepare($sql_list);
        $data_list->execute();
        $list_equipe = $data_list->fetchAll(PDO::FETCH_ASSOC);
    }
}

$equipe = new Equipe(13, "senior");
$equipe->create();

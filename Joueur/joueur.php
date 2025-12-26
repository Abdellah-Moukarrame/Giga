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
    
    public function getAll_players(){
        $connection = $this->db->connectionDb();
        $sql_players = "select pseudoname , role_tactique , salaire_contractuel from joueur ";
        $data_players = $connection->prepare($sql_players);
        $data_players->execute();
    }
    public function create_player(){
        $connection = $this->db->connectionDb();
        $sql_create_player = "insert into joueur (pseudoname,role_tactique,salaire_contractuel) values ( :pseudoname , :role , :salaire) ";
        $data_create_player = $connection->prepare($sql_create_player);
        $data_create_player->execute([":pseudoname"=>$this->pseudoname , ":role"=>$this->role , ":salaire"=>$this->salaire]);

    }
    public function delete_player(){
        $connection = $this->db->connectionDb();
        $sql_delete_player = "delete from joueur where pseudoname = :pseudoname ";
        $data_delete_player = $connection->prepare($sql_delete_player);
        $data_delete_player->execute([":pseudoname"=>$this->pseudoname]);
    }
    public function update_player(){
        $connection = $this->db->connectionDb();
        $sql_update_player = "update joueur set role_tactique = :role , salaire_contractuel = :salaire where pseudoname = :pseudoname ";
        $data_update_player = $connection->prepare($sql_update_player);
        $data_update_player->execute([":role" =>$this->role , ":salaire"=>$this->salaire , ":pseudoname"=>$this->pseudoname]);
    }
 }
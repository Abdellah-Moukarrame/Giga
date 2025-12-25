<?php


class Conection
{
    public $host;
    public $db_name;
    public $username;
    public $password;
    

    public function __construct($host, $db_name, $username, $password)
    {
        $this->host = $host;
        $this->db_name = $db_name;
        $this->username = $username;
        $this->password = $password;
        
    }
    
    public function connectionDb()
    {
        try {
            $pdo = new PDO("mysql:host=$this->host;dbname=$this->db_name",$this->username,$this->password);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $pdo;
        } 

        catch (Exception $error) {
           echo "kayn chi mouchkil" . $error->getMessage();
        }
        // return new PDO("mysql:host=$this->host;dbname=$this->db_name,$this->username,$this->password,$this->port");
    }
}
$db_infos = new Conection("localhost", "GIGA", "root", "");
$db_connection = $db_infos->connectionDb();

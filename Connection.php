<?php
class Database {
    public $pdo;
    private $table = "studenten";

    public function __construct($dbName = "Update_Opdracht", $host = "localhost", $user = "root", $pass = "") {
        $this->pdo = new PDO("mysql:host=$host;dbname=$dbName;", $user, $pass);
        $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
    }
    public function insert($Naam, $Achternaam) {
        $stmt = $this->pdo->prepare("INSERT INTO $this->table (Naam, Achternaam) VALUES (?,?)");
        $stmt->execute([$Naam, $Achternaam]);
    }
    public function select () {
        $stmt = $this->pdo->query("select * from $this->table");
        $result = $stmt->fetchAll();
        return $result;
    }
    public function SelectOneUser($id) {
        $stmt = $this->pdo->prepare ("select * from $this->table WHERE id ?");
        $stmt->execute([$id]);
        $result = $stmt->fetchAll();
        return $result;
    }

}
?>
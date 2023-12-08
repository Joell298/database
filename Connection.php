<?php
class Database {
    public $pdo;
    private $table = "studenten";

    public function __construct($dbName = "Update_Opdracht", $host = "localhost", $user = "root", $pass = "") {
        $this->pdo = new PDO("mysql:host=$host;dbname=$dbName;", $user, $pass);
        $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
    }
    public function insert($naam, $achternaam) {
        $stmt = $this->pdo->prepare("INSERT INTO $this->table (naam, achternaam) VALUES (?,?)");
        $stmt->execute([$naam, $achternaam]);
    }
}
?>
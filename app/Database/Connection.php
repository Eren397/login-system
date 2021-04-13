<?php
class Connection {
    public $conn;

    public function getConn() {
        try{
            $this->conn = new PDO('mysql:dbname=login;host=localhost', 'root', 'root123');
        }catch (PDOException $e) {
            die('Erro ao conectar no banco'.$e->getMessage());
        }
    }
}
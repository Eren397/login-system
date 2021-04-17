<?php
abstract class Connection {
    public static $conn;

    public static function getConn() {
        try{
            self::$conn = new PDO('mysql:dbname=login;host=localhost', 'root', 'root123');
            return self::$conn;
        }catch (PDOException $e) {
            die('Erro ao conectar no banco'.$e->getMessage());
        }
    }
}
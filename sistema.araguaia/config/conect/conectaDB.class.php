<?php
require_once 'constantes.php';

class conectaDB
{
    private static $pdo;

    public function __construct() {
        $this->getConnection();
    }

    public function getConnection(){
        try {
            if (is_null(self::$pdo)){
                self::$pdo = new PDO('mysql:host=' . HOSTNAME . ';dbname=' . DB_NAME, USERNAME, PASSWORD);
                self::$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                echo 'Conexão realizada com sucesso!!!';
            }

        } catch(PDOException $e) {
            die('Query failed: ' . $e->getMessage());
        }
        return self::$pdo;
    }

}
/*
$e = new conectaDB();
$e->getConnection();*/
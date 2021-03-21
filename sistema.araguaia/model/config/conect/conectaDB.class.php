<?php
require_once 'constantes.php';

class conectaDB
{

    public $db;


    public function __construct() {
    }

    public function getConnection(){
        try {
            $conn = $this->db = new PDO('mysql:host=' . HOSTNAME . ';dbname=' . DB_NAME, USERNAME, PASSWORD);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo 'Conexão realizada com sucesso!!!';

        } catch(PDOException $e) {
            die('Query failed: ' . $e->getMessage());
        }
        return $conn;
    }

}
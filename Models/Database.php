<?php

namespace Models;

class Database
{
    // connetion à la base de données
    private $host = "localhost";
    private $db_name = "wf3_php_final_michel";
    private $username = "root";
    private $password = "";
    private $connetion = null;

    // getter pour la connetion
    public function dbConnect()
    {
        try {
            $this->connetion = new \PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
        } catch (\PDOException $exception) {
            echo "Erreur de connetion : " . $exception->getMessage();
        }

        return $this->connetion;
    }
}
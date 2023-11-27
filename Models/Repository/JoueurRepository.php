<?php

namespace Models\Repository;

use PDO;

class JoueurRepository
{
    private $db;

    public function __construct($db)
    {
        $this->db = $db;
    }

    public function addJoueur($email, $name)
    {
        $sql = "INSERT INTO player (email, nickname) VALUES (?,?)";
        $request = $this->db->prepare($sql);
        $request->execute([$email, $name]);
    }

    public function findAllJoueurs()
    {
        $sql = "SELECT * FROM player";
        $request = $this->db->prepare($sql);
        $request->execute();
        return $request->fetchAll(PDO::FETCH_ASSOC);
    }

    public function deleteJoueurById($id)
    {
        $sql = "DELETE FROM player WHERE id_player = ?";
        $request = $this->db->prepare($sql);
        $request->execute([$id]);
    }

}

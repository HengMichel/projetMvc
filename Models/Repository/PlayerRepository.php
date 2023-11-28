<?php

namespace Models\Repository;

use PDO;

class PlayerRepository
{
    private $db;

    public function __construct($db)
    {
        $this->db = $db;
    }

    public function addPlayer($email, $name)
    {
        $sql = "INSERT INTO player (email, nickname) VALUES (?,?)";
        $request = $this->db->prepare($sql);
        $request->execute([$email, $name]);
    }

    public function findAllPlayers()
    {
        $sql = "SELECT * FROM player";
        $request = $this->db->prepare($sql);
        $request->execute();
        return $request->fetchAll(PDO::FETCH_ASSOC);
    }

    public function deletePlayerById($id)
    {
        $sql = "DELETE FROM player WHERE id_player = ?";
        $request = $this->db->prepare($sql);
        $request->execute([$id]);
    }

}

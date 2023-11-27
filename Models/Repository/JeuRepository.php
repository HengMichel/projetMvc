<?php

namespace Models\Repository;

use PDO;

class JeuRepository
{
    private $db;

    public function __construct($db)
    {
        $this->db = $db;
    }

    public function addJeu($title, $numberMinPlayers, $numberMaxPlayers)
    {
        $sql = "INSERT INTO`game`(`title`, `min_players`, `max_players`) VALUES(?,?,?)";
        $request = $this->db->prepare($sql);
        $request->execute([$title, $numberMinPlayers, $numberMaxPlayers]);
    }

    public function findAllJeu()
    {
        $sql = "SELECT * FROM game";
        $request = $this->db->prepare($sql);
        $request->execute();
        return $request->fetchAll(PDO::FETCH_ASSOC);
    }

    public function deleteJeuById($id)
    {
        $sql = "DELETE FROM game WHERE id_game = ?";
        $request = $this->db->prepare($sql);
        $request->execute([$id]);
    }

}

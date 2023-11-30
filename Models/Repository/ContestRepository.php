<?php

namespace Models\Repository;

use PDO;

class ContestRepository extends BaseRepository
{
    public function addContest($game_id,$start_date,$winner_id)
    {
        $sql = "INSERT INTO contest (game_id, start_date,winner_id) VALUES (?,?,?)";
        $request = $this->dbConnection->prepare($sql);
        $request->execute([$game_id,$start_date,$winner_id]);
    }

    public function findAllContests()
    {
        $sql = "SELECT * FROM contest";
        $request = $this->dbConnection->prepare($sql);
        $request->execute();
        return $request->fetchAll(PDO::FETCH_ASSOC);
    }

    public function findAllContestsSortedByStartDateDesc()
    {
        $sql = "SELECT * FROM contest ORDER BY start_date DESC";
        $request = $this->dbConnection->prepare($sql);
        $request->execute();
        return $request->fetchAll(PDO::FETCH_ASSOC);
    }

    public function findAllTables()
    {
        $sql = "SELECT c.*, g.*, p.*, COUNT(cp.player_id) AS nombre_de_joueurs  FROM contest c  LEFT JOIN player p ON c.winner_id = p.id_player  LEFT JOIN game g ON c.game_id = g.id_game  LEFT JOIN player_contest cp ON c.id_contest = cp.contest_id  GROUP BY c.id_contest, g.id_game  ORDER BY c.start_date DESC;";
        $request = $this->dbConnection->prepare($sql);
        $request->execute();
        return $request->fetchAll(PDO::FETCH_ASSOC);
    }

    public function deleteContestById($id)
    {
        $sql = "DELETE FROM contest WHERE id_contest = ?";
        $request = $this->dbConnection->prepare($sql);
        $request->execute([$id]);
    }

    public function findContestById($id)
    {
        $sql = "SELECT * FROM contest WHERE id_contest=?";
        $request = $this->dbConnection->prepare($sql);
        $request->execute([$id]);
    }

}

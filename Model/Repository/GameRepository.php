<?php

namespace Model\Repository;

use Model\Entity\Game;
use Service\GameService;

class GameRepository extends BaseRepository
{
    // private $db;

    // public function __construct($db)
    // {
    //     $this->db = $db;
    // }

    public function addGame(Game $game)
    {
        $sql = "INSERT INTO game (title, min_players, max_players) VALUES (:title,:min_players,:max_players)";
        $request = $this->dbConnection->prepare($sql);
        $request->bindValue(":title", $game->getTitle());
        $request->bindValue(":min_players", $game->getMin_players());
        $request->bindValue(":max_players", $game->getMax_players());
        $request->execute();
        if ($request) {
            if ($request == 1) {
                GameService::addMessage("success",  "Le nouveau jeu a bien été enregistré");
                return true;
            }
            GameService::addMessage("danger",  "Erreur : le jeu n'a pas été enregisté");
            return false;
        }
        GameService::addMessage("danger",  "Erreur SQL");
        return null;
    }

    public function findAllGame()
    {
        $request = $this->dbConnection->prepare("SELECT * FROM game");

        if ($request->execute()) {
            return $request->fetchAll(\PDO::FETCH_CLASS, "Model\Entity\Game");
            } else {
                return null;
        }
    }   

    public function findGameById($id)
    {
        $request = $this->dbConnection->prepare("SELECT * FROM game WHERE id = :id");
        $request->bindParam(':id', $id);
    
        if ($request->execute()) {
            return $request->fetch(\PDO::FETCH_CLASS, "Model\Entity\Game");
        } else {
            return null;
        }
    }

    public function deleteGameById($id)
    {
    $request = $this->dbConnection->prepare("DELETE FROM game WHERE id = :id");
    $request->bindParam(':id', $id);

    if ($request->execute()) {
        return true; 
        // La suppression a réussi
        } else {
        return false; 
        // La suppression a échoué
        }
    }


}

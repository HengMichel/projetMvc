<?php

namespace Models\Repository;

use Service\Session;
use Models\Entity\Player;

class PlayerRepository extends BaseRepository
{
    public function addPlayer(Player $player)
    {
        $sql = "INSERT INTO player (email, nickname) VALUES (:email,:nickname)";
        $request = $this->dbConnection->prepare($sql);
        $request->bindValue(":email", $player->getEmail());
        $request->bindValue(":nickname", $player->getNickname()); 
        $request->execute();
        if ($request) {
            if ($request == 1) {
                Session::addMessage("success",  "Le joueur a bien été enregistré");
                return true;
            }
            Session::addMessage("danger",  "Erreur : le joueur n'a pas été enregisté");
            return false;
        }
        Session::addMessage("danger",  "Erreur SQL");
        return null;
    }

    public function findAllPlayers()
    {
        $request = $this->dbConnection->prepare("SELECT * FROM player");

        if ($request->execute()) {
            return $request->fetchAll(\PDO::FETCH_CLASS, "Models\Entity\Player");
            } else {
                return null;
        }
    }

    public function deletePlayerById($id)
    {
        $request = $this->dbConnection->prepare("DELETE FROM player WHERE id_player = :id_player");
        $request->bindParam(':id_player', $id);

        if ($request->execute()) {
        return true; 
        // La suppression a réussi
        } else {
        return false; 
        // La suppression a échoué
        }
    }

}

<?php

namespace Model\Repository;

use Model\Entity\Player;
use Service\Session;

class PlayerRepository extends BaseRepository
{
    public function addPlayer(Player $player)
    {
        $sql = "INSERT INTO player (email, nickname) VALUES (:email,:nickname)";
        $request = $this->dbConnection->prepare($sql);
        $request->bindValue(":email", $player->getEmail());
        $request->bindValue(":nickname", $player->getNickname()); 

        if ($request->execute() && $request->rowCount() == 1) {
            // Si l'insertion s'est bien déroulée, récupérer l'ID généré automatiquement
            $player->setId($this->dbConnection->lastInsertId());

            Session::addMessage("success", "Le joueur a bien été enregistré");
            return true;
        }

        Session::addMessage("danger", "Erreur : le joueur n'a pas été enregistré");
        return false;
    
    }

    public function findAllPlayers()
    {
        // $request = $this->dbConnection->prepare("SELECT * FROM player");
        $request = $this->dbConnection->query("SELECT id_player, email, nickname FROM player");

        if ($request->execute()) {
            return $request->fetchAll(\PDO::FETCH_CLASS, "Model\Entity\Player");
            // return $request->fetchAll(\PDO::FETCH_CLASS, Player::class);

            } else {      

                return null;
        }
    }

    public function deletePlayerById($id)
    {
        $request = $this->dbConnection->prepare("DELETE FROM player WHERE id_player = :id_player");
        $request->bindParam(':id_player', $id);
    
        if ($request->execute()) {
            if ($request->rowCount() == 1) {
                Session::addMessage("success", "Le joueur a été supprimé avec succès");
                return true;
            } else {
                Session::addMessage("danger", "Aucun joueur n'a été supprimé");
                return false;
            }
        } else {
            Session::addMessage("danger", "Erreur lors de la suppression du joueur");
            return false;
        }
    }

    public function updateAbonne(Player $player)
    {
        $sql = "UPDATE player 
                         SET email = :email, nickname = :nickname
                         WHERE id_player = :id_player";
        $requete = $this->dbConnection->prepare($sql);
        $requete->bindValue(":email", $player->getEmail());
        $requete->bindValue(":nickname", $player->getNickname());
        $requete->bindValue(":id_player", $player->getId());
        $requete = $requete->execute();
        if ($requete) {
            if ($requete == 1) {
                Session::addMessage("success",  "La mise à jour de du joueur a bien été éffectuée");
                return true;
            }
            Session::addMessage("danger",  "Erreur : du joueur n'a pas été mise à jour");
            return false;
        }
        Session::addMessage("danger",  "Erreur SQL");
        return null;
    }
    
}

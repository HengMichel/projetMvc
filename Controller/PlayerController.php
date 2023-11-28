<?php

namespace Controller;

use Models\Entity\Player;

class PlayerController extends BaseController{

    public function list(){

        $this->render("list_player.php");
    }
    
    public function addPlayerBy($email, $name)
    {
        Player::addPlayer($email, $name);
        // gérer la réponse ou la redirection
        $this->render("form_player.php");
    }

    public function findAllPlayer(){

        $this->render("list_player.php");
    }

    public function deletePlayerById($id)
    {
        $player = Player::deletePlayerById($id);
        // gérer la réponse ou la redirection
        $this->render("list_player.php");
    }

}
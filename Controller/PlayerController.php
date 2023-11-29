<?php

namespace Controller;

use Controller\BaseController;
use Models\Entity\Player;

class PlayerController extends BaseController{

    public function list(){

        $this->render("player/list_player.php");
    }
    
    public function formPlayer(){

        $this->render("player/add_player.php");
    }
    
    public function addPlayer($email, $name)
    {
        Player::addPlayer($email, $name);
        $this->render("player/list_player.php");
    }

    public function findAllPlayer(){

        $this->render("player/list_player.php");
    }

    public function deletePlayerById($id)
    {
        $player = Player::deletePlayerById($id);
        // gérer la réponse ou la redirection
        $this->render("player/list_player.php");
    }

}
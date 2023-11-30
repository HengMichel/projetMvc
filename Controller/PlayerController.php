<?php

namespace Controller;

use Models\Entity\Player;
use Form\PlayerHandleRequest;
use Controller\BaseController;
use Models\Repository\PlayerRepository;

class PlayerController extends BaseController
{
    private $playerRepository;
    private $form;
    private $player;

    public function __construct()
    {
        $this->playerRepository = new PlayerRepository;
        $this->form = new PlayerHandleRequest;
        $this->player = new player;
    }

    public function list(){

        $players = $this->playerRepository->findAll($this->player);

        // $this->render("player/list_player.php");
        $this->render("player/list_player.php", [
            "players" => $players
        ]);
    }
    
    public function newPlayer(){

        $player = $this->player;
        $this->form->handleForm($player);

        if ($this->form->isSubmitted() && $this->form->isValid()) {
            $this->playerRepository->addPlayer($player);
            return redirection(addLink("home"));
        }

        $errors = $this->form->getEerrorsForm();

        return $this->render("player/form_player.php",  [
            "player" => $player,
            "errors" => $errors
        ]);
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
<?php

namespace Controller;

use Model\Entity\Player;
use Model\Repository\PlayerRepository;
use Form\PlayerHandleRequest;

class PlayerController extends BaseController
{
    private $playerRepository;
    private $form;

    private $player;

    public function __construct()
    {
        $this->playerRepository = new PlayerRepository;
        $this->form = new PlayerHandleRequest;

        $this->player = new Player;
    }

    public function list()
    {
        $players = $this->playerRepository->findAll($this->player);

        $this->render("player/list_player.php", [
            "players" => $players
        ]);
    }

    public function newPlayer()
    {
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

    public function deletePlayerById($id)
    {
        $this->playerRepository->deletePlayerById($id);
        return redirection(addLink("home"));
    }
}

<?php

namespace Service;

use Model\Repository\PlayerRepository;

class PlayerService
{
    protected $playerRepository;

    public function __construct(PlayerRepository $playerRepository)
    {
        $this->playerRepository = $playerRepository;
    }

    public function findAllPlayers()
    {
        return $this->playerRepository->findAllPlayers();
    }
}

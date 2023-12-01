<?php

// namespace Controller;

// use Model\Entity\Player;
// use Form\PlayerHandleRequest;
// use Controller\BaseController;
// use Model\Repository\PlayerRepository;

// class PlayerController extends BaseController
// {
//     private $playerRepository;
//     private $form;
//     private $player;

//     public function __construct()
//     {
//         $this->playerRepository = new PlayerRepository;
//         $this->form = new PlayerHandleRequest;
//         $this->player = new player;
//     }

//     public function list(){

//         $players = $this->playerRepository->findAll($this->player);

//         // $this->render("player/list_player.php");
//         $this->render("player/list_player.php", [
//             "players" => $players
//         ]);
//     }
    
//     public function newPlayer(){

//         $player = $this->player;
//         $this->form->handleForm($player);

//         if ($this->form->isSubmitted() && $this->form->isValid()) {
//             $this->playerRepository->addPlayer($player);
//             return redirection(addLink("home"));
//         }

//         $errors = $this->form->getEerrorsForm();

//         return $this->render("player/form_player.php",  [
//             "player" => $player,
//             "errors" => $errors
//         ]);
//     }
    
//     public function addPlayer($email, $name)
//     {
//         Player::addPlayer($email, $name);
//         $this->render("player/list_player.php");
//     }

//     public function findAllPlayer(){

//         $this->render("player/list_player.php");
//     }

//     public function deletePlayerById($id)
//     {
//         $player = Player::deletePlayerById($id);
//         // gérer la réponse ou la redirection
//         $this->render("player/list_player.php");
//     }












//     public static function addPlayer($email, $name)
//     {
//         $db = new Database();
//         $connection = $db->dbConnect();
//         $repository = new PlayerRepository($connection);
//         $repository->addPlayer($email, $name);
//         header("Location: http://localhost/projetMvc/form_player.php");
//         exit();
//     }

//     public static function findAllPlayers()
//     {
//         $db = new Database();
//         $connection = $db->dbConnect();
//         $repository = new PlayerRepository($connection);
//         return $repository->findAllPlayers();
//     }

//     public static function deletePlayerById($id)
//     {
        
//         $db = new Database();
//         $connection = $db->dbConnect();
//         $repository = new PlayerRepository($connection);
//         $repository->deletePlayerById($id);
//         header("Location: http://localhost/projetMvc/list_player.php");
//         exit(); 

//     }

// }

namespace Controller;

use Model\Entity\Player;
use Form\PlayerHandleRequest;
// use Controller\BaseController;
use Model\Repository\PlayerRepository;

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
        // $players = $this->playerRepository->findAllPlayers();
        // $this->render("player/list_player.php", [
        //     "players" => $players
        // ]);

        $players = $this->playerRepository->findAll($this->player);

        $this->render("player/list_player.php", [
            "players" => $players
        ]);
    }

    public function newPlayer()
    {
        // $player = new Player();
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

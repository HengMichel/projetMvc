<?php

namespace Controller;

use Models\Entity\Game;
use Models\Entity\Player;
use Models\Entity\Contest;
use Form\GameHandleRequest;
use Controller\BaseController;
use Models\Repository\GameRepository;

class GameController extends BaseController
{
    private $gameRepository;
    private $form;
    private $game;

    public function __construct()
    {
        $this->gameRepository = new GameRepository;
        $this->form = new GameHandleRequest;
        $this->game = new Game;
    }
    public function list(){

        $games = $this->gameRepository->findAll($this->game);

        // $this->render("game/list_game.php");
        $this->render("game/list_game.php", [
            "games" => $games
        ]);
    }

    public function newGame()
    {
        $game = $this->game;
        $this->form->handleForm($game);

        if ($this->form->isSubmitted() && $this->form->isValid()) {
            $this->gameRepository->addGame($game);
            return redirection(addLink("home"));
        }

        $errors = $this->form->getEerrorsForm();

        return $this->render("game/form_game.php",  [
            "game" => $game,
            "errors" => $errors
        ]);
    }

    public function findAllGameById($id)
    {
        // $game = Game::findGameById($id);
        // $this->render("game/list_game.php");

        $games = $this->gameRepository->findAllGame($id);

        $this->render("game/game_list.php", [
            "h1" => "Liste des utilisateurs",
            "games" => $games
        ]);
    }

    public function deleteGameById($id)
    {
        // $game = Game::deleteGameById($id);
        // $this->render("game/list_game.php");

        $games = $this->gameRepository->deleteGameById($id);

        $this->render("game/game_list.php", [
            "games" => $games
        ]);
    }

    // public function addGame($title, $numberMinPlayers, $numberMaxPlayers)
    // {
    //     Game::addGame($title, $numberMinPlayers, $numberMaxPlayers);
    //     $this->render("game/add_game.php");
    // }

    public function addPlayer($email, $name)
    {
        Player::addPlayer($email, $name);
        // gérer la réponse ou la redirection
        $this->render("player/new_player.php");
    }

    public function addContest($game_id, $start_date, $winner_id)
    {
        Contest::addContest($game_id, $start_date, $winner_id);
        // gérer la réponse ou la redirection
        $this->render("contest/add_contest.php");

    }

    public function deletePlayerById($idPlayer)
    {
        Player::deletePlayerById($idPlayer);
        // gérer la réponse ou la redirection
        $this->render("player/list_player.php");

    }
}

// Exemple d'utilisation :
// $gameController = new GameController();

// if (isset($_GET['id_game_delete'])) {    
//     $gameController->deleteGameById($_GET['id_game_delete']);
// } elseif (isset($_POST['add_game'])) {
//     $gameController->newGame($_POST['title'], $_POST['min_players'], $_POST['max_players']);
// } elseif (isset($_POST['add_player'])) {
//     $gameController->addPlayer($_POST['email'], $_POST['nickname']);
// } elseif (isset($_POST['add_contest'])) {
//     $gameController->addContest($_POST['game_id'], $_POST['start_date'], $_POST['winner_id']);
// } elseif (isset($_GET['idPlayer'])) {
//     $gameController->deletePlayerById($_GET['idPlayer']);
// } else {
    // Utilisation du routage (exemple simplifié) :
    // $action = $_GET['action'] ?? 'listGames';

    // switch ($action) {
    //     case 'deleteGame':
    //         $gameController->deleteGameById($_GET['id']);
    //         break;
        // Ajoutez d'autres cas pour d'autres actions...
//         default:
//             $gameController->list();
//             break;
//     }
// }
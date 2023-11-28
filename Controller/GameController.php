<?php

namespace Controller;

use Models\Entity\Game;
use Models\Entity\Contest;
use Models\Entity\Player;

class GameController extends BaseController

{
    public function list(){

        // $this->render("list_game.php");
    }

    public function deleteGameById($id)
    {
        $game = Game::deleteGameById($id);
        // gérer la réponse ou la redirection
        $this->render("list_game.php");
    }

    public function addGame($title, $numberMinPlayers, $numberMaxPlayers)
    {
        Game::addGame($title, $numberMinPlayers, $numberMaxPlayers);
        // gérer la réponse ou la redirection
        $this->render("list_game.php");
    }

    public function addPlayer($email, $name)
    {
        Player::addPlayer($email, $name);
        // gérer la réponse ou la redirection
        $this->render("list_player.php");
    }

    public function addContest($game_id, $start_date, $winner_id)
    {
        Contest::addContest($game_id, $start_date, $winner_id);
        // gérer la réponse ou la redirection
        $this->render("list_contest.php");

    }

    public function deletePlayerById($idPlayer)
    {
        Player::deletePlayerById($idPlayer);
        // gérer la réponse ou la redirection
        $this->render("list_player.php");

    }
}

// Exemple d'utilisation :
$gameController = new GameController();

if (isset($_GET['id_game_delete'])) {    
    $gameController->deleteGameById($_GET['id_game_delete']);
} elseif (isset($_POST['add_game'])) {
    $gameController->addGame($_POST['title'], $_POST['min_players'], $_POST['max_players']);
} elseif (isset($_POST['add_player'])) {
    $gameController->addPlayer($_POST['email'], $_POST['nickname']);
} elseif (isset($_POST['add_contest'])) {
    $gameController->addContest($_POST['game_id'], $_POST['start_date'], $_POST['winner_id']);
} elseif (isset($_GET['idPlayer'])) {
    $gameController->deletePlayerById($_GET['idPlayer']);
} else {
    // Utilisation du routage (exemple simplifié) :
    $action = $_GET['action'] ?? 'listGames';

    switch ($action) {
        case 'deleteGame':
            $gameController->deleteGameById($_GET['id']);
            break;
        // Ajoutez d'autres cas pour d'autres actions...
        default:
            $gameController->list();
            break;
    }
}
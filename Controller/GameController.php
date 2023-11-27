<?php

namespace Controller;

use Models\Entity\Jeu;
use Models\Entity\Contest;
use Models\Entity\Joueur;

class GameController extends BaseController

{
    public function deleteJeuById($id)
    {
        $jeu = Jeu::deleteJeuById($id);
        // gérer la réponse ou la redirection
        $this->render("views/list_jeu.php");
    }

    public function addJeu($title, $numberMinPlayers, $numberMaxPlayers)
    {
        Jeu::addJeu($title, $numberMinPlayers, $numberMaxPlayers);
        // gérer la réponse ou la redirection
        $this->render("views/list_jeu.php");
    }

    public function addJoueur($email, $name)
    {
        Joueur::addJoueur($email, $name);
        // gérer la réponse ou la redirection
        $this->render("views/list_joueur.php");
    }

    public function addMatch($game_id, $start_date, $winner_id)
    {
        Contest::addMatch($game_id, $start_date, $winner_id);
        // gérer la réponse ou la redirection
        $this->render("views/list_match.php");

    }

    public function deleteJoueurById($idJoueur)
    {
        Joueur::deleteJoueurById($idJoueur);
        // gérer la réponse ou la redirection
        $this->render("views/list_joueur.php");

    }
}

// Exemple d'utilisation :
$gameController = new GameController();

if (isset($_GET['id_jeu_delete'])) {
    $gameController->deleteJeuById($_GET['id_jeu_delete']);
} elseif (isset($_POST['add_jeu'])) {
    $gameController->addJeu($_POST['title'], $_POST['min_players'], $_POST['max_players']);
} elseif (isset($_POST['add_joueur'])) {
    $gameController->addJoueur($_POST['email'], $_POST['nickname']);
} elseif (isset($_POST['add_match'])) {
    $gameController->addMatch($_POST['game_id'], $_POST['start_date'], $_POST['winner_id']);
} elseif (isset($_GET['idJoueur'])) {
    $gameController->deleteJoueurById($_GET['idJoueur']);
}
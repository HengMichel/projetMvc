<?php

use Models\Entity\Game;

if (isset($_GET['id_game'])) {
    // identifiant de l'emprunt
    $id = $_GET['id_game'];
    // appel de la methode returnBook
    $game = Game::findGameById($id);
}
?>

<div class="container">
    <h1 class="m-5 link-warning">Ajouter un Game</h1>
    <form action="./traitement/action.php" method="post">

        <div class="form-group  mb-3">
            <label class="m-2 link-warning ">Titre du Game :</label>
            <input type="text" class="form-control text-uppercase border-warning border-3" name="title" value="<?= !empty($game) ? $game["title"] : "" ?>">
        </div>

        <div class="form-group  mb-3">
            <label class="m-2 link-warning">Min player :</label>
            <input type="number" class="form-control text-uppercase border-warning border-3" name="min_players" value="<?= !empty($game) ? $game["min_players"] : "" ?>">
        </div>

        <div class="form-group  mb-3">
            <label class="m-2 link-warning">Max player :</label>
            <input type="number" class="form-control text-uppercase border-warning border-3" name="max_players" value="<?= !empty($game) ? $game["max_players"] : "" ?>">
        </div>

        <button type="submit" id="bouton" class="btn btn-black border-warning mt-5 mb-5 link-warning" name=<?= !empty($game) ? "update_game" : "add_game" ?>> <?= !empty($game) ? "Update" : "Add" ?>Add Game</button>
    </form>
</div>
